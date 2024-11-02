<div class="t-layout" x-data="{ 
    input: @entangle('inputData').defer, 
    showHtml: false,
    toggleBold() {
        const selection = window.getSelection();
        const range = selection.rangeCount > 0 ? selection.getRangeAt(0) : null;
        
        if (range && !range.collapsed) {
            const parentElement = range.commonAncestorContainer.parentElement;

            if (parentElement && parentElement.tagName === 'B') {
                const boldText = parentElement.innerHTML;
                parentElement.outerHTML = boldText;
            } else {
                document.execCommand('bold', false, null);
            }
        } else {
            const editableDiv = this.$refs.editableDiv;
            if (editableDiv.innerHTML.includes('<b>')) {
                editableDiv.innerHTML = editableDiv.innerHTML.replace(/<\/?b>/g, '');
            } else {
                editableDiv.innerHTML = `<b>${editableDiv.innerHTML}</b>`;
            }
        }

        this.input = this.$refs.editableDiv.innerHTML;
    },
    toggleHeading(tag) {
        const selection = window.getSelection();
        const range = selection.rangeCount > 0 ? selection.getRangeAt(0) : null;
        
        if (range && !range.collapsed) {
            const parentElement = range.commonAncestorContainer.parentElement;

            if (parentElement && parentElement.tagName === tag.toUpperCase()) {
                const content = parentElement.innerHTML;
                parentElement.outerHTML = content;
            } else {
                document.execCommand('formatBlock', false, tag);
            }
        } else {
            const editableDiv = this.$refs.editableDiv;
            if (editableDiv.innerHTML.includes(`<${tag}>`)) {
                editableDiv.innerHTML = editableDiv.innerHTML.replace(new RegExp(`<\/?${tag}>`, 'g'), '');
            } else {
                editableDiv.innerHTML = `<${tag}>${editableDiv.innerHTML}</${tag}>`;
            }
        }

        this.input = this.$refs.editableDiv.innerHTML;
    },
    toggleFormat(command) {
        document.execCommand(command, false, null);
        this.input = this.$refs.editableDiv.innerHTML;
    },
    createLink() {
        const url = document.getElementById('linkInput').value;
        this.$refs.editableDiv.focus();
        document.execCommand('createLink', false, url);
        this.input = this.$refs.editableDiv.innerHTML;
    }
}">
    <div class="font-Questrial text-white mb-2 flex flex-wrap gap-2">
        <!-- Formatting buttons with Alpine click events for toggling -->
        <button @click="toggleFormat('italic')" class="main_btn !bg-black">Italic</button>
        <button @click="toggleBold()" class="main_btn !bg-black">Bold</button>
        <button @click="toggleFormat('underline')" class="main_btn !bg-black">Underline</button>
        
        <!-- Heading buttons for H1, H2, H3 -->
        <button @click="toggleHeading('h1')" class="main_btn !bg-black">H1</button>
        <button @click="toggleHeading('h2')" class="main_btn !bg-black">H2</button>
        <button @click="toggleHeading('h3')" class="main_btn !bg-black">H3</button>
        
        <button @click="toggleFormat('justifyCenter')" class="main_btn !bg-black">Center</button>
        <button @click="toggleFormat('justifyLeft')" class="main_btn !bg-black">Left</button>
        <button @click="toggleFormat('justifyRight')" class="main_btn !bg-black">Right</button>
        <button @click="toggleFormat('insertOrderedList')" class="main_btn !bg-black">OL</button>
        <button @click="toggleFormat('insertUnorderedList')" class="main_btn !bg-black">UL</button>

        <!-- Show HTML button -->
        <button wire:click="showHtml({{ $item->id }})" @click="showHtml = true" class="main_btn !mt-0">HTML</button>
        
        <!-- Link input and button -->
        <input type="text" class="!border !border-gray-300 !border-solid main_input" id="linkInput" placeholder="Enter URL here" />
        <button class="main_btn !mt-0" @click="createLink">Add Link</button>
    </div>

    <div class="relative">
        <!-- Contenteditable div -->
        <div 
            contenteditable="true"
            @input="input = $event.target.innerHTML"
            x-ref="editableDiv"
            class="!border !border-gray-300 !border-solid min-h-40 editable block main_input !w-full">
            {!! $item->field_value !!}
        </div>
        <input class="text-black placeholder:text-black" type="text" x-model="input" hidden />
    </div>
    
    <!-- Save button -->
    <input class="hidden" type="text" wire:model.defer="realvalue.{{$item->id}}" x-model="input"/>
    <input class="hidden" type="text" wire:model.defer="realvalue.{{$item->id}}" :value="input"/>
    <button class="main_btn my-2" @click="input = $refs.editableDiv.innerHTML; $wire.set('realvalue.{{ $item->id }}', input);" wire:click="show({{ $item->id }})">Save</button>

    <!-- Modal for editing HTML content -->
    <div x-show="showHtml" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-75 p-4">
        <div class="bg-white p-6 rounded-lg max-w-md w-full">
            <h2 class="text-xl font-semibold mb-4">Edit HTML Content</h2>
            <textarea wire:model.defer="htmlContent.{{ $item->id }}" rows="10" class="w-full p-2 border border-gray-300 rounded text-black placeholder:text-black"></textarea>
            <div class="mt-4 flex justify-end gap-2">
                <button @click="showHtml = false" class="main_btn bg-gray-300">Cancel</button>
                <button wire:click="updateHtmlContent" @click="showHtml = false" class="main_btn bg-blue-500 text-white">Save</button>
            </div>
        </div>
    </div>
</div>