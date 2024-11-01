@php
    $woning = table('woningenpage')->first();
@endphp
<section class="bg-gray-50">
    <div class="relative flex flex-col items-center justify-center text-center py-44 bg-cover bg-center hero-overlay" style="background-image : url({{asset('storage/photos/Afbraakwerken.png')}})">
        <h1 class="alt">{{$woning->intro_title}}</h1>
        <div class="mt-6 max-w-lg mx-auto main-text text-white z-10 !font-extralight">{{$woning->intro_text}}</div>
    </div>
</section>
<div class="bg-gray-50 font-sans">
    <!-- Specialisatie Section -->
    <section class="py-16 bg-gray-100">
        <x-container>
            <div class="flex flex-wrap justify-between items-start">
                <!-- Left Column - Specialisaties -->
                <div class="w-full md:w-5/12 mb-6 md:mb-0">
                    <h2 class="text-black mb-4">{{$woning->second_title}}</h2>
                    <div class="main-text !text-base text-black mb-4 w-9/12">{{$woning->second_text}}</div>
                    <a class="btn-white alt">{{$woning->button_text}} <span><x-map-arrowwatcher></x-map-arrowwatcher></span></a>
                </div>
                <!-- Right Columns - Opruiming Options -->
                <div class="w-full md:w-7/12 flex flex-wrap space-y-6 md:space-y-0">
                    <!-- Opruiming inboedel -->
                    <div class="w-full md:w-1/2 mb-12">
                        <h3 class="text-xl font-semibold text-mainhometwo">Opruiming inboedel</h3>
                        <ul class="mt-4 list-disc list-inside space-y-1">
                            <li>Volledige inboedels</li>
                            <li>Kelders</li>
                            <li>Schuren</li>
                            <li>Magazijnen</li>
                        </ul>
                    </div>

                    <!-- Opruimen na overlijden -->
                    <div class="w-full md:w-1/2 mb-12">
                        <h3 class="text-xl font-semibold text-mainhometwo">Opruimen na overlijden</h3>
                        <ul class="mt-4 list-disc list-inside space-y-1">
                            <li>Inboedel leegmaken</li>
                            <li>Garage leegmaken</li>
                            <li>Decoratiestukken opruimen</li>
                            <li>Grotere spullen opruimen (Rekken, kasten,...)</li>
                        </ul>
                    </div>

                    <!-- Opruimen van woningen -->
                    <div class="w-full md:w-1/2">
                        <h3 class="text-xl font-semibold text-mainhometwo">Opruimen van woningen</h3>
                        <ul class="mt-4 list-disc list-inside space-y-1">
                            <li>Algemene opruiming woning</li>
                            <li>Opkuis van garage</li>
                            <li>Kleine reparatie of sloopwerken</li>
                            <li>Ontsmetten, ontgeuren, schilderen</li>
                        </ul>
                    </div>

                    <!-- Opruimen van tuinen -->
                    <div class="w-full md:w-1/2">
                        <h3 class="text-xl font-semibold text-mainhometwo">Opruimen van tuinen</h3>
                        <ul class="mt-4 list-disc list-inside space-y-1">
                            <li>Opruimen van de tuin</li>
                            <li>Snoeien van verwilderde tuin</li>
                            <li>Nivelleren van bodem</li>
                        </ul>
                    </div>

                </div>
            </div>
        </x-container>
    </section>

    <!-- Our Process Section -->
    <section>
        <x-container>
            <h2 class="text-black text-center my-24">{{$woning->third_title}}</h2>
            <div class="flex flex-wrap justify-center items-start -mr-6 mb-14">
                <!-- Step 1 -->
                <div class="md:w-1/3 pr-6">
                    <div class="w-full bg-red-500 text-white p-10 rounded-40px mb-4 md:mb-0 text-left">
                        <p class="!font-dmsans text-sm uppercase font-medium tracking-widest">Stap 1</p>
                        <h3 class="!font-dmsans text-2xl font-bold mt-2">Bezoek</h3>
                        <div class="font-dmsans text-base text-white font-light mt-4">
                            Wij komen langs om de offerte op te maken en uniek, in tegenstelling tot vele collega's, wij brengen waardevolle spullen in vermindering op de kostprijs.
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="md:w-1/3 pr-6">
                    <div class="w-full bg-white text-gray-800 p-10 rounded-40px border border-gray-200 mb-4 md:mb-0">
                        <h3 class="text-sm font-semibold uppercase text-red-600">Stap 2</h3>
                        <h4 class="text-xl font-bold mt-2">Offerte op maat</h4>
                        <div class="mt-4">
                            U ontvangt de offerte binnen de 24 uur. Deze offerte is vrijblijvend!
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="md:w-1/3 pr-6">
                    <div class="w-full bg-white text-gray-800 p-10 rounded-40px border border-gray-200 mb-4 md:mb-0">
                        <h3 class="text-sm font-semibold uppercase text-red-600">Stap 3</h3>
                        <h4 class="text-xl font-bold mt-2">Goedkeuring</h4>
                        <div class="mt-4">
                            Na goedkeuring wordt de datum afgesproken voor de opruiming van de inboedel, ten vroegste binnen 2 weken na goedkeuring. U kan kiezen of de woning volledig moet gekuist worden of niet.
                        </div>
                    </div>
                </div>
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
    <section class="py-20">
        <x-container>
            <h2 class="text-black text-center my-24">{{$woning->fourth_title}}</h2>
            <div class="flex flex-wrap -mr-6">
                @php
                    $imagePaths = json_decode($woning->images);
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