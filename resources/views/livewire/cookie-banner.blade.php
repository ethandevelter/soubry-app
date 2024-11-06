<div>
    @if(!Session::has('cookiesAccepted'))
    <div class="fixed bottom-4 left-4 p-6 rounded-3xl bg-black lg:w-1/4 md:w-1/3 sm:w-1/2 w-[calc(100%-2rem)] text-white z-[999] duration-300" x-data="{ opencookies: false }">
        <h3 class="pb-4">Wij gebruiken cookies.</h3>
        <div>Om uw bezoek op deze website optimaal te laten werken, gebruiken wij cookies. Deze zijn noodzakelijk.</div>
        <div class="flex flex-row gap-2 my-4">
            <button wire:click="acceptAll" class="main_btn bg-green-500">Accepteren</button>
            <button @click="opencookies = ! opencookies" class="main_btn bg-blue-500 opacity-40">Wijzigen</button>
            <button wire:click="rejectAll" class="main_btn bg-red-500">Weigeren</button>
        </div>
        <div class="mt-4" x-show="opencookies" x-transition:enter.duration.500ms x-transition:leave.duration.400ms>
            <div>
                <input type="checkbox" id="necessary" name="necessary" disabled checked wire:model="functional" class="opacity-40 main_checkbox">
                <label for="necessary">Noodzakelijke (verplicht)</label>
                <p class="text-gray-400 text-sm">Deze trackers worden gebruikt voor activiteiten die strikt noodzakelijk zijn om de door u gevraagde dienst uit te voeren of te leveren en daarom is er geen toestemming voor nodig.</p>
            </div>
            <div>
                <input type="checkbox" id="interests" name="interests" wire:model="interests" class="main_checkbox">
                <label for="interests">Cookies voor functionaliteit</label>
                <p class="text-gray-400 text-sm">Met deze trackers zijn basisinteracties en functionaliteiten mogelijk waarmee u toegang hebt tot geselecteerde functies van onze dienst en u met ons kunt communiceren.</p>
            </div>
            <div>
                <input type="checkbox" id="statistics" name="statistics" wire:model="statistics" class="main_checkbox">
                <label for="statistics">Cookies voor ervaring</label>
                <p class="text-gray-400 text-sm">Met deze trackers kunnen wij u de kwaliteit van uw gebruikerservaring verbeteren en interactie met externe netwerken en platforms mogelijk maken.</p>
            </div>
            <div>
                <input type="checkbox" id="socialMedia" name="socialMedia" wire:model="socialMedia" class="main_checkbox">
                <label for="socialMedia">Cookies voor meting</label>
                <p class="text-gray-400 text-sm">Met deze trackers kunnen wij bezoeken meten en uw gedrag analyseren om onze diensten te verbeteren.</p>
            </div>
            <div>
                <input type="checkbox" id="marketing" name="marketing" wire:model="marketing" class="main_checkbox">
                <label for="marketing">Cookies voor marketing</label>
                <p class="text-gray-400 text-sm">Met deze trackers kunnen wij u gepersonaliseerde advertenties of marketingcontent laten zien en de resultaten ervan meten.</p>
            </div>
            <button wire:click="saveSettings" class="main_btn bg-blue-500 mt-4">Opslaan</button>
        </div>
    </div>
    @endif
</div>