<?php

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    #[Locked]
    public string $token = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    public function mount(string $token): void
    {
        $this->token = $token;

        $this->email = request()->string('email');
    }

    public function resetPassword(): void
    {
        $this->validate([
            'token' => ['required'],
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $status = Password::reset(
            $this->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) {
                $user->forceFill([
                    'password' => Hash::make($this->password),
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));
            }
        );

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        if ($status != Password::PASSWORD_RESET) {
            $this->addError('email', __($status));

            return;
        }

        session()->flash('status', __($status));

        $this->redirectRoute('login', navigate: true);
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
                    {{ __('Reset Password') }}
                </h1>
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <form class="space-y-4 md:space-y-6" wire:submit="resetPassword">
                    <div>
                        <x-input-label for="email" :value="__('Email')" :is_error="!empty($errors->get('email'))"/>
                        <x-text-input wire:model="email" :errors="$errors->get('email')" id="email" class="block mt-1 w-full" type="email" name="email" required autocomplete="email" />
                    </div>
                    <div>
                        <x-input-label for="password" :value="__('New Password')" :is_error="!empty($errors->get('password'))" />
                        <x-text-input wire:model="password" :errors="$errors->get('password')" id="password" class="block mt-1 w-full" type="password" name="password" placeholder="••••••••" required autocomplete="new-password" />
                    </div>
                    <div>
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" :is_error="!empty($errors->get('password_confirmation'))" />
                        <x-text-input wire:model="password_confirmation" :errors="$errors->get('password_confirmation')" id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" placeholder="" required autocomplete="new-password" />
                    </div>
                    <x-primary-button>
                        {{ __('Reset Password') }}
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
</section>
