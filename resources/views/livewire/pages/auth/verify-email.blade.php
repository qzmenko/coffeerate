<?php

use App\Providers\RouteServiceProvider;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public function sendVerification(): void
    {
        if (auth()->user()->hasVerifiedEmail()) {
            $this->redirect(
                session('url.intended', RouteServiceProvider::HOME),
                navigate: true
            );

            return;
        }

        auth()->user()->sendEmailVerificationNotification();

        session()->flash('status', 'verification-link-sent');
    }

    public function logout(): void
    {
        auth()->guard('web')->logout();

        session()->invalidate();
        session()->regenerateToken();

        $this->redirect('/', navigate: true);
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
                    Подтвердите свой адрес электронной почты
                </h1>
                <p class="font-light text-gray-500 dark:text-gray-400">{{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}</p>
                <!-- Session Status -->
                @if (session('status') == 'verification-link-sent')
                    <x-auth-session-status class="mb-4" :status="session('status')">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </x-auth-session-status>
                @endif
                <x-primary-button wire:click="sendVerification">
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </div>
    </div>
</section>

{{--<div>--}}
{{--    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">--}}
{{--        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}--}}
{{--    </div>--}}

{{--    @if (session('status') == 'verification-link-sent')--}}
{{--        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">--}}
{{--            {{ __('A new verification link has been sent to the email address you provided during registration.') }}--}}
{{--        </div>--}}
{{--    @endif--}}

{{--    <div class="mt-4 flex items-center justify-between">--}}
{{--        <x-primary-button wire:click="sendVerification">--}}
{{--            {{ __('Resend Verification Email') }}--}}
{{--        </x-primary-button>--}}

{{--        <button wire:click="logout" type="submit" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">--}}
{{--            {{ __('Log Out') }}--}}
{{--        </button>--}}
{{--    </div>--}}
{{--</div>--}}
