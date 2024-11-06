<div>
    <form wire:submit.prevent="submit" validate method="POST" autocomplete="off">
        @if($submitted)
            <div>Uw bericht werd verstuurd</div>
        @endif
        <div>
            <div class="flex flex-col mb-4">
                <label for="name">Naam</label>
                <input type="text" id="name" name="name" wire:model="name" placeholder="Vul uw naam in"/>
                @error('name')
                    <div class="text-sm text-red-500 mt-1">Dit is een verplicht veld.</div>
                @enderror
            </div>
            <div class="flex flex-col mb-4">
                <label for="name">Email</label>
                <input type="text" id="email" name="email" wire:model="email" placeholder="Vul uw email in"/>
                @error('email')
                    <div class="text-sm text-red-500 mt-1">Dit is een verplicht veld.</div>
                @enderror
            </div>
            <div class="flex flex-col mb-4">
                <label for="name">Telefoon</label>
                <input type="text" id="phone" name="phone" wire:model="phone" placeholder="Uw telefoonnummer"/>
                @error('phone')
                    <div class="text-sm text-red-500 mt-1">Dit is een verplicht veld.</div>
                @enderror
            </div>
            <div class="flex flex-col mb-4">
                <label for="type">Type dienst</label>
                <select id="type" name="type" wire:model="type">
                    <option id="opruiming">Opruiming</option>
                    <option id="verhuizing">Verhuizing</option>
                    <option id="poetsdienst">Poetsdienst</option>
                    <option id="overige">Overige</option>
                </select>
                @error('type')
                    <div class="text-sm text-red-500 mt-1">Dit is een verplicht veld.</div>
                @enderror
            </div>
            <div class="flex flex-col mb-4">
                <label for="message">Uw bericht</label>
                <textarea class="min-h-32" id="message" name="message" wire:model="message" placeholder="Typ uw bericht hier"></textarea>
            </div>
            <div class="flex items-center mb-4">
                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-transparent dark:border-black" wire:model="privacyp">
                <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-black">Ik ga akkoord met de <a class="underline" target="_blank" href="/privacy-policy">privacy policy</a></label>
            </div>
            @error('privacyp')
                <div class="text-sm text-red-500 mt-1">Dit is verplicht aan te vinken.</div>
            @enderror
            <div class="mb-4"></div>
        </div>
        <button class="btn-white alt" wire:click="submit">Verzenden</button>
    </form>
</div>
