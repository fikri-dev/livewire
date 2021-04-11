<div class="fixed top-0 right-0 w-full flex justify-end items-center px-4 shadow-md py-3">
    @livewire('profile-photo-viewer', ['size'=>'h-8 w-8'])

    {{-- Dropdown --}}
    <div x-data="{open: false}">
        <span @click="open = true" class="iconly-brokenArrow---Down-2 text-lg ml-1 cursor-pointer"></span>
        <div x-show.transition="open" @click.away="open = false"
            class="absolute shadow-lg rounded-md top-full mt-2 right-2 transform w-60 flex items-center py-2">
            <button wire:click="logout" class="flex items-center w-full py-2 px-4 focus:bg-gray-200 focus:outline-none transition ease-out">
                <span class="iconly-brokenLogout text-xl mr-1"></span>
                Logout
            </button>
        </div>
    </div>
</div>