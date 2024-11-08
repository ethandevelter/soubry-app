<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soubry Kenny VOF</title>
    <script src="https://unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
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
    
<body class="font-sofia" x-data="scrollAnimation()" x-init="init()">
    <!-- Header -->
    <x-partials.header></x-partials.header>
    <main class="main-ade">
        @foreach (table('home') as $item)
            <section x-intersect:enter.full="animate('fade-in-left')" class="fade-target bg-gradient-to-b from-[#242424] to-[#D03630]">
                <x-container>
                    <x-home.hero :block="$item"></x-home.hero>
                    <x-home.strengths :block="$item"></x-home.strengths>
                </x-container>
            </section>
            <x-home.services :block="$item"></x-home.services>
            <x-home.realisations :block="$item"></x-home.realisations>
            <x-home.contact-us :block="$item"></x-home.contact-us>
            <!-- Call-to-Action Section -->
            <section class="py-16 bg-[#D03630] text-white text-center">
            <div class="container mx-auto">
                <a href="/contact#contactform" class="btn-white flex items-center justify-center mx-auto">Ontvang uw gratis offerte <span><x-map-arrowwatcher></x-map-arrowwatcher></span></a>
            </div>
            </section>
        @endforeach
    </main>
    <x-partials.footer></x-partials.footer>
</body>
</html>
