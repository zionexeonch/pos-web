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
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <title>SOFTDEV POS</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Main Styling -->
    <link href="../assets/css/argon-dashboard-tailwind.css?v=1.0.1" rel="stylesheet" />
    <link href="/css/app.css" rel="stylesheet">
</head>

<body class="leading-default m-0 bg-white text-start font-sans text-base font-normal text-slate-500 antialiased">
    <div class="z-sticky container sticky top-0">
        <div class="-mx-3 flex flex-wrap">
            <div class="flex-0 w-full max-w-full px-3">
                <!-- Navbar -->
                <nav
                    class="absolute top-0 left-0 right-0 z-30 m-6 mb-0 flex flex-wrap items-center rounded-xl bg-white/80 px-4 py-2 shadow-sm backdrop-blur-2xl backdrop-saturate-200 lg:flex-nowrap lg:justify-start">
                    <div class="flex-wrap-inherit mx-auto flex w-full items-center justify-between p-0 px-6">
                        <a class="py-1.75 mr-4 ml-4 whitespace-nowrap text-sm font-bold text-slate-700 lg:ml-0"
                            href="https://demos.creative-tim.com/argon-dashboard-tailwind/pages/dashboard.html"
                            target="_blank"> SOFTDEV POS </a>
                        <button navbar-trigger
                            class="ml-2 cursor-pointer rounded-lg border border-solid border-transparent bg-transparent px-3 py-1 text-lg leading-none shadow-none transition-all ease-in-out lg:hidden"
                            type="button" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span
                                class="mt-2 inline-block h-6 w-6 bg-none bg-cover bg-center bg-no-repeat align-middle">
                                <span bar1
                                    class="w-5.5 rounded-xs relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
                                <span bar2
                                    class="w-5.5 rounded-xs mt-1.75 relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
                                <span bar3
                                    class="w-5.5 rounded-xs mt-1.75 relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
                            </span>
                        </button>
                        <div navbar-menu
                            class="lg-max:overflow-hidden ease lg-max:max-h-0 flex-grow basis-full items-center transition-all duration-500 lg:flex lg:basis-auto">
                            <ul class="mx-auto mb-0 flex list-none flex-col pl-0 lg:flex-row xl:ml-auto">
                                <li>
                                    <a class="lg-max:opacity-0 duration-250 mr-2 flex items-center px-4 py-2 text-sm font-normal text-slate-700 transition-all ease-in-out lg:px-2"
                                        aria-current="page" href="/">
                                        <i class="fa fa-chart-pie mr-1 opacity-60"></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a class="lg-max:opacity-0 duration-250 mr-2 block px-4 py-2 text-sm font-normal text-slate-700 transition-all ease-in-out lg:px-2"
                                        href="../pages/profile.html">
                                        <i class="fa fa-user mr-1 opacity-60"></i>
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <a class="lg-max:opacity-0 duration-250 mr-2 block px-4 py-2 text-sm font-normal text-slate-700 transition-all ease-in-out lg:px-2"
                                        href="../pages/sign-up.html">
                                        <i class="fas fa-user-circle mr-1 opacity-60"></i>
                                        Sign Up
                                    </a>
                                </li>
                                <li>
                                    <a class="lg-max:opacity-0 duration-250 mr-2 block px-4 py-2 text-sm font-normal text-slate-700 transition-all ease-in-out lg:px-2"
                                        href="../pages/sign-in.html">
                                        <i class="fas fa-key mr-1 opacity-60"></i>
                                        Sign In
                                    </a>
                                </li>
                            </ul>
                            <!-- online builder btn  -->
                            <!-- <li class="flex items-center">
                  <a
                    class="leading-pro tracking-tight-rem bg-150 bg-x-25 rounded-3.5xl active:opacity-85 active:shadow-xs mr-2 mb-0 inline-block cursor-pointer border border-solid border-blue-500 bg-transparent py-2 px-8 text-center align-middle text-xs font-bold uppercase text-blue-500 shadow-none transition-all ease-in hover:-translate-y-px hover:border-blue-500 hover:bg-transparent hover:text-blue-500 hover:opacity-75 hover:shadow-none active:scale-100 active:border-blue-500 active:bg-blue-500 active:text-white active:hover:-translate-y-px active:hover:border-blue-500 active:hover:bg-transparent active:hover:text-blue-500 active:hover:opacity-75 active:hover:shadow-none"
                    target="_blank"
                    href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard&amp;_ga=2.76518741.1192788655.1647724933-1242940210.1644448053"
                    >Online Builder</a
                  >
                </li> -->
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <main class="mt-0 transition-all duration-200 ease-in-out">
        <section>
            <div class="relative flex min-h-screen items-center overflow-hidden bg-cover bg-center p-0">
                <div class="z-1 container">
                    <div class="-mx-3 flex flex-wrap">
                        <div
                            class="md:flex-0 mx-auto flex w-full max-w-full shrink-0 flex-col px-3 md:w-7/12 lg:mx-0 lg:w-5/12 xl:w-4/12">
                            <div
                                class="lg:py4 dark:bg-gray-950 relative flex min-w-0 flex-col break-words rounded-2xl border-0 bg-transparent bg-clip-border shadow-none">
                                <div class="mb-0 p-6 pb-0">
                                    <h4 class="font-bold">Sign In</h4>
                                    <p class="mb-0">Enter your email and password to sign in</p>
                                </div>
                                <div class="flex-auto p-6">
                                    <form role="form" action="/login" method="POST">
                                        @csrf
                                        <div class="mb-4">
                                            <input type="email" placeholder="Email" name="email"
                                                class="focus:shadow-primary-outline dark:bg-gray-950 leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 text-sm font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none dark:text-white/80 dark:placeholder:text-white/80" />
                                        </div>
                                        <div class="mb-4">
                                            <input type="password" placeholder="Password" name="password"
                                                class="focus:shadow-primary-outline dark:bg-gray-950 leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 text-sm font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none dark:text-white/80 dark:placeholder:text-white/80" />
                                        </div>
                                        {{-- <div class="min-h-6 mb-0.5 flex items-center pl-12 text-left">
                                            <input id="rememberMe"
                                                class="rounded-10 duration-250 after:rounded-circle after:duration-250 checked:after:translate-x-5.3 relative float-left mt-0.5 -ml-12 h-5 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-zinc-700/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all ease-in-out after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:shadow-2xl after:content-[''] checked:border-blue-500/95 checked:bg-blue-500/95 checked:bg-none checked:bg-right"
                                                type="checkbox" />
                                            <label
                                                class="ml-2 cursor-pointer select-none text-sm font-normal text-slate-700"
                                                for="rememberMe">Remember me</label>
                                        </div> --}}
                                        <div class="text-center">
                                            <button type="submit"
                                                class="active:opacity-85 hover:shadow-xs tracking-tight-rem bg-150 bg-x-25 mt-6 mb-0 inline-block w-full cursor-pointer rounded-lg border-0 bg-blue-500 px-16 py-3.5 text-center align-middle text-sm font-bold leading-normal text-white shadow-md transition-all ease-in hover:-translate-y-px">Sign
                                                in</button>
                                        </div>
                                    </form>
                                </div>
                                <div
                                    class="border-black/12.5 rounded-b-2xl border-t-0 border-solid p-6 px-1 pt-0 text-center sm:px-6">
                                    <p class="mx-auto mb-6 text-sm leading-normal">Don't have an account? <a
                                            href="../pages/sign-up.html"
                                            class="bg-gradient-to-tl from-blue-500 to-violet-500 bg-clip-text font-semibold text-transparent">Sign
                                            up</a></p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex-0 absolute top-0 right-0 my-auto hidden h-full w-6/12 max-w-full flex-col justify-center px-3 pr-0 text-center lg:flex">
                            <div
                                class="relative m-4 flex h-full flex-col justify-center overflow-hidden rounded-xl bg-[url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg')] bg-cover px-24">
                                <span
                                    class="absolute top-0 left-0 h-full w-full bg-gradient-to-tl from-blue-500 to-violet-500 bg-cover bg-center opacity-60"></span>
                                <h4 class="z-20 mt-12 font-bold text-white">"Attention is the new currency"</h4>
                                <p class="z-20 text-white">The more effortless the writing looks, the more effort the
                                    writer actually put into the process.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="py-12">
        <div class="container">
            <div class="-mx-3 flex flex-wrap">
                <div class="lg:flex-0 mx-auto mb-6 w-full max-w-full flex-shrink-0 text-center lg:w-8/12">
                    <a href="javascript:;" target="_blank" class="mb-2 mr-4 text-slate-400 sm:mb-0 xl:mr-12"> Company
                    </a>
                    <a href="javascript:;" target="_blank" class="mb-2 mr-4 text-slate-400 sm:mb-0 xl:mr-12"> About
                        Us </a>
                    <a href="javascript:;" target="_blank" class="mb-2 mr-4 text-slate-400 sm:mb-0 xl:mr-12"> Team
                    </a>
                    <a href="javascript:;" target="_blank" class="mb-2 mr-4 text-slate-400 sm:mb-0 xl:mr-12">
                        Products </a>
                    <a href="javascript:;" target="_blank" class="mb-2 mr-4 text-slate-400 sm:mb-0 xl:mr-12"> Blog
                    </a>
                    <a href="javascript:;" target="_blank" class="mb-2 mr-4 text-slate-400 sm:mb-0 xl:mr-12"> Pricing
                    </a>
                </div>
                <div class="lg:flex-0 mx-auto mt-2 mb-6 w-full max-w-full flex-shrink-0 text-center lg:w-8/12">
                    <a href="javascript:;" target="_blank" class="mr-6 text-slate-400">
                        <span class="fab fa-dribbble text-lg"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="mr-6 text-slate-400">
                        <span class="fab fa-twitter text-lg"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="mr-6 text-slate-400">
                        <span class="fab fa-instagram text-lg"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="mr-6 text-slate-400">
                        <span class="fab fa-pinterest text-lg"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="mr-6 text-slate-400">
                        <span class="fab fa-github text-lg"></span>
                    </a>
                </div>
            </div>
            <div class="-mx-3 flex flex-wrap">
                <div class="flex-0 mx-auto mt-1 w-8/12 max-w-full px-3 text-center">
                    <p class="mb-0 text-slate-400">
                        Copyright ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        <a href="http://softdev.akriliklasercutting.com">Software Developer Community</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>

</body>
<!-- plugin for scrollbar  -->
<script src="../assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- main script file  -->
<script src="../assets/js/argon-dashboard-tailwind.js?v=1.0.1" async></script>

</html>
