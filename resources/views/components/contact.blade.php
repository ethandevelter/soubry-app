@php
    $contact = table('contactpage')->first();
@endphp
<section class="bg-gray-50">
    <div class="relative flex flex-col items-center justify-center text-center py-44 bg-cover bg-top hero-overlay min-h-60vh" style="background-image : url({{asset($contact->hero_image)}})">
        <h1 class="alt">{{$contact->intro_title}}</h1>
    </div>
</section>
<section class="bg-gray-50 pb-28">
    <x-container>
        <div class="flex flex-row pt-28">
            <div class="w-5/12">
                <h2 class="!text-5xl pb-2">{{$contact->first_title}}</h2>
                <div class="main-text !text-black !text-base pb-16">{{$contact->first_text}}</div>
                <div class="contact-info pb-6">{!! $contact->contactinfo !!}</div>
                <iframe class="rounded-45px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.6198058965393!2d3.2255603!3d50.8887326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c34d9b6f4d6f5f%3A0xe2e4c041f9e4ed33!2sZuidhoekstraat%202%2C%208561%20Sint-Eloois-Winkel%2C%20Belgium!5e0!3m2!1sen!2sbe!4v1632487071020!5m2!1sen!2sbe" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="w-2/12"></div>
            <div class="w-5/12">
                @livewire('contact-form')
            </div>
        </div>
    </x-container>
</section>