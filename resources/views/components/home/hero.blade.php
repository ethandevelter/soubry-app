<div class="flex flex-row w-full relative min-h-screen items-center justify-center">
    <div class="w-6/12">
        <h1 class="text-white">
            {{($block->intro_title)}}
        </h1>
        <div class="font-dmsans text-white main-text pt-5 pb-20">
            {{$block->intro_text}}
        </div>
        <div class="flex flex-row space-x-4">
            <a class="s-main-btn bg-white" href="tel: {{$block->intro_button_one}}">{{$block->intro_button_one}}</a>
            <a class="s-main-btn bg-transparent text-white" href="#offerte">{{$block->intro_button_two}}</a>
        </div>
    </div>
    
    <div class="w-6/12 relative" x-data="{ rotate: false}">
        <!-- Hammer Image with Instant Return to 0 degrees -->
        <img 
            x-init="setInterval(() => { rotate = true; showBam = true; setTimeout(() => { rotate = false;}, 600); }, 3000)" 
            :class="{ 'rotate-[-140deg] transition-transform duration-500': rotate, 'rotate-0 transition-transform duration-500': !rotate }"
            class="fixed bottom-0 right-[10rem] h-[75%] opacity-75 hero-img"
            src="{{asset('/storage/photos/metalhammer.png')}}"
        />
    </div>
</div>