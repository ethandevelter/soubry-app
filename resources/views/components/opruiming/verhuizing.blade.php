@php
    $verhuis = table('verhuizingenpage')->first();
@endphp
<section class="bg-gray-50">
    <div class="relative flex flex-col items-center justify-center text-center py-44 bg-cover bg-center hero-overlay min-h-60vh" style="background-image : url({{asset($verhuis->hero_image)}})">
        <h1 class="alt">{{$verhuis->intro_title}}</h1>
        <div class="mt-6 max-w-lg mx-auto main-text text-white z-10 !font-extralight">{{$verhuis->intro_text}}</div>
    </div>
</section>
<div class="bg-gray-50 font-sans">
    <!-- Specialisatie Section -->
    <section class="py-16 bg-gray-100">
        <x-container>
            <div class="flex flex-wrap justify-between items-start">
                <!-- Left Column - Specialisaties -->
                <div class="w-full md:w-5/12 mb-6 md:mb-0">
                    <h2 class="text-black mb-4">{{$verhuis->second_title}}</h2>
                    <div class="main-text !text-base text-black mb-6 w-9/12">{{$verhuis->second_text}}</div>
                    <a href="/contact" class="btn-white alt">{{$verhuis->button_text}} <span><x-map-arrowwatcher></x-map-arrowwatcher></span></a>
                </div>
                <!-- Right Columns - Opruiming Options -->
                {{--<div class="w-full md:w-7/12 flex flex-wrap space-y-6 md:space-y-0">
                    <!-- Opruiming inboedel -->
                    @php
                        $records = table('opruimingen');
                        // Separate the matching and non-matching records
                        $sortedRecords = $records->sortByDesc(fn($cat) => $cat->cat === $verhuis->slug);
                    @endphp
                    @foreach ($sortedRecords as $cat)
                        <div class="w-full md:w-1/2 mb-12">
                            <h3 class="text-xl @if($verhuis->slug == $cat->cat) text-mainhomeone font-semibold @else text-mainhometwo font-medium @endif mb-4">{{ $cat->title }}</h3>
                            <div class="list-disc list-inside space-y-1">
                                {!! $cat->list !!}
                            </div>
                        </div>
                    @endforeach
                </div>--}}
            </div>
            <div class="flex flex-row pt-32">
                <div class="w-8/12 text-black main-text !text-base"> {!! $verhuis->extra_text !!}</div>
                <div class="w-1/12"></div>
                <section class="w-3/12 bg-gradient-to-b to-[#242424] from-[#D03630] rounded-40px h-fit">
                    <div class="mx-auto max-w-6xl px-6">
                        <div class="py-10">
                            <div class="flex flex-col">
                                <div class="w-full">
                                    <h3 class="text-white pb-7">Contacteer ons</h3>
                                    <div class="main-text !text-sm text-white pb-7">Zowel voor kleine als voor grote inboedelopruimingen kunt u terecht bij opruimingsdienst Soubry Kenny VOF. Hij verplaatst zich over heel West-Vlaanderen! &nbsp;</div>
                                    <a href="/contact" class="btn-white">Contact <span><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M694-466H212v-28h482L460-728l20-20 268 268-268 268-20-20 234-234Z"></path></svg></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </x-container>
    </section>

    <!-- Our Process Section -->
    <x-steps :block="$verhuis"></x-steps>
    <section class="py-20">
        {{--<x-container>
            <h2 class="text-black text-center my-24">{{$verhuis->fourth_title}}</h2>
            <div class="flex flex-wrap -mr-6">
                @php
                    $imagePaths = json_decode($verhuis->images);
                    shuffle($imagePaths);
                @endphp
                @foreach ($imagePaths as $img)
                    <div class="w-1/4 pr-6 mb-6">
                        <a data-fancybox="gallery" href="{{asset($img)}}">
                            <img class="h-64 w-full object-cover object-center rounded-40px hover:scale-105 duration-500" src="{{asset($img)}}">
                        </a>
                    </div>
                @endforeach
            </div>
        </x-container>--}}
    </section>
</div>