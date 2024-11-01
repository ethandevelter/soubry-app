<x-container>
    <div class="py-20">
        <h2 class="text-center mb-4">{{$block->four_title}}</h2>
        <div class="flex flex-wrap -mr-6 pt-28">
            @foreach (table('realisations') as $rea)
                @php
                    $imagePaths = json_decode($rea->images);
                @endphp
                @foreach ($imagePaths as $img)
                    <div class="w-1/4 pr-6">
                        <a data-fancybox="gallery" href="{{asset($img)}}">
                            <img class="h-64 w-full object-cover object-center rounded-40px hover:scale-105 duration-500" src="{{asset($img)}}"/>
                        </a>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
</x-container>