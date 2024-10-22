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
            <h3 class="font-atyp text-xl font-black text-black pb-2 -tracking-[0.5px] uppercase">{{ $table->name }} - {{$record->id}}</h3>
            <!-- Display records (multiple entries for each table) -->
        </div>
        <div class="flex flex-col">
            @foreach($this->fields->where('record_id', $record->id) as $fielding)
                <div class="flex flex-col relative mb-2">
                    <span class="text-black text-12px">{{$fielding->field_name}} - {{$fielding->field_type}}</span>
                    <input class="main_input alt" wire:model="field.{{$fielding->id}}" type="text"/>
                </div>
            @endforeach
        </div>
        <button class="main_btn absolute bottom-3 right-3" wire:click="saveEntry({{ $record->id }})">Save</button>
</div>