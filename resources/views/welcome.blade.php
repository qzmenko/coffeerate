<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CoffeeRate – Социальная сеть для любителей кофе.</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
<header class="sticky top-0 z-40 border-b border-gray-200 dark:border-gray-700">
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="https://flowbite.com" class="flex items-center">
                <img src="{{ asset('images/logo.svg') }}" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo"/>
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">CoffeeRate</span>
            </a>
            <div class="flex items-center lg:order-2">
                <a href="#" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-base px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">
                    Войти
                </a>
                <a href="#" class="inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-base px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                    Регистрация
                    <svg class="hidden w-3 h-3 ml-2 xl:inline" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"></path></svg>
                </a>
                <button data-collapse-toggle="mobile-menu-2" type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                              clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="#"
                           class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white"
                           aria-current="page">Главная</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Рейтинг кофе</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Рейтинг обжарщиков</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Блог</a>
                    </li>
                    <li>
                        <a href="#"
                           class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<section class="bg-center bg-[url('/images/hero-home.svg')] bg-gray-700 bg-blend-multiply">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
            CoffeeRate</h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">
            Найдите свой любимый кофе и обжарщика.
        </p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
            <a href="#"
               class="inline-flex justify-center items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-base px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                Каталог
                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
            <a href="#about"
               class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                О проекте
            </a>
        </div>
    </div>
</section>
{{--About project--}}
<section class="bg-white dark:bg-gray-800" id="about">
    <div
        class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6 sm:gap-4 xl:gap-24">
        <div class="flex flex-col col-span-2 gap-4 divide-y dark:divide-gray-700 lg:gap-8">
            <div class="flex flex-col items-start gap-3 self-stretch sm:gap-4">
                <p class="font-medium text-xl text-primary-600 dark:text-primary-500">CoffeeRate</p>
                <h2 class="text-center text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white lg:text-4xl">О проекте</h2>
                <p class="text-gray-500 text-lg dark:text-gray-400">
                    Проект CoffeeRate был создан для обмена мнениями ценителей кофе и обжарщиков. Делитесь опытом, читайте отзывы, находите идеальный кофейный бленд, полагаясь на мнения экспертов. Добро пожаловать в мир кофейной культуры!
                </p>
            </div>
            <div class="flex flex-col items-center gap-4 pt-8">
                <div class="max-w-l sm:w-auto isolate flex flex-col sm:grid sm:grid-cols-2 items-start gap-4 self-stretch">
                    <a rel="nofollow noreferrer noopener" target="_blank" class="inline-flex items-center justify-start gap-5 self-stretch rounded-lg border border-gray-300 bg-white px-4 py-3.5 text-center text-base font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-600 dark:focus:ring-gray-700 sm:gap-7" href="https://www.figma.com/file/SrvjS6Pmn04fT6ZEUa1spW/flowbite-pro-figma-v2.9.0?type=design&amp;node-id=18-0&amp;mode=design">
                        <img src="{{ asset('images/social/tg.svg') }}" class="w-8 h-8 rounded-lg" alt="Figma logo">
                        Мы в Телеграм
                        <div class="ml-auto block">
                            <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"></path>
                            </svg>
                        </div>
                    </a>
                    <a rel="nofollow noreferrer noopener" target="_blank" class="inline-flex items-center justify-start gap-5 self-stretch rounded-lg border border-gray-300 bg-white px-4 py-3.5 text-center text-base font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-600 dark:focus:ring-gray-700 sm:gap-7" href="https://www.figma.com/file/SrvjS6Pmn04fT6ZEUa1spW/flowbite-pro-figma-v2.9.0?type=design&amp;node-id=18-0&amp;mode=design">
                        <img src="{{ asset('images/social/vk.svg') }}" class="w-8 h-8 rounded-lg" alt="Figma logo">
                        Мы в VK
                        <div class="ml-auto block">
                            <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"></path>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-span-2 hidden xl:grid grid-cols-2 gap-8">
            <div>
                <svg class="w-12 h-12 mb-2 text-primary-600 dark:text-primary-500" fill="currentColor"
                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path>
                </svg>
                <h3 class="block mb-2 text-2xl font-bold text-gray-900 dark:text-white">244 отзыва</h3>
                <p class="font-normal text-gray-500 dark:text-gray-400">Оставили пользователи о кофе</p>
            </div>
            <div>
                <svg class="w-12 h-12 mb-2 text-primary-700 dark:text-primary-500" fill="currentColor"
                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                </svg>
                <h3 class="block mb-2 text-2xl font-bold text-gray-900 dark:text-white">600 пользователей</h3>
                <p class="font-normal text-gray-500 dark:text-gray-400">Зарегрировано на сайте и доверяют нашим рейтингам</p>
            </div>
            <div>
                <svg class="w-12 h-12 mb-2 text-primary-800 dark:text-primary-500" fill="currentColor"
                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M2 5a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm14 1a1 1 0 11-2 0 1 1 0 012 0zM2 13a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2v-2zm14 1a1 1 0 11-2 0 1 1 0 012 0z"
                          clip-rule="evenodd"></path>
                </svg>
                <h3 class="block mb-2 text-2xl font-bold text-gray-900 dark:text-white">217 кофе</h3>
                <p class="font-normal text-gray-500 dark:text-gray-400">Мы постоянно добавляем новое кофе в каталог</p>
            </div>
            <div>
                <svg class="w-12 h-12 mb-2 text-primary-900 dark:text-primary-500" fill="currentColor"
                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z"
                          clip-rule="evenodd"></path>
                </svg>
                <h3 class="block mb-2 text-2xl font-bold text-gray-900 dark:text-white">100+ брендов</h3>
                <p class="font-normal text-gray-500 dark:text-gray-400">Которые мы нашли и добавили в каталог</p>
            </div>
        </div>
    </div>
