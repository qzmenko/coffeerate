<x-app-layout>
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
</x-app-layout>
