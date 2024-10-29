<section class="max-w-6xl mx-auto px-4 py-24 font-dmsans" x-data="{ maxHeight: 0 }" x-init="
    // Calculate the max height of the paragraphs
    maxHeight = Math.max(...Array.from($refs.description).map(el => el.offsetHeight));
">
    <h2 class="text-center mb-4">{{$block->three_title}}</h2>
    <div class="main-text text-black text-center mb-10">
        {{$block->three_text}}
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-8">
        <!-- First Service -->
        <div class="overflow-hidden">
            <div class="overflow-hidden rounded-40px">
                <img src="{{asset('/storage/photos/mountain.png')}}" alt="Opruimingen" class="hover:scale-105 duration-500 rounded-40px w-full h-80 object-cover">
            </div>
            <div class="pt-6">
                <h3 class="mb-4">Opruimingen</h3>
                <p class="text-gray-600 mb-6" x-ref="description" :style="{ minHeight: maxHeight + 'px' }">
                    Inboedelopruimingen in West-Vlaanderen. Wij zijn gespecialiseerd in het opruimen van inboedels.
                </p>
                <a href="#" class="text-black font-light duration-500 btn-large">Meer info <span><x-map-arrowwatcher></x-map-arrowwatcher></span></a>
            </div>
        </div>
        
        <!-- Second Service -->
        <div class="overflow-hidden">
            <div class="overflow-hidden rounded-40px">
                <img src="{{asset('/storage/photos/mountain.png')}}" alt="Uitbreken en opkuisen" class="hover:scale-105 duration-500 rounded-40px w-full h-80 object-cover">
            </div>
            <div class="pt-6">
                <h3 class="mb-4">Uitbreken en opkuisen</h3>
                <p class="text-gray-600 mb-6" x-ref="description" :style="{ minHeight: maxHeight + 'px' }">
                    Kleine of wat grotere afbraakwerken of opkuiswerken? Rekenen op Soubry Kenny.
                </p>
                <a href="#" class="text-red-500 hover:underline font-semibold">Meer info</a>
            </div>
        </div>

        <!-- Third Service -->
        <div class="overflow-hidden">
            <div class="overflow-hidden rounded-40px">
                <img src="{{asset('/storage/photos/mountain.png')}}" alt="Verhuizingen" class="hover:scale-105 duration-500 rounded-40px w-full h-80 object-cover">
            </div>
            <div class="pt-6">
                <h3 class="mb-4">Verhuizingen</h3>
                <p class="text-gray-600 mb-6" x-ref="description" :style="{ minHeight: maxHeight + 'px' }">
                    Nood aan een professionele verhuizer? Wij staan voor u klaar. Dit is een test of dit werkt test test test test test test
                </p>
                <a href="#" class="text-red-500 hover:underline font-semibold">Meer info</a>
            </div>
        </div>
    </div>
</section>