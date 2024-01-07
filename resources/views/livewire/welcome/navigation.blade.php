<?php

use Livewire\Volt\Component;
use App\Providers\RouteServiceProvider;

new class extends Component {

    public function logout(): void {
        auth()->guard('web')->logout();

        session()->invalidate();
        session()->regenerateToken();

        $this->redirect(RouteServiceProvider::HOME, navigate: TRUE);
    }

};

?>

<div>
    @auth
        <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
                class="flex items-center text-sm pe-1 font-medium text-gray-900 rounded-full hover:text-primary-600 dark:hover:text-primary-500 md:me-0 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white"
                type="button">
            <span class="sr-only">Open user menu</span>
            <img class="w-8 h-8 me-2 rounded-full" src="https://avatars.githubusercontent.com/u/8052108?v=4"
                 alt="user photo">
            <div class="font-medium" x-data="{ name: '{{ auth()->user()->name }}' }" x-text="name" x-on:profile-updated.window="name = $event.detail.name">{{ auth()->user()->name }}</div>
            <svg class="w-2.5 h-2.5 ms-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                 viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 1 4 4 4-4"/>
            </svg>
        </button>

        <!-- Dropdown menu -->
        <div id="dropdownAvatarName"
             class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
            <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                <div class="font-medium" x-data="{ name: '{{ auth()->user()->name }}' }" x-text="name" x-on:profile-updated.window="name = $event.detail.name">{{ auth()->user()->name }}</div>
                <div class="truncate" x-data="{ email: '{{ auth()->user()->email }}' }" x-text="email" x-on:profile-updated.window="email = $event.detail.email"></div>
            </div>
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                <li>
                    <a href="{{ route('profile') }}" wire:navigate
                       class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Профиль</a>
                </li>
                <li>
                    <a href="{{ route('profile-settings') }}" wire:navigate
                       class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Настройки</a>
                </li>
            </ul>
            <div class="py-2">
                <a href="#" wire:click="logout"
                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">{{ __('Log Out') }}</a>
            </div>
        </div>
    @else
        <a href="{{ route('login') }}" wire:navigate
           class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-base px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">
            Войти
        </a>
        <a href="{{ route('register') }}" wire:navigate
           class="inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-base px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
            Регистрация
            <svg class="hidden w-3 h-3 ml-2 xl:inline" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                 viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M1 5h12m0 0L9 1m4 4L9 9"></path>
            </svg>
        </a>
    @endauth
</div>
