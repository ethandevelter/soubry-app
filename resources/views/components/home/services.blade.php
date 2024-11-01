<section class="max-w-6xl mx-auto px-4 py-24 font-dmsans" x-data="{ maxHeight: 0 }" x-init="
    // Calculate the max height of the paragraphs
    maxHeight = Math.max(...Array.from($refs.description).map(el => el.offsetHeight));
">
    <h2 class="text-center mb-4">{{$block->three_title}}</h2>
    <div class="main-text text-black text-center mb-10">
        {{$block->three_text}}
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-8">
        @foreach (table('services') as $service)
            <div class="overflow-hidden">
                <div class="overflow-hidden rounded-40px">
                    <img src="{{asset($service->image)}}" alt="Opruimingen" class="hover:scale-105 duration-500 rounded-40px w-full h-80 object-cover">
                </div>
                <div class="pt-6">
                    <h3 class="mb-4">{{$service->title}}</h3>
                    <p class="text-gray-600 mb-6" x-ref="description" :style="{ minHeight: maxHeight + 'px' }">
                        {{$service->text}}
                    </p>
                    <a href="{{$service->link}}" class="text-black font-light duration-500 btn-large">Meer info <span><x-map-arrowwatcher></x-map-arrowwatcher></span></a>
                </div>
            </div>
        @endforeach
    </div>
</section>