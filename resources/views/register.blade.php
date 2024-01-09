<x-guest-layout pageTitle="{{ __('Create Account') }}">
    <x-authentication-card>
        <x-slot name="logo">
            <div class="flex items-center justify-between">
                <x-authentication-card-logo />
            </div>
        </x-slot>

        <x-slot name="slot">

            <livewire:register />

        </x-slot>
    </x-authentication-card>

</x-guest-layout>
