<x-container>
    <div class="py-20">
        <h2 class="text-center mb-4">{{$block->four_title}}</h2>
        <div class="flex flex-wrap -mr-6 pt-28">
            <div class="w-1/4 pr-6">
                <a data-fancybox="gallery" href="{{asset('/storage/photos/mountain.png')}}">
                    <img class="h-64 object-cover object-center rounded-40px hover:scale-105 duration-500" src="{{asset('/storage/photos/mountain.png')}}"/>
                </a>
            </div>
            <div class="w-1/4 pr-6">
                <img class="h-64 object-cover object-center rounded-40px hover:scale-105 duration-500" src="{{asset('/storage/photos/mountain.png')}}"/>
            </div>
            <div class="w-1/4 pr-6">
                <img class="h-64 object-cover object-center rounded-40px hover:scale-105 duration-500" src="{{asset('/storage/photos/mountain.png')}}"/>
            </div>
            <div class="w-1/4 pr-6">
                <img class="h-64 object-cover object-center rounded-40px hover:scale-105 duration-500" src="{{asset('/storage/photos/mountain.png')}}"/>
            </div>
            {{--<a data-fancybox="gallery" href="{{ asset($img) }}">
                
            </a>--}}
        </div>
    </div>
</x-container>