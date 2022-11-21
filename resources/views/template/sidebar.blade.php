<div class="block h-auto max-h-screen w-auto grow basis-full items-center overflow-auto">
    <ul class="mb-0 flex flex-col pl-0">
        <li>
            <a href="/dashboard"
                class="{{ request()->is('dashboard*') ? 'bg-blue-500/13 ease-nav-brand text-slate-700 transition-colors font-semibold dark:text-white dark:opacity-80' : 'text-sm transition-colors dark:text-white dark:opacity-80' }} py-2.7 ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 hover:cursor-pointer"
                id="dashboard">
                <div
                    class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                    <i class="ni ni-tv-2 relative top-0 text-sm leading-normal text-orange-500"></i>
                </div>
                <span class="ease pointer-events-none ml-1 opacity-100 duration-300">Dashboard</span>
            </a>
        </li>
        <li class="mt-0.5 w-full">
            <button type="button" aria-controls="reports" data-collapse-toggle="reports"
                class="{{ request()->is('sales*') ? 'bg-blue-500/13 ease-nav-brand text-slate-700 transition-colors font-semibold dark:text-white dark:opacity-80' : 'text-sm transition-colors dark:text-white dark:opacity-80' }} py-2.7 ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 hover:cursor-pointer">
                <div
                    class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                    <i class="ni ni-books relative top-0 text-sm leading-normal text-orange-500"></i>
                </div>
                <span class="ease pointer-events-none ml-1 opacity-100 duration-300">Reports</span>
                <svg sidebar-toggle-item class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <ul id="reports" class="hidden space-y-2 py-2">
                <li>
                    <a href="/sales"
                        class="{{ request()->is('sales*') ? 'bg-blue-500/13 ease-nav-brand text-slate-700 transition-colors font-semibold dark:text-white dark:opacity-80' : 'text-sm transition-colors dark:text-white dark:opacity-80' }} py-2.7 ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 hover:cursor-pointer"
                        id="sales">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            {{-- <i class="fa fa-box relative top-0 text-sm leading-normal text-orange-500"></i> --}}
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">Sales</span>
                    </a>
                </li>
                <li>
                    <a href="/transaction"
                        class="{{ request()->is('transaction*') ? 'bg-blue-500/13 ease-nav-brand text-slate-700 transition-colors font-semibold dark:text-white dark:opacity-80' : 'text-sm transition-colors dark:text-white dark:opacity-80' }} py-2.7 ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 hover:cursor-pointer"
                        id="transaction">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            {{-- <i class="fa fa-box relative top-0 text-sm leading-normal text-orange-500"></i> --}}
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">Transaction</span>
                    </a>
                </li>
                <li>
                    <a href="/invoice"
                        class="{{ request()->is('invoice*') ? 'bg-blue-500/13 ease-nav-brand text-slate-700 transition-colors font-semibold dark:text-white dark:opacity-80' : 'text-sm transition-colors dark:text-white dark:opacity-80' }} py-2.7 ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 hover:cursor-pointer"
                        id="invoice">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            {{-- <i class="fa fa-box relative top-0 text-sm leading-normal text-orange-500"></i> --}}
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">Invoices</span>
                    </a>
                </li>
                <li>
                    <a href="/shift"
                        class="{{ request()->is('shift*') ? 'bg-blue-500/13 ease-nav-brand text-slate-700 transition-colors font-semibold dark:text-white dark:opacity-80' : 'text-sm transition-colors dark:text-white dark:opacity-80' }} py-2.7 ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 hover:cursor-pointer"
                        id="shift">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            {{-- <i class="fa fa-box relative top-0 text-sm leading-normal text-orange-500"></i> --}}
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">Shift</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="mt-0.5 w-full">
            <button type="button" aria-controls="dropdown-library" data-collapse-toggle="dropdown-library"
                class="{{ request()->is('product*') ? 'bg-blue-500/13 ease-nav-brand text-slate-700 transition-colors font-semibold dark:text-white dark:opacity-80' : 'text-sm transition-colors dark:text-white dark:opacity-80' }} py-2.7 ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 hover:cursor-pointer">
                <div
                    class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                    <i class="ni ni-books relative top-0 text-sm leading-normal text-purple-500"></i>
                </div>
                <span class="ease pointer-events-none ml-1 opacity-100 duration-300">Library</span>
                <svg sidebar-toggle-item class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <ul id="dropdown-library" class="hidden space-y-2 py-2">
                <li>
                    <a href="/product"
                        class="{{ request()->is('product*') ? 'bg-blue-500/13 ease-nav-brand text-slate-700 transition-colors font-semibold dark:text-white dark:opacity-80' : 'text-sm transition-colors dark:text-white dark:opacity-80' }} ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap py-2 px-4 hover:cursor-pointer"
                        id="product">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            {{-- <i class="fa fa-box relative top-0 text-sm leading-normal text-orange-500"></i> --}}
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">Produk</span>
                    </a>
                </li>
                <li>
                    <a href="/category"
                        class="{{ request()->is('category*') ? 'bg-blue-500/13 ease-nav-brand text-slate-700 transition-colors font-semibold dark:text-white dark:opacity-80' : 'text-sm transition-colors dark:text-white dark:opacity-80' }} ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap py-2 px-4 hover:cursor-pointer"
                        id="category">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            {{-- <i class="fa fa-box relative top-0 text-sm leading-normal text-orange-500"></i> --}}
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">Kategori</span>
                    </a>
                </li>
                <li>
                    <a href="/promo"
                        class="{{ request()->is('promo*') ? 'bg-blue-500/13 ease-nav-brand text-slate-700 transition-colors font-semibold dark:text-white dark:opacity-80' : 'text-sm transition-colors dark:text-white dark:opacity-80' }} ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap py-2 px-4 hover:cursor-pointer"
                        id="promo">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            {{-- <i class="fa fa-box relative top-0 text-sm leading-normal text-orange-500"></i> --}}
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">Promo</span>
                    </a>
                </li>
                <li>
                    <a href="/discount"
                        class="{{ request()->is('discount*') ? 'bg-blue-500/13 ease-nav-brand text-slate-700 transition-colors font-semibold dark:text-white dark:opacity-80' : 'text-sm transition-colors dark:text-white dark:opacity-80' }} ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap py-2 px-4 hover:cursor-pointer"
                        id="discount">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            {{-- <i class="fa fa-box relative top-0 text-sm leading-normal text-orange-500"></i> --}}
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">Diskon</span>
                    </a>
                </li>
                <li>
                    <a href="/saleType"
                        class="{{ request()->is('saleType*') ? 'bg-blue-500/13 ease-nav-brand text-slate-700 transition-colors font-semibold dark:text-white dark:opacity-80' : 'text-sm transition-colors dark:text-white dark:opacity-80' }} ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap py-2 px-4 hover:cursor-pointer"
                        id="saleType">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            {{-- <i class="fa fa-box relative top-0 text-sm leading-normal text-orange-500"></i> --}}
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">Jenis Penjualan</span>
                    </a>
                </li>
                <li>
                    <a href="/merk"
                        class="{{ request()->is('merk*') ? 'bg-blue-500/13 ease-nav-brand text-slate-700 transition-colors font-semibold dark:text-white dark:opacity-80' : 'text-sm transition-colors dark:text-white dark:opacity-80' }} ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap py-2 px-4 hover:cursor-pointer"
                        id="merk">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            {{-- <i class="fa fa-box relative top-0 text-sm leading-normal text-orange-500"></i> --}}
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">Merk</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="mt-0.5 w-full">
            <button type="button" aria-controls="dropdown-customers" data-collapse-toggle="dropdown-customers"
                class="{{ request()->is('customers*') ? 'bg-blue-500/13 ease-nav-brand text-slate-700 transition-colors font-semibold dark:text-white dark:opacity-80' : 'text-sm transition-colors dark:text-white dark:opacity-80' }} py-2.7 ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 hover:cursor-pointer">
                <div
                    class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                    <i class="fa fa-users relative top-0 text-sm leading-normal text-cyan-500"></i>
                </div>
                <span class="ease pointer-events-none ml-1 opacity-100 duration-300">Customers</span>
                <svg sidebar-toggle-item class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <ul id="dropdown-customers" class="hidden space-y-2 py-2">
                <li>
                    <a href="/product"
                        class="{{ request()->is('product*') ? 'bg-blue-500/13 ease-nav-brand text-slate-700 transition-colors font-semibold dark:text-white dark:opacity-80' : 'text-sm transition-colors dark:text-white dark:opacity-80' }} py-2.7 ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 hover:cursor-pointer"
                        id="product">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            {{-- <i class="fa fa-box relative top-0 text-sm leading-normal text-orange-500"></i> --}}
                        </div>
                        <span class="ease pointer-events-none ml-1 opacity-100 duration-300">Customer List</span>
                    </a>
                </li>
            </ul>
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
                href="./pages/sign-up.html">
                <div
                    class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                    <i class="fa fa-sign-out relative top-0 text-sm leading-normal text-red-600"></i>
                </div>
                <span class="ease pointer-events-none ml-1 opacity-100 duration-300">Keluar</span>
            </a>
        </li>
    </ul>
</div>
