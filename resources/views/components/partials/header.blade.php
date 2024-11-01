<header class="bg-white shadow-lg {{--fixed top-0 left-0 w-full z-999--}}">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <div class="flex items-center space-x-4">
            <img src="{{asset('/storage/photos/Logo Soubry Kenny.png')}}" alt="Soubry Kenny Logo" class="h-14">
        </div>
        <nav class="hidden md:flex ml-auto items-end justify-end">
            <ul class="md:flex ml-auto items-end justify-end space-x-6 mr-4">
                <li><a href="#" class="text-red-600 font-semibold">Home</a></li>
                <li class="relative" x-data="{ openmenu: false }" @mouseenter="openmenu = true" @mouseleave="openmenu = false">
                    <a href="/opruiming" class="text-gray-700 hover:text-red-600">Opruimingen</a>
                    <div x-show="openmenu"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform scale-95"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-95"
                    class="absolute top-full -left-6 bg-white py-3 px-6 rounded-3xl w-max z-50">
                        <ul>
                            <li><a href="/opruiming-inboedel" class="text-sm font-base">Opruiming inboedel</a></li>
                            <li><a href="/opruiming-na-overlijden" class="text-sm font-base">Opruiming na overlijden</a></li>
                            <li><a href="/opruiming-woning" class="text-sm font-base">Opruiming van woning</a></li>
                            <li><a href="/opruiming-tuin" class="text-sm font-base">Opruiming van tuin</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#" class="text-gray-700">Verhuizingen</a></li>
                <li><a href="#" class="text-gray-700">Poetsdienst</a></li>
                <li><a href="#" class="text-gray-700">Overige diensten</a></li>
            </ul>
        </nav>
        <a href="#" class="bg-red-600 text-white py-2 px-4 rounded-full">Contact</a>
    </div>
</header>