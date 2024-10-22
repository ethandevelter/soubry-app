<div class="relative z-50">
    <div class="flex flex-row gap-2 mb-6">
        <input class="main_input type="text" wire:model="table_create"/>
        <button class="main_btn" wire:click="createTable">Create table</button>
    </div>
    <div>
        @foreach ($this->tables as $table)
            <div class="bg-gray-200/25 rounded-45px p-6 my-4 items-center justify-center">
                <div class="flex flex-row space-x-2 mb-6">
                    <a><x-map-table></x-map-table></a>
                    <span class="text-white">{{$table->name}}</span>
                </div>
                @foreach ($this->records->where('table_id', $table->id) as $record)
                    <div class="flex flex-row bg-black p-6 rounded-45px space-x-4 mb-4">
                        {{$record->id}}
                        @foreach ($this->fields->where('table_id', $table->id)->where('record_id', $record->id)->take(4) as $field)
                            <div class="flex flex-col w-1/4">
                                <label class="text-white text-sm pb-2">{{$field->name}} - {{$field->type}}</label>
                                @if($field->type == "title")
                                    <input class="main_input" wire:model="newfield.{{$field->id}}" type="text"/>
                                @elseif($field->type == "text")
                                    <input class="main_input" wire:model="newfield.{{$field->id}}" type="text"/>
                                @elseif($field->type == "image")
                                    <input type="file" class="main_input" wire:model="newfield.{{$field->id}}" type="text"/>
                                @elseif($field->type == "multi")
                                    <input type="file" multiple class="main_input" wire:model="newfield.{{$field->id}}" type="text"/>
                                @endif
                            </div>
                        @endforeach
                        @if(count($this->fields) > 0)
                            <button class="main_btn flex !items-end !justify-end !ml-auto h-fit" wire:click="saveItems({{ $table->id }}, {{ $record->id }})">Save</button>
                        @endif
                    </div>
                @endforeach
                <button wire:click="createRecord({{ $table->id }})">New record</button>
                <div class="flex flex-row space-x-2 mt-4">
                    <input class="main_input" type="text" wire:model="field_create.{{$table->id}}" placeholder="your field"/>
                    <input class="main_input" type="text" wire:model="fieldtype_create.{{$table->id}}" placeholder="your field type"/>
                    <button class="main_btn" wire:click="createField({{ $table->id }})">Create field</button>
                </div>
            </div>
        @endforeach
    </div>
</div>