@extends('layouts/templateBULMA')

@section('content')

@section('titre')
CONNEXION
@endsection

<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        <p class="has-text-link title is-1 has-text-weight-bold">LOGO</p>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form class="mt-6" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="field">
                <p class="control has-icons-left has-icons-right">
                    <x-jet-input id="email" class="input" type="email" name="email" placeholder="Email" :value="old('email')" required autofocus />
                    <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                    </span>
                </p>
            </div>

            <div class="field">
                <p class="control has-icons-left has-icons-right">
                    <x-jet-input id="password" class="input" type="password" name="password" placeholder="Mot de Passe" required autocomplete="current-password" />
                    <span class="icon is-small is-left">
                    <i class="fas fa-lock"></i>
                    </span>
                </p>
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
@endsection
