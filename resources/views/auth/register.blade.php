<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />
        <div class="grid grid-cols-2 -mt-4 -mx-6">
            <a href="{{asset('login')}}" class="py-6 pr-6 -pl-4 w-64 bg-gray-800 text-white  flex items-center justify-center font-bold focus:outline-none" onclick="ChangeTabAuth('bodyLogin')">
                LOGIN
            </a>
            <a href="{{asset('register')}}" class=" p-6 bg-white text-gray-800 flex items-center justify-center font-bold focus:outline-none" onclick="ChangeTabAuth('bodyRegister')">
                REGISTER
            </a>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mt-2">
                <x-jet-label for="name" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Name" />
            </div>

            <div class="mt-2">
                <x-jet-label for="email"/>
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required placeholder="Email Address"/>
            </div>

            <div class="mt-2">
                <x-jet-label for="cnum"/>
                <x-jet-input id="cnum" class="block mt-1 w-full" type="text" name="contact number" :value="old('number')" required placeholder="Contact Number"/>
            </div>

            <div class="mt-2">
                <x-jet-label for="address"/>
                <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required placeholder="Address"/>
            </div>

            <div class="mt-2">
                <x-jet-label for="Birthdate"/>
                <x-jet-input id="Birthdate" class="block mt-1 w-full" type="date" name="Birthdate" :value="old('Birthdate')" required placeholder="Birthdate"/>
            </div>

            <div class="mt-2">
                <x-jet-label for="password" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="Password"/>
            </div>

            <div class="mt-2">
                <x-jet-label for="password_confirmation"  />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Repeat Password" />
            </div>

            <div class="flex items-center justify-end mt-2">
                <x-jet-button class="flex flex-col justify-center items-center mt-1 bg-gray-800 w-full p-2">
                    {{ __('Register') }}
                </x-jet-button>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4 ml-8">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
