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
                <div class="bg-black p-6 rounded-45px flex flex-row items-center">
                    <a class="text-white text-sm">{{$record->id}}</a>
                    <div>
                        @foreach($this->fields->where('record_id', $record->id) as $fielding)
                            {{$fielding->field_name}} {{$fielding->field_value}}
                            <input class="main_input" wire:model="field.{{$fielding->id}}" type="text"/>
                        @endforeach
                        <button class="main_btn" wire:click="saveEntry({{ $record->id }})">Save</button>
                    </div>
                </div>
            @endforeach
            <input class="!w-fit main_input" type="text" wire:model="newField" placeholder="Field name"/>
            <button class="main_btn" wire:click="createField({{ $table->id }})">New Field</button>
            <button class="main_btn flex w-fit" wire:click="newEntry({{ $table->id }})">New entry</button>
        </div>
    @endforeach
</div>