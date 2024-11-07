@php
    use Carbon\Carbon;
@endphp
@livewire('cookie-banner')
<footer class="bg-white pt-10 border-t border-gray-300">
    <div class="container mx-auto px-4 flex lg:flex-row flex-col lg:justify-between lg:items-start">
        <!-- Left Section -->
        <div class="flex flex-col items-start mb-6 lg:mb-0 w-3/12">
            <div class="flex items-center mb-4">
                <img src="{{asset('/storage/photos/Logo Soubry Kenny.png')}}" alt="Soubry Kenny Logo Footer" class="h-14">
            </div>
            <p class="text-gray-700 text-sm leading-relaxed">
                Zowel voor kleine als voor grote inboedelopruimingen kunt u terecht bij opruimingsdienst Soubry Kenny VOF. Hij verplaatst zich over heel West-Vlaanderen!
            </p>
            <div class="flex space-x-4 mt-4">
                <a target="_blank" href="https://www.facebook.com/p/Opruimingen-Soubry-Kenny-100057422350972/?locale=nl_BE" class="bg-red-600 text-white p-2 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878V15.93H7.898v-3.93h2.54v-2.996c0-2.508 1.492-3.896 3.777-3.896 1.093 0 2.236.195 2.236.195v2.456h-1.26c-1.243 0-1.63.771-1.63 1.56v1.88h2.773l-.443 3.93H13.56v5.948C18.343 21.128 22 16.991 22 12z"/>
                    </svg>
                </a>
                <a target="_blank" href="https://www.google.be/maps/place/Zuidhoekstraat+2,+8880+Ledegem/@50.8639009,3.1831683,17z/data=!3m1!4b1!4m6!3m5!1s0x47c330e809cc94f9:0xbb503d725e8bcc25!8m2!3d50.8638975!4d3.1857432!16s%2Fg%2F11krgwkyb_?hl=nl&entry=ttu&g_ep=EgoyMDI0MTAyOS4wIKXMDSoASAFQAw%3D%3D" class="bg-red-600 text-white p-2 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c-3.204 0-5.828 2.623-5.828 5.828 0 4.52 5.066 10.316 5.339 10.63.216.248.64.248.856 0 .273-.314 5.339-6.11 5.339-10.63 0-3.205-2.624-5.828-5.828-5.828zm0 7.804c-1.095 0-1.984-.889-1.984-1.984 0-1.095.889-1.984 1.984-1.984 1.096 0 1.984.889 1.984 1.984 0 1.095-.888 1.984-1.984 1.984z"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="w-1/12"></div>
        <!-- Center Section -->
        <div class="flex flex-row w-8/12">
            <div class="flex flex-col mb-6 lg:mb-0 lg:mx-8">
                <h4 class="font-semibold text-gray-800 mb-2">Ontdek</h4>
                <ul class="text-sm space-y-2">
                    <li><a href="/" class="text-red-600">Home</a></li>
                    <li><a href="/opruimingen" class="text-gray-800">Opruimingen</a></li>
                    <li><a href="/verhuizingen" class="text-gray-800">Verhuizingen</a></li>
                    <li><a href="https://soubry-cleaning.be/" target="_blank" class="text-gray-800">Poetsdienst</a></li>
                    <li><a href="/overige-diensten" class="text-gray-800">Overige diensten</a></li>
                    <li><a href="/contact" class="text-gray-800">Contact</a></li>
                </ul>
            </div>
            <!-- Right Section -->
            <div class="flex flex-col">
                <h4 class="font-semibold text-gray-800 mb-2">Contact</h4>
                <div class="text-sm text-gray-700">OPRUIMINGSDIENST SOUBRY KENNY VOF<br>Zuidhoekstraat 2, Sint-Eloois-Winkel.</div>
                <div class="text-sm text-gray-700 mt-2"><a href="tel: 0490118796;">0490 11 87 96</a><br><a href="mailto: kenny.soubry@gmail.com;">kenny.soubry@gmail.com</a><br>BE 0770 638 868</div>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-4 mt-8 text-center text-xs text-gray-600 pb-2">
        <p>Copyright © {{Carbon::now()->year}} Soubry Kenny | <a href="/privacy-policy" class="hover:underline">Privacy Policy</a></p>
    </div>
    <div class="bg-mainhometwo flex flex-row items-center justify-center mx-auto py-2">
        <a href="https://www.adalace.be" target="_blank" class="text-white font-light text-sm pr-1 pt-0.5">Site by</a>
        <span>
            <a href="https://www.adalace.be" target="_blank""><img class="h-4 object-contain" src="{{asset('/storage/photos/Adalace_White.svg')}}"/></a>
        </span>
    </div>
</footer>