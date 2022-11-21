<!--

=========================================================
* Argon Dashboard 2 Tailwind - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard-tailwind
* Copyright 2022 Creative Tim (https://www.creative-tim.com)

* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon.ico" />
    <link rel="icon" type="image/png" href="/favicon.ico" />
    <title>{{ $title }} | Softdev Point Of Sale</title>
    <link href="/css/app.css" rel="stylesheet">
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href="./assets/css/argon-dashboard-tailwind.css?v=1.0.1" rel="stylesheet" />
</head>

<body
    class="leading-default m-0 bg-gray-50 font-sans text-base font-normal text-slate-500 antialiased dark:bg-slate-900">
    <div class="min-h-75 absolute w-full bg-blue-500 dark:hidden"></div>
    <!-- sidenav  -->
    <aside
        class="dark:bg-slate-850 max-w-64 ease-nav-brand z-990 fixed inset-y-0 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto border-0 bg-white p-0 antialiased shadow-xl transition-transform duration-200 dark:shadow-none xl:left-0 xl:translate-x-0"
        aria-expanded="false">
        <div class="h-19">
            <i class="fas fa-times absolute top-0 right-0 cursor-pointer p-4 text-slate-400 opacity-50 dark:text-white xl:hidden"
                sidenav-close></i>
            <a class="m-0 block whitespace-nowrap px-8 py-6 text-sm text-slate-700 dark:text-white"
                href="https://demos.creative-tim.com/argon-dashboard-tailwind/pages/dashboard.html" target="_blank">
                <img src="https://res.cloudinary.com/dnmkw2715/image/upload/v1664641186/softdev/SoftDev_Logo_2_xf82ww.png"
                    class="ease-nav-brand inline h-full max-h-8 max-w-full transition-all duration-200 dark:hidden"
                    alt="main_logo" />
                <img src="https://res.cloudinary.com/dnmkw2715/image/upload/v1664641186/softdev/SoftDev_Logo_2_xf82ww.png"
                    class="ease-nav-brand hidden h-full max-h-8 max-w-full transition-all duration-200 dark:inline"
                    alt="main_logo" />
                <span class="ease-nav-brand ml-1 font-semibold transition-all duration-200">Point Of Sale</span>
            </a>
        </div>

        <hr
            class="mt-0 h-px bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />

        @include('template.sidebar')
    </aside>

    <main class="xl:ml-68 relative h-full max-h-screen rounded-xl transition-all duration-200 ease-in-out">
        <!-- Navbar -->
        <nav class="duration-250 relative mx-6 flex flex-wrap items-center justify-between rounded-2xl px-0 py-2 shadow-none transition-all ease-in lg:flex-nowrap lg:justify-start"
            navbar-main navbar-scroll="false">
            <div class="flex-wrap-inherit mx-auto flex w-full items-center justify-between px-4 py-1">
                <nav>
                    <!-- breadcrumb -->
                    <ol class="mr-12 flex flex-wrap rounded-lg bg-transparent pt-1 sm:mr-16">
                        <li class="text-sm leading-normal">
                            <a class="text-white opacity-50" href="javascript:;">Pages</a>
                        </li>
                        <li class="pl-2 text-sm capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']"
                            aria-current="page">{{ request()->is('') }}</li>
                    </ol>
                    <h6 class="mb-0 font-bold capitalize text-white">{{ $title }}</h6>
                </nav>

                <div class="mt-2 flex grow items-center sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
                    <div class="flex items-center md:ml-auto md:pr-4">
                        <div class="ease relative flex w-full flex-wrap items-stretch rounded-lg transition-all">
                            <span
                                class="ease leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center text-sm font-normal text-slate-500 transition-all">
                                <i class="fas fa-search"></i>
                            </span>
                            <input type="text"
                                class="focus:shadow-primary-outline ease w-1/100 leading-5.6 dark:bg-slate-850 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pl-9 pr-3 text-sm text-gray-700 transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none focus:transition-shadow dark:text-white"
                                placeholder="Type here..." />
                        </div>
                    </div>
                    <ul class="md-max:w-full mb-0 flex list-none flex-row justify-end pl-0">
                        <!-- online builder btn  -->
                        @auth
                            <li class="relative flex items-center pr-2">
                                <p class="transform-dropdown-show hidden"></p>
                                <a href="javascript:;" class="ease-nav-brand block p-0 text-sm text-white transition-all"
                                    dropdown-trigger aria-expanded="false">
                                    {{-- <i class="fa fa-bell cursor-pointer"></i> --}}
                                    <span>{{ auth()->user()->name }}</span>
                                </a>

                                <ul dropdown-menu
                                    class="transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease lg:shadow-3xl duration-250 min-w-44 before:text-5.5 dark:shadow-dark-xl dark:bg-slate-850 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-sm text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 before:sm:right-8 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer">
                                    <!-- add show class on dropdown open js -->
                                    <li class="relative mb-2">
                                        <a class="ease py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 dark:hover:bg-slate-900 lg:transition-colors"
                                            href="javascript:;">
                                            <div class="flex py-1">
                                                <div class="my-auto">
                                                    <img src="./assets/img/team-2.jpg"
                                                        class="mr-4 inline-flex h-9 w-9 max-w-none items-center justify-center rounded-xl text-sm text-white" />
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-1 text-sm font-normal leading-normal dark:text-white">
                                                        <span class="font-semibold">{{ Auth::user()->name }}</span>
                                                    </h6>
                                                    <p class="mb-0 text-xs leading-tight text-slate-400 dark:text-white/80">
                                                        <i class="fa fa-envelope mr-1"></i>
                                                        {{ Auth::user()->email }}
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="relative mb-2">
                                        <a href="/logout"
                                            class="ease py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700 dark:hover:bg-slate-900"
                                            href="javascript:;">
                                            <div class="flex py-1">
                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-1 text-sm font-normal leading-normal dark:text-white">
                                                        <span class="font-semibold">Keluar <i
                                                                class="fa fa-sign-out"></i></span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        @endauth
                        <li class="flex items-center pl-4 xl:hidden">
                            <a href="javascript:;" class="ease-nav-brand block p-0 text-sm text-white transition-all"
                                sidenav-trigger>
                                <div class="w-4.5 overflow-hidden">
                                    <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                                    <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                                    <i class="ease relative block h-0.5 rounded-sm bg-white transition-all"></i>
                                </div>
                            </a>
                        </li>
                        <li class="flex items-center px-4">
                            <a href="javascript:;" class="ease-nav-brand p-0 text-sm text-white transition-all">
                                <i fixed-plugin-button-nav class="fa fa-cog cursor-pointer"></i>
                                <!-- fixed-plugin-button-nav  -->
                            </a>
                        </li>

                        <!-- notifications -->

                        <li class="relative flex items-center pr-2">
                            <p class="transform-dropdown-show hidden"></p>
                            <a href="javascript:;" class="ease-nav-brand block p-0 text-sm text-white transition-all"
                                dropdown-trigger aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer"></i>
                            </a>

                            <ul dropdown-menu
                                class="transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease lg:shadow-3xl duration-250 min-w-44 before:text-5.5 dark:shadow-dark-xl dark:bg-slate-850 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-sm text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 before:sm:right-8 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer">
                                <!-- add show class on dropdown open js -->
                                <li class="relative mb-2">
                                    <a class="ease py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 dark:hover:bg-slate-900 lg:transition-colors"
                                        href="javascript:;">
                                        <div class="flex py-1">
                                            <div class="my-auto">
                                                <img src="./assets/img/team-2.jpg"
                                                    class="mr-4 inline-flex h-9 w-9 max-w-none items-center justify-center rounded-xl text-sm text-white" />
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-1 text-sm font-normal leading-normal dark:text-white">
                                                    <span class="font-semibold">New message</span> from Laur
                                                </h6>
                                                <p
                                                    class="mb-0 text-xs leading-tight text-slate-400 dark:text-white/80">
                                                    <i class="fa fa-clock mr-1"></i>
                                                    13 minutes ago
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li class="relative mb-2">
                                    <a class="ease py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700 dark:hover:bg-slate-900"
                                        href="javascript:;">
                                        <div class="flex py-1">
                                            <div class="my-auto">
                                                <img src="./assets/img/small-logos/logo-spotify.svg"
                                                    class="dark:from-slate-750 dark:to-gray-850 mr-4 inline-flex h-9 w-9 max-w-none items-center justify-center rounded-xl bg-gradient-to-tl from-zinc-800 to-zinc-700 text-sm text-white dark:bg-gradient-to-tl" />
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-1 text-sm font-normal leading-normal dark:text-white">
                                                    <span class="font-semibold">New album</span> by Travis Scott
                                                </h6>
                                                <p
                                                    class="mb-0 text-xs leading-tight text-slate-400 dark:text-white/80">
                                                    <i class="fa fa-clock mr-1"></i>
                                                    1 day
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li class="relative">
                                    <a class="ease py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700 dark:hover:bg-slate-900"
                                        href="javascript:;">
                                        <div class="flex py-1">
                                            <div
                                                class="ease-nav-brand my-auto mr-4 inline-flex h-9 w-9 items-center justify-center rounded-xl bg-gradient-to-tl from-slate-600 to-slate-300 text-sm text-white transition-all duration-200">
                                                <svg width="12px" height="12px" viewBox="0 0 43 36"
                                                    version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>credit-card</title>
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <g transform="translate(-2169.000000, -745.000000)"
                                                            fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(453.000000, 454.000000)">
                                                                    <path class="color-background"
                                                                        d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                        opacity="0.593633743"></path>
                                                                    <path class="color-background"
                                                                        d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-1 text-sm font-normal leading-normal dark:text-white">
                                                    Payment successfully completed</h6>
                                                <p
                                                    class="mb-0 text-xs leading-tight text-slate-400 dark:text-white/80">
                                                    <i class="fa fa-clock mr-1"></i>
                                                    2 days
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- end Navbar -->

        <!-- cards -->
        <div class="mx-auto w-full px-6 py-6">
            <div class="-mx-3 flex flex-wrap">
                @yield('content')
            </div>
        </div>
        <!-- end cards -->
    </main>

    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

</body>
<!-- plugin for charts  -->
<script src="./assets/js/plugins/chartjs.min.js" async></script>
<!-- plugin for scrollbar  -->
<script src="./assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- main script file  -->
<script src="./assets/js/argon-dashboard-tailwind.js?v=1.0.1" async></script>

</html>
