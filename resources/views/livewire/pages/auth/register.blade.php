<?php

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered($user = User::create($validated)));

        auth()->login($user);

        $this->redirect(RouteServiceProvider::HOME, navigate: true);
    }
}; ?>

<section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="{{ route('welcome') }}" wire:navigate class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    {{ __('Register') }}
                </h1>
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <form class="space-y-4 md:space-y-6" wire:submit="register">
                    <div>
                        <x-input-label for="name" :value="__('Name')" :is_error="!empty($errors->get('name'))"/>
                        <x-text-input wire:model="name" :errors="$errors->get('name')" id="name" class="block mt-1 w-full" type="name" name="name" required autofocus autocomplete="name" />
                    </div>
                    <div>
                        <x-input-label for="email" :value="__('Email')" :is_error="!empty($errors->get('email'))"/>
                        <x-text-input wire:model="email" :errors="$errors->get('email')" id="email" class="block mt-1 w-full" type="email" name="email" required autocomplete="email" />
                    </div>
                    <div>
                        <x-input-label for="password" :value="__('Password')" :is_error="!empty($errors->get('password'))" />
                        <x-text-input wire:model="password" :errors="$errors->get('password')" id="password" class="block mt-1 w-full" type="password" name="password" placeholder="••••••••" required autocomplete="new-password" />
                    </div>
                    <div>
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" :is_error="!empty($errors->get('password_confirmation'))" />
                        <x-text-input wire:model="password_confirmation" :errors="$errors->get('password_confirmation')" id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" placeholder="" required autocomplete="new-password" />
                    </div>
                    <x-primary-button>
                        {{ __('Register') }}
                    </x-primary-button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        {{ __('Already registered?') }} <a href="{{ route('login') }}" wire:navigate class="font-medium text-primary-600 hover:underline dark:text-primary-500">{{ __('Log in') }}</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
