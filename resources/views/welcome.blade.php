<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soubry Kenny VOF</title>
    <script src="https://unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://use.typekit.net/nyj2ysl.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <!-- Fancybox CSS and JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
    <!-- Swiper JS (if used elsewhere) -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Laravel-specific Scripts and Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
                <a href="#" class="text-gray-700 hover:text-red-600">Opruimingen</a>
                <a href="#" class="text-gray-700">Verhuizingen</a>
                <a href="#" class="text-gray-700">Poetsdienst</a>
                <a href="#" class="text-gray-700">Overige diensten</a>
            </nav>
            <a href="#" class="bg-red-600 text-white py-2 px-4 rounded-full">Contact</a>
        </div>
    </header>
    <main class="main-ade">
        @foreach (table('home') as $item)
            <section class="bg-gradient-to-b from-[#242424] to-[#D03630]">
                <x-container>
                    <x-home.hero :block="$item"></x-home.hero>
                    <x-home.strengths :block="$item"></x-home.strengths>
                </x-container>
            </section>
            <x-home.services :block="$item"></x-home.services>
            <x-home.realisations :block="$item"></x-home.realisations>
            <x-home.contact-us :block="$item"></x-home.contact-us>
            <!-- Call-to-Action Section -->
            <section class="py-12 bg-red-600 text-white text-center">
            <div class="container mx-auto">
                <a href="#" class="bg-white text-red-600 py-3 px-6 rounded-full font-semibold">Ontvang uw gratis offerte →</a>
            </div>
            </section>
        @endforeach
    </main>
    <x-general.footer></x-general.footer>
</body>
</html>
