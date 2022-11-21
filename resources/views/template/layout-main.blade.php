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
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
    <title>POS Softdev Community</title>
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
    <link href="/css/app.css" rel="stylesheet">
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
                            aria-current="page">Dashboard</li>
                    </ol>
                    <h6 class="mb-0 font-bold capitalize text-white">Dashboard</h6>
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
                        <!-- <li class="flex items-center">
                <a class="leading-pro active:shadow-xs tracking-tight-rem mb-0 mr-4 inline-block cursor-pointer rounded-lg border border-solid border-blue-500 bg-transparent px-8 py-2 text-center align-middle text-xs font-bold uppercase text-blue-500 shadow-none transition-all ease-in hover:-translate-y-px hover:border-blue-500 hover:bg-transparent hover:text-blue-500 hover:opacity-75 hover:shadow-none active:bg-blue-500 active:text-white active:hover:bg-transparent active:hover:text-blue-500" target="_blank" href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard&amp;_ga=2.76518741.1192788655.1647724933-1242940210.1644448053">Online Builder</a>
              </li> -->
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

            @yield('content')


            <footer class="pt-4">
                <div class="mx-auto w-full px-6">
                    <div class="-mx-3 flex flex-wrap items-center lg:justify-between">
                        <div class="mt-0 mb-6 w-full max-w-full shrink-0 px-3 lg:mb-0 lg:w-1/2 lg:flex-none">
                            <div class="text-center text-sm leading-normal text-slate-500 lg:text-left">
                                ©
                                <script>
                                    document.write(new Date().getFullYear() + ",");
                                </script>
                                made with <i class="fa fa-heart"></i> by
                                <a href="https://www.creative-tim.com"
                                    class="font-semibold text-slate-700 dark:text-white" target="_blank">Creative
                                    Tim</a>
                                for a better web.
                            </div>
                        </div>
                        <div class="mt-0 w-full max-w-full shrink-0 px-3 lg:w-1/2 lg:flex-none">
                            <ul class="mb-0 flex list-none flex-wrap justify-center pl-0 lg:justify-end">
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com"
                                        class="block px-4 pt-0 pb-1 text-sm font-normal text-slate-500 transition-colors ease-in-out"
                                        target="_blank">Creative Tim</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/presentation"
                                        class="block px-4 pt-0 pb-1 text-sm font-normal text-slate-500 transition-colors ease-in-out"
                                        target="_blank">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://creative-tim.com/blog"
                                        class="block px-4 pt-0 pb-1 text-sm font-normal text-slate-500 transition-colors ease-in-out"
                                        target="_blank">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/license"
                                        class="block px-4 pt-0 pb-1 pr-0 text-sm font-normal text-slate-500 transition-colors ease-in-out"
                                        target="_blank">License</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end cards -->
    </main>
    <div fixed-plugin>
        <a fixed-plugin-button
            class="z-990 rounded-circle fixed bottom-8 right-8 cursor-pointer bg-white px-4 py-2 text-xl text-slate-700 shadow-lg">
            <i class="fa fa-cog pointer-events-none py-2"> </i>
        </a>
        <!-- -right-90 in loc de 0-->
        <div fixed-plugin-card
            class="z-sticky dark:bg-slate-850/80 shadow-3xl w-90 ease -right-90 fixed top-0 left-auto flex h-full min-w-0 flex-col break-words rounded-none border-0 bg-white/80 bg-clip-border px-2.5 backdrop-blur-2xl backdrop-saturate-200 duration-200">
            <div class="mb-0 rounded-t-2xl border-b-0 px-6 pt-4 pb-0">
                <div class="float-left">
                    <h5 class="mt-4 mb-0 dark:text-white">Argon Configurator</h5>
                    <p class="dark:text-white dark:opacity-80">See our dashboard options.</p>
                </div>
                <div class="float-right mt-6">
                    <button fixed-plugin-close-button
                        class="tracking-tight-rem bg-150 bg-x-25 active:opacity-85 mb-4 inline-block cursor-pointer rounded-lg border-0 bg-transparent p-0 text-center align-middle text-sm font-bold uppercase leading-normal text-slate-700 shadow-none transition-all ease-in hover:-translate-y-px dark:text-white">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr
                class="mx-0 my-1 h-px bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />
            <div class="flex-auto overflow-auto p-6 pt-0 sm:pt-4">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0 dark:text-white">Sidebar Colors</h6>
                </div>
                <a href="javascript:void(0)">
                    <div class="my-2 text-left" sidenav-colors>
                        <span
                            class="py-2.2 rounded-circle h-5.6 mr-1.25 w-5.6 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-slate-700 bg-gradient-to-tl from-blue-500 to-violet-500 text-center align-baseline text-xs font-bold uppercase leading-none text-white transition-all duration-200 ease-in-out hover:border-slate-700"
                            active-color data-color="blue" onclick="sidebarColor(this)"></span>
                        <span
                            class="py-2.2 rounded-circle h-5.6 mr-1.25 w-5.6 dark:from-slate-750 dark:to-gray-850 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white bg-gradient-to-tl from-zinc-800 to-zinc-700 text-center align-baseline text-xs font-bold uppercase leading-none text-white transition-all duration-200 ease-in-out hover:border-slate-700 dark:bg-gradient-to-tl"
                            data-color="gray" onclick="sidebarColor(this)"></span>
                        <span
                            class="py-2.2 rounded-circle h-5.6 mr-1.25 w-5.6 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white bg-gradient-to-tl from-blue-700 to-cyan-500 text-center align-baseline text-xs font-bold uppercase leading-none text-white transition-all duration-200 ease-in-out hover:border-slate-700"
                            data-color="cyan" onclick="sidebarColor(this)"></span>
                        <span
                            class="py-2.2 rounded-circle h-5.6 mr-1.25 w-5.6 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white bg-gradient-to-tl from-emerald-500 to-teal-400 text-center align-baseline text-xs font-bold uppercase leading-none text-white transition-all duration-200 ease-in-out hover:border-slate-700"
                            data-color="emerald" onclick="sidebarColor(this)"></span>
                        <span
                            class="py-2.2 rounded-circle h-5.6 mr-1.25 w-5.6 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white bg-gradient-to-tl from-orange-500 to-yellow-500 text-center align-baseline text-xs font-bold uppercase leading-none text-white transition-all duration-200 ease-in-out hover:border-slate-700"
                            data-color="orange" onclick="sidebarColor(this)"></span>
                        <span
                            class="py-2.2 rounded-circle h-5.6 mr-1.25 w-5.6 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white bg-gradient-to-tl from-red-600 to-orange-600 text-center align-baseline text-xs font-bold uppercase leading-none text-white transition-all duration-200 ease-in-out hover:border-slate-700"
                            data-color="red" onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class="mt-4">
                    <h6 class="mb-0 dark:text-white">Sidenav Type</h6>
                    <p class="text-sm leading-normal dark:text-white dark:opacity-80">Choose between 2 different
                        sidenav types.</p>
                </div>
                <div class="flex">
                    <button transparent-style-btn
                        class="xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-blue-500 xl-max:to-violet-500 xl-max:text-white xl-max:border-0 dark:opacity-65 hover:shadow-xs active:opacity-85 tracking-tight-rem bg-150 bg-x-25 mb-2 inline-block w-full cursor-pointer rounded-lg border border-solid border-transparent bg-blue-500 bg-gradient-to-tl from-blue-500 to-violet-500 px-4 py-2.5 text-center align-middle text-sm font-bold capitalize leading-normal text-white shadow-md transition-all ease-in hover:-translate-y-px hover:border-blue-500 dark:pointer-events-none dark:cursor-not-allowed dark:border-0 dark:bg-gradient-to-tl dark:from-blue-500 dark:to-violet-500 dark:text-white"
                        data-class="bg-transparent" active-style>White</button>
                    <button white-style-btn
                        class="xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-blue-500 xl-max:to-violet-500 xl-max:text-white xl-max:border-0 dark:opacity-65 hover:shadow-xs active:opacity-85 tracking-tight-rem bg-150 bg-x-25 mb-2 ml-2 inline-block w-full cursor-pointer rounded-lg border border-solid border-blue-500 bg-transparent bg-none px-4 py-2.5 text-center align-middle text-sm font-bold capitalize leading-normal text-blue-500 shadow-md transition-all ease-in hover:-translate-y-px hover:border-blue-500 dark:pointer-events-none dark:cursor-not-allowed dark:border-0 dark:bg-gradient-to-tl dark:from-blue-500 dark:to-violet-500 dark:text-white"
                        data-class="bg-white">Dark</button>
                </div>
                <p class="mt-2 block text-sm leading-normal dark:text-white dark:opacity-80 xl:hidden">You can change
                    the sidenav type just on desktop view.</p>
                <!-- Navbar Fixed -->
                <div class="my-4 flex">
                    <h6 class="mb-0 dark:text-white">Navbar Fixed</h6>
                    <div class="min-h-6 ml-auto block pl-0">
                        <input navbarFixed
                            class="rounded-10 duration-250 after:rounded-circle after:duration-250 checked:after:translate-x-5.3 relative float-left mt-1 ml-auto h-5 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all ease-in-out after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:shadow-2xl after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right"
                            type="checkbox" />
                    </div>
                </div>
                <hr
                    class="my-6 h-px bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />
                <div class="mt-2 mb-12 flex">
                    <h6 class="mb-0 dark:text-white">Light / Dark</h6>
                    <div class="min-h-6 ml-auto block pl-0">
                        <input dark-toggle
                            class="rounded-10 duration-250 after:rounded-circle after:duration-250 checked:after:translate-x-5.3 relative float-left mt-1 ml-auto h-5 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all ease-in-out after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:shadow-2xl after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right"
                            type="checkbox" />
                    </div>
                </div>
                <a target="_blank"
                    class="hover:shadow-xs active:opacity-85 tracking-tight-rem bg-150 bg-x-25 dark:from-slate-750 dark:to-gray-850 mb-4 inline-block w-full cursor-pointer rounded-lg border border-solid border-transparent bg-transparent bg-gradient-to-tl from-zinc-800 to-zinc-700 px-6 py-2.5 text-center align-middle text-sm font-bold leading-normal text-white shadow-md transition-all ease-in hover:-translate-y-px dark:border dark:border-solid dark:border-white dark:bg-gradient-to-tl"
                    href="https://www.creative-tim.com/product/argon-dashboard-tailwind">Free Download</a>
                <a target="_blank"
                    class="active:shadow-xs active:opacity-85 tracking-tight-rem bg-150 bg-x-25 mb-4 inline-block w-full cursor-pointer rounded-lg border border-solid border-slate-700 bg-transparent px-6 py-2.5 text-center align-middle text-sm font-bold leading-normal text-slate-700 shadow-none transition-all ease-in hover:-translate-y-px hover:bg-transparent hover:text-slate-700 hover:shadow-none active:bg-slate-700 active:text-white active:hover:bg-transparent active:hover:text-slate-700 active:hover:shadow-none dark:border dark:border-solid dark:border-white dark:text-white"
                    href="https://www.creative-tim.com/learning-lab/tailwind/html/quick-start/argon-dashboard/">View
                    documentation</a>
                <div class="w-full text-center">
                    <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard-tailwind"
                        data-icon="octicon-star" data-size="large" data-show-count="true"
                        aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
                    <h6 class="mt-4 dark:text-white">Thank you for sharing!</h6>
                    <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23tailwindcss&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard-tailwind"
                        class="hover:shadow-xs active:opacity-85 tracking-tight-rem bg-150 bg-x-25 me-2 mb-0 mr-2 inline-block cursor-pointer rounded-lg border-0 border-slate-700 bg-slate-700 px-5 py-2.5 text-center align-middle text-sm font-bold leading-normal text-white shadow-md transition-all ease-in hover:-translate-y-px"
                        target="_blank"> <i class="fab fa-twitter mr-1"></i> Tweet </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard-tailwind"
                        class="hover:shadow-xs active:opacity-85 tracking-tight-rem bg-150 bg-x-25 me-2 mb-0 mr-2 inline-block cursor-pointer rounded-lg border-0 border-slate-700 bg-slate-700 px-5 py-2.5 text-center align-middle text-sm font-bold leading-normal text-white shadow-md transition-all ease-in hover:-translate-y-px"
                        target="_blank"> <i class="fab fa-facebook-square mr-1"></i> Share </a>
                </div>
            </div>
        </div>
    </div>

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
