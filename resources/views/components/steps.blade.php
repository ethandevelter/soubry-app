<section>
    <x-container>
        <h2 class="text-black text-center py-24">{{$block->third_title}}</h2>
        <div x-data="{
            maxHeight: 0,
            adjustHeights() {
                this.maxHeight = Math.max(...Array.from(document.querySelectorAll('.box')).map(el => el.offsetHeight));
                document.querySelectorAll('.box').forEach(el => {
                    el.style.height = `${this.maxHeight}px`;
                });
            }
        }"
        x-init="adjustHeights()" class="flex flex-wrap justify-center items-start -mr-6 mb-14">
            @foreach (table('steps') as $index => $step)
            <div x-ref="wrapper" :style="{ height: maxHeight + 'px' }" class="box md:w-1/3 pr-6">
                <div class="w-full h-full @if($step->red == 'true') bg-mainhometwo text-white border border-mainhometwo @else bg-white text-black border border-black/10 @endif p-10 rounded-40px mb-4 md:mb-0 text-left">
                    <p class="!font-dmsans text-sm uppercase font-medium tracking-widest">Stap {{$index + 1}}</p>
                    <h3 class="!font-dmsans text-2xl font-bold mt-2">{{$step->title}}</h3>
                    <div class="!font-dmsans text-base font-light mt-4">{{$step->text}}</div>
                </div>
            </div>
            @endforeach
        </div>
        <hr class="border-dashed border border-mainhometwo w-full"/>
        <!-- Arrow Icons -->
        <div class="flex justify-center items-center space-x-6 w-full -mt-7">
            <div class="flex items-center justify-center w-1/3">
                <span class="material-icons text-mainhometwo w-14 h-14 border border-mainhometwo bg-gray-50 rounded-full flex items-center justify-center">arrow_forward</span>
            </div>
            <div class="flex items-center justify-center w-1/3">
                <span class="material-icons text-mainhometwo w-14 h-14 border border-mainhometwo bg-gray-50 rounded-full flex items-center justify-center">arrow_forward</span>
            </div>
            <div class="flex items-center justify-center w-1/3">
                <span class="material-icons text-mainhometwo w-14 h-14 border border-mainhometwo bg-gray-50 rounded-full flex items-center justify-center">check</span>
            </div>
        </div>
    </x-container>
</section>