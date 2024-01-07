<?php

use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    #[Rule(['required', 'string', 'email'])]
    public string $email = '';

    public function sendPasswordResetLink(): void
    {
        $this->validate();

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink(
            $this->only('email')
        );

        if ($status != Password::RESET_LINK_SENT) {
            $this->addError('email', __($status));

            return;
        }

        $this->reset('email');

        session()->flash('status', __($status));
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
                    Восстановление пароля
                </h1>
                <p class="font-light text-gray-500 dark:text-gray-400">{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}</p>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <form class="space-y-4 md:space-y-6" wire:submit="sendPasswordResetLink">
                    <div>
                        <x-input-label for="email" :value="__('Email')" :is_error="!empty($errors->get('email'))"/>
                        <x-text-input wire:model="email" :errors="$errors->get('email')" id="email" class="block mt-1 w-full" type="email" name="email" required autofocus autocomplete="email" />
                    </div>
                    <x-primary-button>
                        {{ __('Email Password Reset Link') }}
                    </x-primary-button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        {{ __('Вспомнили пароль?') }} <a href="{{ route('login') }}" wire:navigate class="font-medium text-primary-600 hover:underline dark:text-primary-500">{{ __('Log in') }}</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
