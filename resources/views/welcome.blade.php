<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soubry Kenny VOF</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body class="font-sofia">
    <!-- Header -->
    <header class="bg-white shadow-lg">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="flex items-center space-x-4">
                <img src="{{asset('/storage/photos/Logo Soubry Kenny.png')}}" alt="Soubry Kenny Logo" class="h-14">
            </div>
            <nav class="hidden md:flex ml-auto items-end justify-end space-x-6 mr-4">
                <a href="#" class="text-red-600 font-semibold">Home</a>
                <a href="#" class="text-gray-700">Opruimingen</a>
                <a href="#" class="text-gray-700">Verhuizingen</a>
                <a href="#" class="text-gray-700">Poetsdienst</a>
                <a href="#" class="text-gray-700">Overige diensten</a>
            </nav>
            <a href="#" class="bg-red-600 text-white py-2 px-4 rounded-full">Contact</a>
        </div>
    </header>
    @foreach (table('home') as $item)
        <!-- Hero Section -->
        <section class="relative bg-gray-800 text-white h-screen flex items-center justify-center" style="background-image: url({{--asset($item->sterktes)--}})">
            <div class="relative text-center max-w-2xl">
                <h1 class="text-4xl font-bold">{{$item->Title}}</h1>
                <p class="mt-4 text-lg">
                    {{--$item->text--}}
                </p>
                <div class="mt-6 flex justify-center space-x-4">
                    <a href="tel:+32490118796" class="bg-red-600 py-3 px-6 rounded-full">+32 490 11 87 96</a>
                    <a href="#" class="border border-white py-3 px-6 rounded-full">Gratis Offerte</a>
                </div>
            </div>
        </section>
        <!-- Services Section -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
                    <!-- Service 1 -->
                    <div>
                        <div class="bg-red-600 p-4 inline-block rounded-full">
                            <img src="icon1.svg" alt="Opruimingen" class="h-12 w-12">
                        </div>
                        <h3 class="text-xl font-semibold mt-4">Opruimingen</h3>
                        <p class="mt-2 text-gray-600">Boedelruimingen in de regio in heel West-Vlaanderen. Wij zijn gespecialiseerd in het opruimen van inboedels.</p>
                    </div>
                    <!-- Service 2 -->
                    <div>
                        <div class="bg-red-600 p-4 inline-block rounded-full">
                            <img src="icon2.svg" alt="Poetsdienst" class="h-12 w-12">
                        </div>
                        <h3 class="text-xl font-semibold mt-4">Professionele poetsdienst</h3>
                        <p class="mt-2 text-gray-600">Wij zijn actief in het poetsen van woningen die terug op de verhuur of verkoop markt worden gebracht.</p>
                    </div>
                    <!-- Service 3 -->
                    <div>
                        <div class="bg-red-600 p-4 inline-block rounded-full">
                            <img src="icon3.svg" alt="Verhuizingen" class="h-12 w-12">
                        </div>
                        <h3 class="text-xl font-semibold mt-4">Verhuizingen</h3>
                        <p class="mt-2 text-gray-600">Wij staan voor u klaar. Wij beschikken over een vrachtwagen en klaren de verhuisklus.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Services Section -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-semibold text-center mb-12">Onze diensten</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Service 1 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                        <img src="service1.jpg" alt="Opruimingen" class="w-full h-48 object-cover rounded-t-lg">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">Opruimingen</h3>
                            <p class="text-gray-600 mb-4">
                                Inboedelopruimingen in West-Vlaanderen. Wij zijn gespecialiseerd in het opruimen van inboedels. Eén telefoontje en we staan voor u klaar. Zorgeloze en zorgvuldige opruimingen.
                            </p>
                            <a href="#" class="text-red-600 font-semibold">Meer info →</a>
                        </div>
                    </div>
                    <!-- Service 2 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                        <img src="service2.jpg" alt="Uitbreken en Opkuisen" class="w-full h-48 object-cover rounded-t-lg">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">Uitbreken en opkuisen</h3>
                            <p class="text-gray-600 mb-4">
                                Kleine of wat grotere afbraakwerken of opkuiswerken? Reken op Soubry Kenny. Uw partner in afbraak- en opkuiswerken in West-Vlaanderen. Wij laten alles netjes achter.
                            </p>
                            <a href="#" class="text-red-600 font-semibold">Meer info →</a>
                        </div>
                    </div>
                    <!-- Service 3 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                        <img src="service3.jpg" alt="Verhuizingen" class="w-full h-48 object-cover rounded-t-lg">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">Verhuizingen</h3>
                            <p class="text-gray-600 mb-4">
                                Nood aan een professionele verhuizer? Wij staan voor u klaar. Als professionele verhuisfirma verhuizen we uw inboedel. Wij beschikken over een vrachtwagen en klaren de verhuisklus.
                            </p>
                            <a href="#" class="text-red-600 font-semibold">Meer info →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ Section -->
        <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-semibold text-center mb-12">Veelgestelde vragen</h2>
            <div class="max-w-2xl mx-auto">
                <div class="border-t border-b divide-y">
                    <details class="py-4">
                        <summary class="text-lg font-semibold text-red-600">Doen jullie opruiming van inboedel?</summary>
                        <p class="mt-2 text-gray-600">Moet uw zolder leeggemaakt worden? Bij ons wordt gezorgd voor een perfect opgeruimde ruimte en het weghalen van de inboedel.</p>
                    </details>
                    <details class="py-4">
                        <summary class="text-lg font-semibold text-gray-700">Doen jullie opruiming na overlijden?</summary>
                    </details>
                    <details class="py-4">
                        <summary class="text-lg font-semibold text-gray-700">Ruimen jullie woningen op?</summary>
                    </details>
                    <details class="py-4">
                        <summary class="text-lg font-semibold text-gray-700">Staan jullie in voor verhuizingen?</summary>
                    </details>
                </div>
            </div>
        </div>
        </section>
        <!-- Call-to-Action Section -->
        <section class="py-12 bg-red-600 text-white text-center">
        <div class="container mx-auto">
            <a href="#" class="bg-white text-red-600 py-3 px-6 rounded-full font-semibold">Ontvang uw gratis offerte →</a>
        </div>
        </section>
    @endforeach
</body>
</html>
