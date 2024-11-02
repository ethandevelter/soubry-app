<div x-data="{ input: @entangle('inputData').defer, showHtml: false }">
    <div class="font-Questrial text-white mb-2 flex flex-wrap gap-2">
        <!-- Formatting buttons -->
        <button @click="document.execCommand('italic', false, null)">Italic</button>
        <button @click="document.execCommand('bold', false, null)">Bold</button>
        <button @click="document.execCommand('underline', false, null)">Underline</button>
        <button @click="document.execCommand('JustifyCenter', false, '')">Center</button>
        <button @click="document.execCommand('JustifyLeft', false, '')">Left</button>
        <button @click="document.execCommand('JustifyRight', false, '')">Right</button>
        <button @click="document.execCommand('formatBlock', false, 'h1')">H1</button>
        <button @click="document.execCommand('formatBlock', false, 'h2')">H2</button>
        <button @click="document.execCommand('formatBlock', false, 'h3')">H3</button>
        <button @click="document.execCommand('insertOrderedList', false, null)">OL</button>
        <button @click="document.execCommand('insertUnorderedList', false, null)">UL</button>
        
        <!-- Show HTML button to trigger Livewire and display HTML code -->
        <button wire:click="showHtml({{ $item->id }})" @click="showHtml = true" class="main_btn !mt-0">HTML</button>
        
        <input type="text" class="main_input" id="linkInput" placeholder="Enter URL here" />
        <button class="main_btn !mt-0" @click="createLink()">Add Link</button>
    </div>

    <div class="relative">
        <!-- Contenteditable div -->
        <div 
            contenteditable="true" 
            @input="input = $event.target.innerHTML"
            {{--@blur="$wire.set('inputData', input)"--}}
            x-ref="editableDiv"
            class="min-h-40 editable block main_input !w-full border border-white">
            {!! $item->content !!}
        </div>
        <input class="text-black placeholder:text-black" type="text" x-model="input" hidden />
    </div>
    <!-- Save button -->
    <input type="text" wire:model.defer="realvalue.{{$item->id}}" x-model="input"/>
    <input type="text" wire:model.defer="realvalue.{{$item->id}}" :value="htmlMode ? '' : input"/>
    {!! $item->content !!}
    <button class="main_btn mb-12" @click="$wire.set('realvalue.{{ $item->id }}', input);" wire:click="show({{ $item->id }})">Save</button>
    <!-- Modal or section to show and edit HTML content -->
    <div x-show="showHtml" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-75 p-4">
        <div class="bg-white p-6 rounded-lg max-w-md w-full">
            <h2 class="text-xl font-semibold mb-4">Edit HTML Content</h2>
            <!-- Textarea to display and edit HTML -->
            <textarea wire:model.defer="htmlContent.{{ $item->id }}" rows="10" class="w-full p-2 border border-gray-300 rounded text-black placeholder:text-black"></textarea>
            <!-- Save and Cancel buttons -->
            <div class="mt-4 flex justify-end gap-2">
                <button @click="showHtml = false" class="main_btn bg-gray-300">Cancel</button>
                <button wire:click="updateHtmlContent" @click="showHtml = false" class="main_btn bg-blue-500 text-white">Save</button>
            </div>
        </div>
    </div>
    <script>
        function createLink() {
            const url = document.getElementById('linkInput').value;
            document.execCommand('createLink', false, url);
        }
    </script>
</div>