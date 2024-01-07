<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    #[Rule(['required', 'string', 'email'])]
    public string $email = '';

    #[Rule(['required', 'string'])]
    public string $password = '';

    #[Rule(['boolean'])]
    public bool $remember = false;

    public function login(): void
    {
        $this->validate();

        $this->ensureIsNotRateLimited();

        if (! auth()->attempt($this->only(['email', 'password'], $this->remember))) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey());

        session()->regenerate();

        $this->redirect(
            session('url.intended', RouteServiceProvider::HOME),
            navigate: true
        );
    }

    protected function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout(request()));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    protected function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->email).'|'.request()->ip());
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
                    Войдите в свой аккаунт
                </h1>
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <form class="space-y-4 md:space-y-6" wire:submit="login">
                    <div>
                        <x-input-label for="email" :value="__('Ваш e-mail')" :is_error="!empty($errors->get('email'))"/>
                        <x-text-input wire:model="email" :errors="$errors->get('email')" id="email" class="block mt-1 w-full" type="email" name="email" required autofocus autocomplete="email" />
                    </div>
                    <div>
                        <x-input-label for="password" :value="__('Password')" :is_error="!empty($errors->get('password'))" />
                        <x-text-input wire:model="password" :errors="$errors->get('password')" id="password" class="block mt-1 w-full" type="password" name="password" placeholder="••••••••" required autofocus autocomplete="password" />
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input wire:model="remember" id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="remember" class="text-gray-500 dark:text-gray-300">{{ __('Remember me') }}</label>
                            </div>
                        </div>
                        <a href="{{ route('password.request') }}" wire:navigate class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">{{ __('Forgot your password?') }}</a>
                    </div>
                    <x-primary-button>
                        {{ __('Log in') }}
                    </x-primary-button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Ещё нет аккаунта? <a href="{{ route('register') }}" wire:navigate class="font-medium text-primary-600 hover:underline dark:text-primary-500">Зарегистрироваться</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
