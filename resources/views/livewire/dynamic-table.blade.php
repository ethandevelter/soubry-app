<div class="relative z-10">
    <div>
        <h3 class="font-atyp text-xl font-black text-white pb-2 -tracking-[0.5px]">Create a new table</h3>
        <input class="main_input" type="text" wire:model="tableName" placeholder="Table Name">
        <button class="main_btn" wire:click="createTable">Create Table</button>
        @error('tableName') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div>
        @foreach($tables as $table)
        <div class="bg-gray-200/25 rounded-45px p-6 my-4 items-center justify-center">
            <div class="flex flex-row gap-2">
                <a><x-map-table></x-map-table></a>
                <h3 class="font-atyp text-xl font-black text-white pb-2 -tracking-[0.5px] uppercase">{{ $table->name }}</h3>
                <!-- Display records (multiple entries for each table) -->
            </div>
            @if(isset($fieldValues[$table->id]))
                @foreach($fieldValues[$table->id] as $recordId => $fields)
                    <div x-data="{ openside: false }" class="bg-black p-6 rounded-45px mb-4 text-white flex flex-row items-center space-x-6 relative">
                        <a @click="openside = ! openside" class="cursor-pointer h-10 w-10 bg-black rounded-full flex items-center justify-center absolute -top-4 right-0">
                            <x-map-arrow></x-map-arrow>
                        </a>
                        <div x-show="openside" x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 scale-100 translate-x-full"
                        x-transition:enter-end="opacity-100 scale-100 translate-x-0"
                        x-transition:leave="transition ease-in duration-500"
                        x-transition:leave-start="opacity-100 scale-100 translate-x-0"
                        x-transition:leave-end="opacity-0 scale-100 translate-x-full" class="main_sidenav relative" x-cloak>
                            <a @click="openside = ! openside" class="cursor-pointer bg-black h-14 w-14 absolute top-3 right-3 rounded-full flex items-center justify-center">
                                <x-map-close></x-map-close>
                            </a>
                            <div class="flex flex-row gap-2">
                                <a class="icon_invert"><x-map-table></x-map-table></a>
                                <h3 class="font-atyp text-xl font-black text-black pb-2 -tracking-[0.5px] uppercase">{{ $table->name }}</h3>
                                <!-- Display records (multiple entries for each table) -->
                            </div>
                            @foreach($fields as $fieldId => $value)
                                @php
                                    $field = $table->fields->find($fieldId);
                                @endphp
                                @if($field)
                                    <div>
                                        <label class="text-black text-sm font-light pb-4">{{ $field->name }} ({{ $field->type }})</label>
                                        <!-- Ensure we output a string value -->
                                        @if($field->type == "title")
                                            <input class="main_input alt !w-full mt-1" type="text" wire:model="fieldValues.{{ $table->id }}.{{ $recordId }}.{{ $fieldId }}" placeholder="Enter value for {{ $field->name }}"/>
                                        @elseif($field->type == "text")
                                            <textarea class="main_input alt !w-full mt-1" wire:model="fieldValues.{{ $table->id }}.{{ $recordId }}.{{ $fieldId }}" placeholder="Enter value for {{ $field->name }}"></textarea>
                                        @elseif($field->type == "image")
                                            <input type="file" class="main_input alt !w-full mt-1" wire:model="fieldValues.{{ $table->id }}.{{ $recordId }}.{{ $fieldId }}" placeholder="Enter value for {{ $field->name }}"/>
                                            @if(isset($fieldValues[$table->id][$recordId][$fieldId]) && is_string($fieldValues[$table->id][$recordId][$fieldId]) && ($fieldValues[$table->id][$recordId][$fieldId] != ""))
                                                <div class="flex items-end justify-end ml-auto mt-4">
                                                    <img class="rounded-xl object-cover object-center h-24" src="{{ $fieldValues[$table->id][$recordId][$fieldId] }}" class="mt-2" width="100"/>
                                                </div>
                                            @endif
                                        @elseif($field->type == "multi")
                                            <!-- Multiple File Input for multiple images -->
                                            <input type="file" multiple class="main_input alt !w-full mt-1" wire:model="fieldValues.{{ $table->id }}.{{ $recordId }}.{{ $fieldId }}" placeholder="Upload images for {{ $field->name }}"/>
                                
                                            <!-- Preview Uploaded Images -->
                                            <div class="mt-2 flex flex-wrap gap-4">
                                                @foreach($fieldImages as $image)
                                                    {{dd($image)}}
                                                    {{--<div class="relative">
                                                        <img src="{{ $image->image_path }}" alt="Uploaded Image" class="rounded-lg object-cover w-24 h-24" />
                                                        <span class="absolute top-0 right-0 text-xs font-semibold">{{ $image->order }}</span>
                                                    </div>--}}
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                @endif
                            @endforeach
                            <!-- Save all fields for the record -->
                            <button wire:click="saveRecord({{ $table->id }}, {{ $recordId }})" class="main_btn !bg-green-500 flex items-end justify-end !ml-auto absolute bottom-3 right-3">
                                Save Record
                            </button>
                        </div>
                        <h4 class="!ml-0">{{ $recordId }}.</h4>
                        <!-- Display fields for each record -->
                        @php
                            $limitedFields = array_slice($fields, 0, 4, true);
                        @endphp

                        @foreach($limitedFields as $fieldId => $value)
                            @php
                                $field = $table->fields->find($fieldId);
                            @endphp
                            @if($field)
                                <div>
                                    <label class="text-white text-xs font-light pb-4 absolute top-2.5">{{ $field->name }} ({{ $field->type }})</label>
                                    <!-- Ensure we output a string value -->
                                    <input class="main_input !w-full mt-1" type="text" wire:model="fieldValues.{{ $table->id }}.{{ $recordId }}.{{ $fieldId }}" placeholder="Enter value for {{ $field->name }}"/>
                                </div>
                            @endif
                        @endforeach
                        <!-- Save all fields for the record -->
                        <button wire:click="saveRecord({{ $table->id }}, {{ $recordId }})" class="main_btn !bg-green-500 flex items-end justify-end !ml-auto">
                            Save Record
                        </button>
                    </div>
                @endforeach
            @endif
            <!-- Button to add a new record -->
            <div style="margin-top: 10px;">
                <button wire:click="addNewRecord({{ $table->id }})" class="main_btn">
                    Add New Record
                </button>
            </div>
            <!-- Form to add a new field to the table -->
            <div style="margin-top: 20px;">
                <input class="main_input" type="text" wire:model="newFieldName.{{ $table->id }}" placeholder="Field Name">
                <input class="main_input" type="text" wire:model="fieldType.{{ $table->id }}" placeholder="Field Type">
                <button class="main_btn" wire:click="addField({{ $table->id }})">Add Field</button>
                @error('newFieldName.'.$table->id) <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>
        @endforeach
    </div>
</div>