</section>
{{--Community--}}
<section class="bg-white dark:bg-gray-900 border-t border-gray-100 dark:border-gray-700">
    <div class="mx-auto max-w-8xl px-4 py-8 lg:px-20 lg:py-24">
        <div class="mx-auto flex w-full max-w-7xl flex-col items-center gap-12">
            <div class="flex max-w-2xl flex-col items-center justify-center gap-4"><h2
                    class="text-center text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white lg:text-4xl">Участники кофейного сообщества</h2>
                <p class="text-lg text-gray-500 dark:text-gray-400 text-center">
                    Присоединяйтесь к сообществу кофейных любителей, оставляйте отзывы и попадите в топ экспертов CoffeeRate.</p>
            </div>
            <div class="flex max-w-5xl flex-col gap-3 px-4 lg:px-8">
                <div class="flex flex-wrap items-center justify-center gap-3">
                    <div class="w-fit" data-testid="flowbite-tooltip-target"><a class="cursor-pointer"
                                                                                href="https://github.com/zoltanszogyenyi"><img
                                src="https://avatars.githubusercontent.com/u/8052108?v=4" alt="zoltanszogyenyi avatar"
                                class="h-10 w-10 rounded-full bg-gray-100 text-gray-600 dark:bg-gray-600 dark:text-gray-300 sm:h-12 sm:w-12 lg:h-20 lg:w-20"></a>
                    </div>
                    <div class="w-fit" data-testid="flowbite-tooltip-target"><a class="cursor-pointer"
                                                                                href="https://github.com/robert1508"><img
                                src="https://avatars.githubusercontent.com/u/9049421?v=4" alt="robert1508 avatar"
                                class="h-10 w-10 rounded-full bg-gray-100 text-gray-600 dark:bg-gray-600 dark:text-gray-300 sm:h-12 sm:w-12 lg:h-20 lg:w-20"></a>
                    </div>
                    <div class="w-fit" data-testid="flowbite-tooltip-target"><a class="cursor-pointer"
                                                                                href="https://github.com/Manal-el"><img
                                src="https://avatars.githubusercontent.com/u/92878640?v=4" alt="Manal-el avatar"
                                class="h-10 w-10 rounded-full bg-gray-100 text-gray-600 dark:bg-gray-600 dark:text-gray-300 sm:h-12 sm:w-12 lg:h-20 lg:w-20"></a>
                    </div>
                    <div class="w-fit" data-testid="flowbite-tooltip-target"><a class="cursor-pointer"
                                                                                href="https://github.com/CorwinDev"><img
                                src="https://avatars.githubusercontent.com/u/88144943?v=4" alt="CorwinDev avatar"
                                class="h-10 w-10 rounded-full bg-gray-100 text-gray-600 dark:bg-gray-600 dark:text-gray-300 sm:h-12 sm:w-12 lg:h-20 lg:w-20"></a>
                    </div>
                    <div class="w-fit" data-testid="flowbite-tooltip-target"><a class="cursor-pointer"
                                                                                href="https://github.com/jmnda-dev"><img
                                src="https://avatars.githubusercontent.com/u/65728679?v=4" alt="jmnda-dev avatar"
                                class="h-10 w-10 rounded-full bg-gray-100 text-gray-600 dark:bg-gray-600 dark:text-gray-300 sm:h-12 sm:w-12 lg:h-20 lg:w-20"></a>
                    </div>
                    <div class="w-fit" data-testid="flowbite-tooltip-target"><a class="cursor-pointer"
                                                                                href="https://github.com/jneuendorf"><img
                                src="https://avatars.githubusercontent.com/u/6906734?v=4" alt="jneuendorf avatar"
                                class="h-10 w-10 rounded-full bg-gray-100 text-gray-600 dark:bg-gray-600 dark:text-gray-300 sm:h-12 sm:w-12 lg:h-20 lg:w-20"></a>
                    </div>

                    <div class="w-fit" data-testid="flowbite-tooltip-target"><a class="cursor-pointer"
                                                                                href="https://github.com/CatherineKiiru"><img
                                src="https://avatars.githubusercontent.com/u/66266208?v=4" alt="CatherineKiiru avatar"
                                class="h-10 w-10 rounded-full bg-gray-100 text-gray-600 dark:bg-gray-600 dark:text-gray-300 sm:h-12 sm:w-12 lg:h-20 lg:w-20"></a>
                    </div>

                    <div class="w-fit" data-testid="flowbite-tooltip-target"><a class="cursor-pointer"
                                                                                href="https://github.com/joaopalmeiro"><img
                                src="https://avatars.githubusercontent.com/u/17132927?v=4" alt="joaopalmeiro avatar"
                                class="h-10 w-10 rounded-full bg-gray-100 text-gray-600 dark:bg-gray-600 dark:text-gray-300 sm:h-12 sm:w-12 lg:h-20 lg:w-20"></a>
                    </div>
                    <div class="w-fit" data-testid="flowbite-tooltip-target"><a class="cursor-pointer"
                                                                                href="https://github.com/shinokada"><img
                                src="https://avatars.githubusercontent.com/u/147320?v=4" alt="shinokada avatar"
                                class="h-10 w-10 rounded-full bg-gray-100 text-gray-600 dark:bg-gray-600 dark:text-gray-300 sm:h-12 sm:w-12 lg:h-20 lg:w-20"></a>
                    </div>
                    <div class="w-fit" data-testid="flowbite-tooltip-target"><a class="cursor-pointer"
                                                                                href="https://github.com/daveholst"><img
                                src="https://avatars.githubusercontent.com/u/46893433?v=4" alt="daveholst avatar"
                                class="h-10 w-10 rounded-full bg-gray-100 text-gray-600 dark:bg-gray-600 dark:text-gray-300 sm:h-12 sm:w-12 lg:h-20 lg:w-20"></a>
                    </div>
                </div>
            </div>
            <div class="flex w-full max-w-5xl flex-row items-center justify-between lg:px-4">
                <div
                    class="flex w-full flex-col items-start justify-between gap-4 rounded-lg bg-gray-50 p-4 dark:bg-gray-800 sm:flex-row sm:items-center sm:gap-8">
                    <div class="hidden lg:flex items-center justify-center lg:w-fit">
                        <svg class="w-8 h-8 text-primary-600 dark:text-primary-500" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 19">
                            <path
                                d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z"></path>
                            <path
                                d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z"></path>
                        </svg>
                    </div>
                    <div class="flex w-full flex-col">
                        <h2 class="text-left text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            Присоединяйтесь к сообществу
                        </h2>
                        <p class="text-gray-500 dark:text-gray-400">
                            Станьте участником сообщества ценителей, оставляйте отзывы и получайте награды
                        </p>
                    </div>
                    <a class="flex items-center gap-2 whitespace-nowrap text-base font-medium text-primary-700 dark:text-primary-500 hover:underline"
                       href="https://github.com/themesberg/flowbite">
                        Все эксперты
                        <svg class="w-2.5 h-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m1 9 4-4-4-4"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
{{--Trends--}}
<section class="bg-gray-50 dark:bg-gray-900 border-t border-gray-100 dark:border-gray-700">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
            <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Рейтинги</h2>
{{--            <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">От секретов выбора лучших зерен до искусства совершенного заваривания – у нас есть все, чтобы сделать ваш кофейный опыт неповторимым. Переходите в блог и окунитесь в ароматный мир кофейных открытий.</p>--}}
        </div>
        <div class="grid gap-8 lg:grid-cols-2">
            <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800">
                    <div class="flex items-center justify-between mb-4">
                        <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Лучший кофе</h5>
                        <a href="#" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">
                            Смотреть всё
                        </a>
                    </div>
                    <div class="flow-root">
                        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                            <li class="py-2">
                                <div class="flex items-center gap-6">
                                    <div class="min-w">
                                        <p class="text-lg font-medium text-gray-900 truncate dark:text-white">
                                            1
                                        </p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <img class="h-10 w-10 rounded-full bg-gray-100 text-gray-600 dark:bg-gray-600 dark:text-gray-300 sm:h-12 sm:w-12 lg:h-16 lg:w-16"
                                             src="https://specialty.ru/upload/iblock/ea7/cqwmiqy1778f07v9yuxp0kunuy5xd408/Logo_new2023.png"
                                             alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-lg font-medium text-gray-900 truncate dark:text-white">
                                            Tasty Coffee
                                        </p>
                                    </div>
                                    <a href="#"
                                       class="block max-w-sm p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                        <div class="flex items-center">
                                            <svg class="w-6 h-6 text-yellow-300 mr-1" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                 viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                            </svg>
                                            <p class="ml-1 text-base font-semibold text-gray-900 dark:text-white">
                                                4.5</p>
                                        </div>
                                    </a>
                                    <a href="#"
                                       class="block max-w-sm p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                        <div class="flex items-center">
                                            <svg class="w-6 h-6 text-gray-600 dark:text-white mr-1" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="2"
                                                      d="M5.5 6.5h.01m4.49 0h.01m4.49 0h.01M18 1H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
                                            </svg>
                                            <p class="ml-1 text-base font-semibold text-gray-900 dark:text-white">24</p>
                                        </div>
                                    </a>
{{--                                    <a href="#"--}}
{{--                                       class="block max-w-sm p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">--}}
{{--                                        <div class="flex items-center">--}}
{{--                                            <svg class="w-6 h-6 text-gray-600 dark:text-white mr-1" aria-hidden="true"--}}
{{--                                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">--}}
{{--                                                <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                                   stroke-width="2">--}}
{{--                                                    <path d="M10 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>--}}
{{--                                                    <path--}}
{{--                                                        d="M10 13c4.97 0 9-2.686 9-6s-4.03-6-9-6-9 2.686-9 6 4.03 6 9 6Z"/>--}}
{{--                                                </g>--}}
{{--                                            </svg>--}}
{{--                                            <p class="ml-1 text-base font-semibold text-gray-900 dark:text-white">--}}
{{--                                                428</p>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center gap-6">
                                    <div class="min-w">
                                        <p class="text-lg font-medium text-gray-900 truncate dark:text-white">
                                            2
                                        </p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <img class="h-10 w-10 rounded-full bg-gray-100 text-gray-600 dark:bg-gray-600 dark:text-gray-300 sm:h-12 sm:w-12 lg:h-16 lg:w-16"
                                             src="https://s.rbk.ru/v1_companies_s3/resized/1200xH/media/trademarks/0c3c38d3-d424-4d40-9685-988190eb7c34.jpg"
                                             alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-lg font-medium text-gray-900 truncate dark:text-white">
                                            Сварщица Екатерина
                                        </p>
                                    </div>
                                    <a href="#"
                                       class="block max-w-sm p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                        <div class="flex items-center">
                                            <svg class="w-6 h-6 text-yellow-300 mr-1" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                 viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                            </svg>
                                            <p class="ml-1 text-base font-semibold text-gray-900 dark:text-white">
                                                4.5</p>
                                        </div>
                                    </a>
                                    <a href="#"
                                       class="block max-w-sm p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                        <div class="flex items-center">
                                            <svg class="w-6 h-6 text-gray-600 dark:text-white mr-1" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="2"
                                                      d="M5.5 6.5h.01m4.49 0h.01m4.49 0h.01M18 1H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
                                            </svg>
                                            <p class="ml-1 text-base font-semibold text-gray-900 dark:text-white">24</p>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center gap-6">
                                    <div class="min-w">
                                        <p class="text-lg font-medium text-gray-900 truncate dark:text-white">
                                            3
                                        </p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <img class="h-10 w-10 rounded-full bg-gray-100 text-gray-600 dark:bg-gray-600 dark:text-gray-300 sm:h-12 sm:w-12 lg:h-16 lg:w-16"
                                             src="https://static.tildacdn.com/tild6663-3537-4532-b364-656264383531/_12.svg"
                                             alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <a href="#" class="text-lg font-medium text-gray-900 truncate dark:text-white">
                                            12.5 COFFEE ROASTERS
                                        </a>
                                    </div>
                                    <a href="#"
                                       class="block max-w-sm p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                        <div class="flex items-center">
                                            <svg class="w-6 h-6 text-yellow-300 mr-1" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                 viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                            </svg>
                                            <p class="ml-1 text-base font-semibold text-gray-900 dark:text-white">
                                                4.5</p>
                                        </div>
                                    </a>
                                    <a href="#"
                                       class="block max-w-sm p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                        <div class="flex items-center">
                                            <svg class="w-6 h-6 text-gray-600 dark:text-white mr-1" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="2"
                                                      d="M5.5 6.5h.01m4.49 0h.01m4.49 0h.01M18 1H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
                                            </svg>
                                            <p class="ml-1 text-base font-semibold text-gray-900 dark:text-white">24</p>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center gap-6">
                                    <div class="min-w">
                                        <p class="text-lg font-medium text-gray-900 truncate dark:text-white">
                                            4
                                        </p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <img class="h-10 w-10 rounded-full bg-gray-100 text-gray-600 dark:bg-gray-600 dark:text-gray-300 sm:h-12 sm:w-12 lg:h-16 lg:w-16"
                                             src="https://specialty.ru/upload/iblock/ea7/cqwmiqy1778f07v9yuxp0kunuy5xd408/Logo_new2023.png"
                                             alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-lg font-medium text-gray-900 truncate dark:text-white">
                                            Tasty Coffee
                                        </p>
                                    </div>
                                    <a href="#"
                                       class="block max-w-sm p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                        <div class="flex items-center">
                                            <svg class="w-6 h-6 text-yellow-300 mr-1" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                 viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                            </svg>
                                            <p class="ml-1 text-base font-semibold text-gray-900 dark:text-white">
                                                4.5</p>
                                        </div>
                                    </a>
                                    <a href="#"
                                       class="block max-w-sm p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                        <div class="flex items-center">
                                            <svg class="w-6 h-6 text-gray-600 dark:text-white mr-1" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="2"
                                                      d="M5.5 6.5h.01m4.49 0h.01m4.49 0h.01M18 1H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
                                            </svg>
                                            <p class="ml-1 text-base font-semibold text-gray-900 dark:text-white">24</p>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center gap-6">
                                    <div class="min-w">
                                        <p class="text-lg font-medium text-gray-900 truncate dark:text-white">
                                            5
                                        </p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <img class="h-10 w-10 rounded-full bg-gray-100 text-gray-600 dark:bg-gray-600 dark:text-gray-300 sm:h-12 sm:w-12 lg:h-16 lg:w-16"
                                             src="https://specialty.ru/upload/iblock/ea7/cqwmiqy1778f07v9yuxp0kunuy5xd408/Logo_new2023.png"
                                             alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-lg font-medium text-gray-900 truncate dark:text-white">
                                            Tasty Coffee
                                        </p>
                                    </div>
                                    <a href="#"
                                       class="block max-w-sm p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                        <div class="flex items-center">
                                            <svg class="w-6 h-6 text-yellow-300 mr-1" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                 viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                            </svg>
                                            <p class="ml-1 text-base font-semibold text-gray-900 dark:text-white">
                                                4.5</p>
                                        </div>
                                    </a>
                                    <a href="#"
                                       class="block max-w-sm p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                        <div class="flex items-center">
                                            <svg class="w-6 h-6 text-gray-600 dark:text-white mr-1" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="2"
                                                      d="M5.5 6.5h.01m4.49 0h.01m4.49 0h.01M18 1H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
                                            </svg>
                                            <p class="ml-1 text-base font-semibold text-gray-900 dark:text-white">24</p>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full mt-4 text-center">
                        <a rel="nofollow noreferrer noopener" target="_blank" class="inline-flex items-center justify-start gap-5 self-stretch rounded-lg border border-gray-300 bg-white px-4 py-3.5 text-center text-base font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-600 dark:focus:ring-gray-700 sm:gap-7" href="https://www.figma.com/file/SrvjS6Pmn04fT6ZEUa1spW/flowbite-pro-figma-v2.9.0?type=design&amp;node-id=18-0&amp;mode=design">
                            Весь рейтинг
                            <div class="ml-auto block">
                                <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"></path>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800">
                    <div class="flex items-center justify-between mb-4">
                        <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Лучшие обжарщики</h5>
                        <a href="#" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">
                            Смотреть всех
                        </a>
                    </div>
                    <div class="flow-root">
                        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                            <li class="py-2">
                                <div class="flex items-center gap-6">
                                    <div class="min-w">
                                        <p class="text-lg font-medium text-gray-900 truncate dark:text-white">
                                            1
                                        </p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <img class="h-10 w-10 rounded-full bg-gray-100 text-gray-600 dark:bg-gray-600 dark:text-gray-300 sm:h-12 sm:w-12 lg:h-16 lg:w-16"
                                             src="https://specialty.ru/upload/iblock/ea7/cqwmiqy1778f07v9yuxp0kunuy5xd408/Logo_new2023.png"
                                             alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-lg font-medium text-gray-900 truncate dark:text-white">
                                            Tasty Coffee
                                        </p>
                                    </div>
                                    <a href="#"
                                       class="block max-w-sm p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                        <div class="flex items-center">
                                            <svg class="w-6 h-6 text-yellow-300 mr-1" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                 viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                            </svg>
                                            <p class="ml-1 text-base font-semibold text-gray-900 dark:text-white">
                                                4.5</p>
                                        </div>
                                    </a>
                                    <a href="#"
                                       class="block max-w-sm p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                        <div class="flex items-center">
                                            <svg class="w-6 h-6 text-gray-600 dark:text-white mr-1" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="2"
                                                      d="M5.5 6.5h.01m4.49 0h.01m4.49 0h.01M18 1H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
                                            </svg>
                                            <p class="ml-1 text-base font-semibold text-gray-900 dark:text-white">24</p>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center gap-6">
                                    <div class="min-w">
                                        <p class="text-lg font-medium text-gray-900 truncate dark:text-white">
                                            2
                                        </p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <img class="h-10 w-10 rounded-full bg-gray-100 text-gray-600 dark:bg-gray-600 dark:text-gray-300 sm:h-12 sm:w-12 lg:h-16 lg:w-16"
                                             src="https://s.rbk.ru/v1_companies_s3/resized/1200xH/media/trademarks/0c3c38d3-d424-4d40-9685-988190eb7c34.jpg"
                                             alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-lg font-medium text-gray-900 truncate dark:text-white">
                                            Сварщица Екатерина
                                        </p>
                                    </div>
                                    <a href="#"
                                       class="block max-w-sm p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                        <div class="flex items-center">
                                            <svg class="w-6 h-6 text-yellow-300 mr-1" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                 viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                            </svg>
                                            <p class="ml-1 text-base font-semibold text-gray-900 dark:text-white">
                                                4.5</p>
                                        </div>
                                    </a>
                                    <a href="#"
                                       class="block max-w-sm p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                        <div class="flex items-center">
                                            <svg class="w-6 h-6 text-gray-600 dark:text-white mr-1" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="2"
                                                      d="M5.5 6.5h.01m4.49 0h.01m4.49 0h.01M18 1H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
                                            </svg>
                                            <p class="ml-1 text-base font-semibold text-gray-900 dark:text-white">24</p>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center gap-6">
                                    <div class="min-w">
                                        <p class="text-lg font-medium text-gray-900 truncate dark:text-white">
                                            3
                                        </p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <img class="h-10 w-10 rounded-full bg-gray-100 text-gray-600 dark:bg-gray-600 dark:text-gray-300 sm:h-12 sm:w-12 lg:h-16 lg:w-16"
                                             src="https://static.tildacdn.com/tild6663-3537-4532-b364-656264383531/_12.svg"
                                             alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <a href="#" class="text-lg font-medium text-gray-900 truncate dark:text-white">
                                            12.5 COFFEE ROASTERS
                                        </a>
                                    </div>
                                    <a href="#"
                                       class="block max-w-sm p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                        <div class="flex items-center">
                                            <svg class="w-6 h-6 text-yellow-300 mr-1" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                 viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                            </svg>
                                            <p class="ml-1 text-base font-semibold text-gray-900 dark:text-white">
                                                4.5</p>
                                        </div>
                                    </a>
                                    <a href="#"
                                       class="block max-w-sm p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                        <div class="flex items-center">
                                            <svg class="w-6 h-6 text-gray-600 dark:text-white mr-1" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="2"
                                                      d="M5.5 6.5h.01m4.49 0h.01m4.49 0h.01M18 1H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
                                            </svg>
                                            <p class="ml-1 text-base font-semibold text-gray-900 dark:text-white">24</p>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center gap-6">
                                    <div class="min-w">
                                        <p class="text-lg font-medium text-gray-900 truncate dark:text-white">
                                            4
                                        </p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <img class="h-10 w-10 rounded-full bg-gray-100 text-gray-600 dark:bg-gray-600 dark:text-gray-300 sm:h-12 sm:w-12 lg:h-16 lg:w-16"
                                             src="https://specialty.ru/upload/iblock/ea7/cqwmiqy1778f07v9yuxp0kunuy5xd408/Logo_new2023.png"
                                             alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-lg font-medium text-gray-900 truncate dark:text-white">
                                            Tasty Coffee
                                        </p>
                                    </div>
                                    <a href="#"
                                       class="block max-w-sm p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                        <div class="flex items-center">
                                            <svg class="w-6 h-6 text-yellow-300 mr-1" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                 viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                            </svg>
                                            <p class="ml-1 text-base font-semibold text-gray-900 dark:text-white">
                                                4.5</p>
                                        </div>
                                    </a>
                                    <a href="#"
                                       class="block max-w-sm p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                        <div class="flex items-center">
                                            <svg class="w-6 h-6 text-gray-600 dark:text-white mr-1" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="2"
                                                      d="M5.5 6.5h.01m4.49 0h.01m4.49 0h.01M18 1H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
                                            </svg>
                                            <p class="ml-1 text-base font-semibold text-gray-900 dark:text-white">24</p>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center gap-6">
                                    <div class="min-w">
                                        <p class="text-lg font-medium text-gray-900 truncate dark:text-white">
                                            5
                                        </p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <img class="h-10 w-10 rounded-full bg-gray-100 text-gray-600 dark:bg-gray-600 dark:text-gray-300 sm:h-12 sm:w-12 lg:h-16 lg:w-16"
                                             src="https://specialty.ru/upload/iblock/ea7/cqwmiqy1778f07v9yuxp0kunuy5xd408/Logo_new2023.png"
                                             alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-lg font-medium text-gray-900 truncate dark:text-white">
                                            Tasty Coffee
                                        </p>
                                    </div>
                                    <a href="#"
                                       class="block max-w-sm p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                        <div class="flex items-center">
                                            <svg class="w-6 h-6 text-yellow-300 mr-1" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                 viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                            </svg>
                                            <p class="ml-1 text-base font-semibold text-gray-900 dark:text-white">
                                                4.5</p>
                                        </div>
                                    </a>
                                    <a href="#"
                                       class="block max-w-sm p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                        <div class="flex items-center">
                                            <svg class="w-6 h-6 text-gray-600 dark:text-white mr-1" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="2"
                                                      d="M5.5 6.5h.01m4.49 0h.01m4.49 0h.01M18 1H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
                                            </svg>
                                            <p class="ml-1 text-base font-semibold text-gray-900 dark:text-white">24</p>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full mt-4 text-center">
                        <a rel="nofollow noreferrer noopener" target="_blank" class="inline-flex items-center justify-start gap-5 self-stretch rounded-lg border border-gray-300 bg-white px-4 py-3.5 text-center text-base font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-600 dark:focus:ring-gray-700 sm:gap-7" href="https://www.figma.com/file/SrvjS6Pmn04fT6ZEUa1spW/flowbite-pro-figma-v2.9.0?type=design&amp;node-id=18-0&amp;mode=design">
                            Весь рейтинг
                            <div class="ml-auto block">
                                <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"></path>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{--Blog--}}
<section class="bg-white dark:bg-gray-900 border-t border-gray-100 dark:border-gray-700">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
            <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Наш блог</h2>
            <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">От секретов выбора лучших зерен до искусства совершенного заваривания – у нас есть все, чтобы сделать ваш кофейный опыт неповторимым. Переходите в блог и окунитесь в ароматный мир кофейных открытий.</p>
        </div>
        <div class="grid gap-8 lg:grid-cols-3">
            <article
                class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-between items-center mb-5 text-gray-500">
                  <span
                      class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                      <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                           xmlns="http://www.w3.org/2000/svg"><path
                              d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                      Урок
                  </span>
                    <span class="text-sm">Сегодня</span>
                </div>
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    <a href="#">Как заварить кофе в турке</a>
                </h2>
                <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                    Приготовь кофе в турке, словно таинственный рецепт волшебного напитка! Ощути аромат зерен, танцующих в кипящей воде. Секрет в каждом движении - от изборажения пара до первого глотка. Подари своему утру магию в каждой капле кофе.
                </p>
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-4">
                        <img class="w-7 h-7 rounded-full"
                             src="https://sun9-49.userapi.com/impg/zP7QKU_LhfcnnifLSSXGtQLfPDfYbk2HqBfShA/vqyLtTgz67E.jpg?size=768x768&quality=95&sign=59bff1de3b619b9756c3b9a5030638f9&type=album"
                             alt="Jese Leos avatar"/>
                        <span class="font-medium dark:text-white">
                            CoffeeRate
                        </span>
                    </div>
                    <a href="#"
                       class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                        Читать
                        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </article>
            <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-between items-center mb-5 text-gray-500">
                    <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                      <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path>
                          <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path>
                      </svg>
                      Статья
                    </span>
                    <span class="text-sm">14 дней назад</span>
                </div>
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    <a href="#">Отличия арабики от робусты</a>
                </h2>
                <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                    Узнай, почему арабика и робуста - не просто сорта кофе, а настоящие характеры в чашке. Готовься к путешествию во вкусовые нюансы
                </p>
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-4">
                        <img class="w-7 h-7 rounded-full"
                             src="https://specialty.ru/upload/iblock/ea7/cqwmiqy1778f07v9yuxp0kunuy5xd408/Logo_new2023.png"
                             alt="Bonnie Green avatar"/>
                        <span class="font-medium dark:text-white">
                          Tasty Coffee
                      </span>
                    </div>
                    <a href="#"
                       class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                        Читать
                        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </article>
            <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-between items-center mb-5 text-gray-500">
                    <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                      <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path>
                          <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path>
                      </svg>
                      Статья
                    </span>
                    <span class="text-sm">14 дней назад</span>
                </div>
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">Our first
                        project with React</a></h2>
                <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Static websites are now used to bootstrap
                    lots of websites and are becoming the basis for a variety of tools that even influence both web
                    designers and developers influence both web designers and developers.</p>
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-4">
                        <img class="w-7 h-7 rounded-full"
                             src="https://specialty.ru/upload/iblock/ea7/cqwmiqy1778f07v9yuxp0kunuy5xd408/Logo_new2023.png"
                             alt="Bonnie Green avatar"/>
                        <span class="font-medium dark:text-white">
                          Tasty Coffee
                      </span>
                    </div>
                    <a href="#"
                       class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                        Читать
                        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </article>
        </div>
    </div>
</section>

<footer class="bg-white dark:bg-gray-900 border-t border-gray-100 dark:border-gray-700">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="https://flowbite.com/" class="flex items-center">
                    <img src="{{ asset('images/logo.svg') }}" class="h-8 mr-3" alt="FlowBite Logo"/>
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">CoffeeRate</span>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="https://flowbite.com/" class="hover:underline">CoffeeRate</a>
                        </li>
                        <li>
                            <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                        </li>
                        <li>
                            <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8"/>
        <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
              © 2023
              <a href="https://flowbite.com/" class="hover:underline">CoffeeRate</a>.
          </span>
            <div class="flex mt-4 space-x-5 sm:justify-center sm:mt-0">
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                         viewBox="0 0 8 19">
                        <path fill-rule="evenodd"
                              d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                              clip-rule="evenodd"/>
                    </svg>
                    <span class="sr-only">Facebook page</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                         viewBox="0 0 21 16">
                        <path
                            d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
                    </svg>
                    <span class="sr-only">Discord community</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                         viewBox="0 0 20 17">
                        <path fill-rule="evenodd"
                              d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                              clip-rule="evenodd"/>
                    </svg>
                    <span class="sr-only">Twitter page</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                         viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                              clip-rule="evenodd"/>
                    </svg>
                    <span class="sr-only">GitHub account</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                         viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                              clip-rule="evenodd"/>
                    </svg>
                    <span class="sr-only">Dribbble account</span>
                </a>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
