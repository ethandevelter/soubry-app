<section class="bg-gradient-to-b to-[#242424] from-[#D03630]">
    <x-container>
        <div class="py-24">
            <div class="flex flex-row">
                <div class="w-6/12">
                    <h2 class="text-white pb-7">{{$block->five_title}}</h2>
                    <div class="main-text text-white pb-7">{{$block->five_text}} </div>
                    <a class="btn-white">{{$block->five_button_text}} <span><x-map-arrowwatcher></x-map-arrowwatcher></span></a>
                </div>
                <div class="w-1/12"></div>
                <div class="w-4/12">
                    <img class="h-full rounded-45px" src="{{asset('/storage/photos/mountain.png')}}"/>
                </div>
                <div class="w-1/12"></div>
            </div>
        </div>
    </x-container>
</section>