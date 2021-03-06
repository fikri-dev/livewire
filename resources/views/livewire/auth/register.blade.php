<div class="fixed h-full w-full flex bg-gradient-to-tl from-indigo-500 to-pink-500">
    <form wire:submit.prevent="register" class="m-auto bg-gradient-to-b from-gray-900 to-gray-800 py-20 rounded-md shadow-md text-gray-200 w-96">
        <p class="text-xl mb-5 mx-10">Create an account</p>

        {{-- E-mail --}}
        <x-form-group class="border-t-2">
            <span class="iconly-brokenMessage text-xl mr-2">
                <span class="path1"></span><span class="path2"></span>
            </span>

            <x-input type="email" model="email" placeholder="E-mail" />

            <x-valid-form-icon field="email" model="{{ $email }}" />
        </x-form-group>
        <x-invalid-form-message field="email" model="{{ $email }}" />

        {{-- Password --}}
        <x-form-group>
            <span class="iconly-brokenPassword text-xl mr-2"><span class="path1"></span><span class="path2"></span></span>
            <x-input type="password" model="password" placeholder="Password" />
            <x-valid-form-icon field="password" model="{{ $password }}" />
        </x-form-group>
        <x-invalid-form-message field="password" model="{{ $password }}" />

        {{-- Password Confirmation --}}
        <x-form-group>
            <span class="iconly-brokenScan text-xl mr-2"><span class="path1"></span><span class="path2"></span></span>
            <x-input type="password" model="passwordConfirmation" placeholder="Password Confirmation" />
            <x-valid-form-icon field="passwordConfirmation" model="{{ $passwordConfirmation }}" />
        </x-form-group>
        <x-invalid-form-message field="passwordConfirmation" model="{{ $passwordConfirmation }}" />

        <div class="flex justify-between items-center mx-10 mt-5">
            <x-link href="{{ route('login') }}">I already have an account.</x-link>

            <x-button wire:loading.class="opacity-20" wire:target="register">
                <div wire:loading.remove wire:target="register" class="flex items-center">
                    <span class="text-lg mr-1 iconly-brokenArrow---Right-Square"></span>
                    REGISTER
                </div>
                <div wire:loading wire:target="register" class="animate-bounce">. . .</div>
            </x-button>
        </div>
    </form>
</div>