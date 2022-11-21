<div class="block h-auto max-h-screen w-auto grow basis-full items-center overflow-auto">
    <ul class="mb-0 flex flex-col pl-0">
        <li class="mt-0.5 w-full">
            <a class="{{ request()->is('dashboard*') ? 'bg-blue-500/13 ease-nav-brand text-slate-700 transition-colors font-semibold dark:text-white dark:opacity-80' : 'text-sm transition-colors dark:text-white dark:opacity-80' }} py-2.7 ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4"
                href="/dashboard">
                <div
                    class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                    <i class="ni ni-tv-2 relative top-0 text-sm leading-normal text-blue-500"></i>
                </div>
                <span class="ease pointer-events-none ml-1 opacity-100 duration-300">Dashboard</span>
            </a>
        </li>

        <li class="mt-0.5 w-full">
            <a class="{{ request()->is('product*') ? 'bg-blue-500/13 ease-nav-brand text-slate-700 transition-colors font-semibold dark:text-white dark:opacity-80' : 'text-sm transition-colors dark:text-white dark:opacity-80' }} py-2.7 ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4"
                href="/product">
                <div
                    class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                    <i class="ni ni-calendar-grid-58 relative top-0 text-sm leading-normal text-orange-500"></i>
                </div>
                <span class="ease pointer-events-none ml-1 opacity-100 duration-300">Product</span>
            </a>
        </li>

        <li class="mt-0.5 w-full">
            <a class="{{ request()->is('transaction*') ? 'bg-blue-500/13 ease-nav-brand text-slate-700 transition-colors font-semibold dark:text-white dark:opacity-80' : 'text-sm transition-colors dark:text-white dark:opacity-80' }} py-2.7 ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4"
                href="/transaction">
                <div
                    class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current stroke-0 text-center xl:p-2.5">
                    <i class="ni ni-credit-card relative top-0 text-sm leading-normal text-emerald-500"></i>
                </div>
                <span class="ease pointer-events-none ml-1 opacity-100 duration-300">Transaction</span>
            </a>
        </li>

        <li class="mt-0.5 w-full">
            <a class="py-2.7 ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 text-sm transition-colors dark:text-white dark:opacity-80"
                href="./pages/virtual-reality.html">
                <div
                    class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                    <i class="ni ni-app relative top-0 text-sm leading-normal text-cyan-500"></i>
                </div>
                <span class="ease pointer-events-none ml-1 opacity-100 duration-300">Virtual Reality</span>
            </a>
        </li>

        <li class="mt-0.5 w-full">
            <a class="py-2.7 ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 text-sm transition-colors dark:text-white dark:opacity-80"
                href="./pages/rtl.html">
                <div
                    class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                    <i class="ni ni-world-2 relative top-0 text-sm leading-normal text-red-600"></i>
                </div>
                <span class="ease pointer-events-none ml-1 opacity-100 duration-300">RTL</span>
            </a>
        </li>

        <li class="mt-4 w-full">
            <h6 class="ml-2 pl-6 text-xs font-bold uppercase leading-tight opacity-60 dark:text-white">Account
                pages</h6>
        </li>

        <li class="mt-0.5 w-full">
            <a class="py-2.7 ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 text-sm transition-colors dark:text-white dark:opacity-80"
                href="./pages/profile.html">
                <div
                    class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                    <i class="ni ni-single-02 relative top-0 text-sm leading-normal text-slate-700"></i>
                </div>
                <span class="ease pointer-events-none ml-1 opacity-100 duration-300">Profile</span>
            </a>
        </li>

        <li class="mt-0.5 w-full">
            <a class="py-2.7 ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 text-sm transition-colors dark:text-white dark:opacity-80"
                href="./pages/sign-in.html">
                <div
                    class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                    <i class="ni ni-single-copy-04 relative top-0 text-sm leading-normal text-orange-500"></i>
                </div>
                <span class="ease pointer-events-none ml-1 opacity-100 duration-300">Sign In</span>
            </a>
        </li>

        <li class="mt-0.5 w-full">
            <a class="py-2.7 ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 text-sm transition-colors dark:text-white dark:opacity-80"
                href="./pages/sign-up.html">
                <div
                    class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                    <i class="ni ni-collection relative top-0 text-sm leading-normal text-cyan-500"></i>
                </div>
                <span class="ease pointer-events-none ml-1 opacity-100 duration-300">Sign Up</span>
            </a>
        </li>
    </ul>
</div>
