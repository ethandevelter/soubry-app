<!-- resources/views/data.blade.php -->
<x-app-layout>
    <div class="main_bg bg-cover bg-center pt-24 min-h-screen h-full" style="background-image: url({{asset('/storage/photos/naturedarkmoon.png')}})">
        <x-container>
            @livewire('new-table-creator')
        </x-container>
    </div>
</x-app-layout>