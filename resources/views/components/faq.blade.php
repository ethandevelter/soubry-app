<section class="bg-gray-50">
    <x-container>
        <h2 class="text-black text-center py-24">FAQ</h2>
        <div class="flex flex-wrap justify-center items-start -mr-6 mb-14">
            <!-- Step 1 -->
            @foreach (table('faq') as $item)
                <div class="w-full pr-6">
                    <div class="w-full bg-red-500 text-white p-10 rounded-40px mb-4 md:mb-0 text-left">
                        <p class="!font-dmsans text-sm uppercase font-medium tracking-widest">Stap 1</p>
                        <h3 class="!font-dmsans text-2xl font-bold mt-2">Bezoek</h3>
                        <div class="font-dmsans text-base text-white font-light mt-4">
                            Wij komen langs om de offerte op te maken en uniek, in tegenstelling tot vele collega's, wij brengen waardevolle spullen in vermindering op de kostprijs.
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- Step 2 -->
            <div class="w-full pr-6">
                <div class="w-full bg-white text-gray-800 p-10 rounded-40px border border-gray-200 mb-4 md:mb-0">
                    <h3 class="text-sm font-semibold uppercase text-red-600">Stap 2</h3>
                    <h4 class="text-xl font-bold mt-2">Offerte op maat</h4>
                    <div class="mt-4">
                        U ontvangt de offerte binnen de 24 uur. Deze offerte is vrijblijvend!
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="w-full pr-6">
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