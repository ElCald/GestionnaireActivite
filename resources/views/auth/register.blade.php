@extends('layouts/templateBULMA')

@section('content')

@section('titre')
INSCRIPTION
@endsection

<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <p class="has-text-link title is-1 has-text-weight-bold">LOGO</p>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- FORMULAIRE NOM-->
            <div class="field">
                <p class="control has-icons-left has-icons-right">
                <x-jet-input id="name" class="input" type="text" name="name" placeholder="Nom Prénom" :value="old('name')" required autofocus autocomplete="name" />
                    <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                    </span>
                </p>
            </div>
            
            <!-- FORMULAIRE EMAIL-->
            <div class="field">
                <p class="control has-icons-left has-icons-right">
                <x-jet-input id="email" class="input block mt-1 w-full" type="email" name="email" placeholder="Email" :value="old('email')" required />
                    <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                    </span>
                </p>
            </div>

            <!-- FORMULAIRE MDP-->
            <div class="field">
                <p class="control has-icons-left has-icons-right">
                <x-jet-input id="password" class="input block mt-1 w-full" type="password" name="password" placeholder="Mot de Passe" required autocomplete="new-password" />
                    <span class="icon is-small is-left">
                    <i class="fas fa-lock"></i>
                    </span>
                </p>
            </div>

            <!-- FORMULAIRE CONFIRMATION MDP-->
            <div class="field">
                <p class="control has-icons-left has-icons-right">
                <x-jet-input id="password_confirmation" class="input block mt-1 w-full" type="password" name="password_confirmation" placeholder="Confirmation Mot de Passe" required autocomplete="new-password" />
                    <span class="icon is-small is-left">
                    <i class="fas fa-lock"></i>
                    </span>
                </p>
            </div>


            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" required />

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

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
@endsection