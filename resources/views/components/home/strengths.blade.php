<div class="pb-20">
    <div class="pb-16">
        <h2 class="font-dmsans text-white text-5xl font-normal">{{$block->two_title}}</h2>
    </div>
    <div class="flex flex-row space-x-16 pb-24">
        <div class="w-4/12">
            <div class="flex flex-row items-center text-white border-b border-white pt-4 pb-4">
                <a class="pr-3"><x-map-arrowright></x-map-arrowright></a>
                <div class="main-text">Opruiming inboedel</div>
            </div>
        </div>
        <div class="w-8/12 flex flex-row space-x-9">
            <div class="w-7/12 overflow-hidden rounded-40px">
                <img class="h-80 object-cover object-center rounded-40px hover:scale-105 duration-500" src="{{asset('/storage/photos/mountain.png')}}"/>
            </div>
            <div class="w-5/12 overflow-hidden rounded-40px">
                <img class="h-80 object-cover object-center rounded-40px hover:scale-105 duration-500" src="{{asset('/storage/photos/naturedark.png')}}"/>
            </div>
        </div>
    </div>
    <hr class="h-px bg-white"/>
</div>