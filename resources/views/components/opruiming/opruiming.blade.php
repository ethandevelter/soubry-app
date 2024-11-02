@php
    $opruiming = table('opruimingspage')->first();
@endphp
<section class="bg-gray-50">
    <div class="relative flex flex-col items-center justify-center text-center py-44 bg-cover bg-center hero-overlay" style="background-image : url({{asset('storage/photos/Afbraakwerken.png')}})">
        <h1 class="alt">{{$opruiming->intro_title}}</h1>
        <div class="mt-6 max-w-lg mx-auto main-text text-white z-10 !font-extralight">{{$opruiming->intro_text}}</div>
    </div>
</section>
<div class="bg-gray-50 font-sans">
    <!-- Specialisatie Section -->
    <x-steps :block="$opruiming"></x-steps>
    <section class="py-20">
        <x-container>
            <h2 class="text-black text-center my-24">{{$opruiming->fourth_title}}</h2>
            <div class="flex flex-wrap -mr-6">
                @php
                    $imagePaths = json_decode($opruiming->images);
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
        </x-container>
    </section>
</div>