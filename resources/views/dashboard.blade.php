<x-app-layout>
    <div class="main_bg bg-cover bg-center min-h-screen h-full" style="background-image: url({{asset('/storage/photos/naturedark.png')}})">
        <x-container>
            <div class="relative z-50 flex min-h-screen items-center">
                <div class="flex flex-row w-full">
                    <div class="w-7/12">
                        <p class="font-dmsans font-base text-white text-base pb-12">Your cms</p>
                        <h1 class="font-atyp font-black text-white text-7xl">
                            Explore<br>
                            Must-see<br>
                            Items
                        </h1>
                    </div>
                    <div class="w-5/12">
                        <div class="flex flex-wrap -mr-12">
                            <div class="w-1/2 pr-6 mb-6">
                                <div class="bg-mainone/50 p-7 !pt-16 rounded-45px text-white relative">
                                    <a href="/users" class="cursor-pointer h-10 w-10 bg-mainone rounded-full flex items-center justify-center absolute -top-4 right-0">
                                        <x-map-arrow></x-map-arrow>
                                    </a>
                                    <span class="text-5xl text-white font-dm font-extrabold">{{count($users)}}</span>
                                    <h2 class="">Account(s)</h2>
                                </div>
                            </div>
                            <div class="w-1/2 pr-6 mb-6">
                                <div class="bg-blue-600/50 p-7 !pt-16 rounded-45px text-white relative">
                                    <a href="/data" class="cursor-pointer h-10 w-10 bg-blue-600 rounded-full flex items-center justify-center absolute -top-4 right-0">
                                        <x-map-arrow></x-map-arrow>
                                    </a>
                                    <span class="text-5xl text-white font-dm font-extrabold">{{count($tables)}}</span>
                                    <h2 class="">Tables</h2>
                                </div>
                            </div>
                            <div class="w-1/2 pr-6 mb-6">
                                <div class="bg-blue-600/50 p-7 !pt-16 rounded-45px text-white relative">
                                    <a href="/data" class="cursor-pointer h-10 w-10 bg-blue-600 rounded-full flex items-center justify-center absolute -top-4 right-0">
                                        <x-map-arrow></x-map-arrow>
                                    </a>
                                    <span class="text-5xl text-white font-dm font-extrabold">{{count($fields)}}</span>
                                    <h2 class="">Fields</h2>
                                </div>
                            </div>
                            <div class="w-1/2 pr-6 mb-6">
                                <div class="bg-mainone/50 p-7 !pt-16 rounded-45px text-white relative">
                                    <a class="cursor-pointer h-10 w-10 bg-mainone rounded-full flex items-center justify-center absolute -top-4 right-0">
                                        <x-map-arrow></x-map-arrow>
                                    </a>
                                    <span class="text-5xl text-white font-dm font-extrabold">22</span>
                                    <h2 class="">Accounts</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </x-container>
    </div>
</x-app-layout>
