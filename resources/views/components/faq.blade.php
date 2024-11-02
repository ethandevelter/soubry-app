<section class="bg-gray-50">
    <x-container>
        <h2 class="text-black text-center py-24">FAQ</h2>
        <div class="flex flex-wrap justify-center items-start -mr-6 mb-14">
            <!-- Step 1 -->
            @foreach (table('faq') as $index => $item)
                <div x-data="{ open: false }" class="w-full pr-6 mb-6 relative">
                    <div class="w-full bg-mainhometwo text-white p-10 rounded-45px mb-4 md:mb-0 text-left duration-700">
                        <!-- Toggle rotation class with x-bind -->
                        <a @click="open = !open" 
                           :class="{ 'rotate-90': open }" 
                           class="transform transition-transform duration-300 bg-black/45 w-10 h-10 absolute right-10 top-14 m-auto flex items-center justify-center rounded-full cursor-pointer">
                            <x-map-arrowwatcher></x-map-arrowwatcher>
                        </a>
                        <p class="!font-dmsans text-sm uppercase font-medium tracking-widest">Item {{$index + 1}}</p>
                        <h3 class="!font-dmsans !text-lg font-bold mt-2">{{$item->title}}</h3>
                        <div x-show="open" x-transition:enter="transition ease-out duration-700"
                        x-transition:enter-start="opacity-0 scale-90"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-700"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-90" x-cloak class="bg-white p-6 rounded-45px font-dmsans text-base text-black font-light mt-8 duration-500">{!! $item->text !!}</div>
                    </div>
                </div>
            @endforeach
    </x-container>
</section>