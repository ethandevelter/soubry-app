<div class="pb-20">
    <div class="pb-16">
        <h2 class="font-dmsans text-white text-5xl font-normal">{{$block->two_title}}</h2>
    </div>
    <div class="flex flex-row space-x-16 pb-24">
        <div class="w-4/12">
            @foreach (table('strengths') as $strength)
                <div x-data="{ open: false }" @click="open = !open" class="text-white border-b border-white pt-4 pb-4 cursor-pointer">
                    <div class="flex flex-row items-center strength-row">
                        <a class="transform transition-transform duration-300" :class="{ 'rotate-90': open }">
                            <x-map-arrowright></x-map-arrowright>
                        </a>
                        <div class="pl-3 main-text">{{$strength->title}}</div>
                    </div>
                    <div x-show="open" x-transition class="main-text text-sm strength-text pt-6" style="display: none;">
                        {{$strength->text}}
                    </div>
                </div>
            @endforeach
        </div>
        <div class="w-8/12 flex flex-row space-x-9">
            <div class="w-7/12 overflow-hidden rounded-40px">
                <img class="h-80 object-cover object-center rounded-40px hover:scale-105 duration-500" src="{{asset($block->image_one)}}"/>
            </div>
            <div class="w-5/12 overflow-hidden rounded-40px">
                <img class="h-80 object-cover object-center rounded-40px hover:scale-105 duration-500" src="{{asset($block->image_two)}}"/>
            </div>
        </div>
    </div>
    <hr class="h-px bg-white"/>
</div>