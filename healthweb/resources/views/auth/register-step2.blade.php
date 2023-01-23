<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register-step2.post') }}">
            @csrf

            <div>
                <x-jet-label for="identification_id" value="{{ __('Identification ID') }}" />
                <x-jet-input id="identification_id" class="block mt-1 w-full" type="text" name="identification_id" :value="old('identification_id')"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="phone_no" value="{{ __('Phone Number') }}" />
                <x-jet-input id="phone_no" class="block mt-1 w-full" type="text" name="phone_no" :value="old('phone_no')"  />
            </div>

            <div class="mt-4">
                <x-jet-label for="address" value="{{ __('Address') }}" />
                <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')"  />
            </div>

            <div class="mt-4">
                <x-jet-label for="role_id" value="{{ __('Register as') }}" />
                <select name="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="1">Doctor</option>
                    <option value="2">Nurse</option>
                </select>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button class="ml-4">
                    {{ __('Complete Registration') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
