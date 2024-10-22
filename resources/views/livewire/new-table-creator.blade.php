<div class="relative z-50">
    <h1 class="text-white text-sm pb-4">Create a New Table</h1>
    <div class="flex flex-row gap-2 mb-6">
        <input class="main_input" type="text" wire:model="tableName" placeholder="Table Name" />
        @error('tableName') <span class="error">{{ $message }}</span> @enderror
        <button class="main_btn" wire:click="createTable">Create Table</button>
    </div>
    @foreach ($this->tables as $table)
        <div class="bg-gray-200/25 rounded-45px p-6 my-4 items-center justify-center">
            <div class="flex flex-row space-x-2 mb-6">
                <a><x-map-table></x-map-table></a>
                <span class="text-white text-sm">{{$table->name}}</span>
            </div>
            @foreach($this->records->where('table_id', $table->id) as $record)
                <div x-data="{ openside: false }" class="bg-black p-6 rounded-45px flex flex-row items-center space-x-6 mb-2 relative">
                    <a @click="openside = ! openside" class="cursor-pointer h-10 w-10 bg-black rounded-full flex items-center justify-center absolute -top-4 right-0">
                        <x-map-arrow></x-map-arrow>
                    </a>
                    <x-sidenav :record="$record" :table="$table"></x-sidenav>
                    <a class="text-white text-sm">{{$record->id}}</a>
                    <div class="flex flex-row space-x-2">
                        @foreach($this->fields->where('record_id', $record->id)->take(4) as $fielding)
                            <div class="flex flex-col relative">
                                <span class="text-white text-12px absolute -top-5">{{$fielding->field_name}} - {{$fielding->field_type}}</span>
                                <input class="main_input" wire:model="field.{{$fielding->id}}" type="text"/>
                            </div>
                        @endforeach
                    </div>
                    <button class="main_btn flex !items-end !justify-center !ml-auto" wire:click="saveEntry({{ $record->id }})">Save</button>
                </div>
            @endforeach
            <div class="space-x-2">
                <div class="mb-2">
                    <input class="!w-32 main_input" type="text" wire:model="newField" placeholder="Field name"/>
                    <input class="!w-32 main_input" type="text" wire:model="typeField" placeholder="Field type"/>
                    <button class="main_btn" wire:click="createField({{ $table->id }})">New Field</button>
                </div>
            </div>
            <button class="main_btn flex w-fit" wire:click="newEntry({{ $table->id }})">New entry</button>
        </div>
    @endforeach
</div>