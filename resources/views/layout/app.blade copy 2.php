<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>

    <!-- Hero Section -->
    <div class="bg-white">
    <header class="absolute inset-x-0 top-0 z-50">
        <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="h-8 w-auto" src="https://tailwindui.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="">
            </a>
        </div>
        <div class="flex lg:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Open main menu</span>
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="#" class="text-sm/6 font-semibold text-gray-900">Produk</a>
            <a href="#" class="text-sm/6 font-semibold text-gray-900">Syarikat</a>
            <a href="#" class="text-sm/6 font-semibold text-gray-900">Marketplace</a>
            <a href="#" class="text-sm/6 font-semibold text-gray-900">Company</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="#" class="text-sm/6 font-semibold text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>
        </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div class="lg:hidden" role="dialog" aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-50"></div>
        <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-8 w-auto" src="https://tailwindui.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="">
            </a>
            <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Close menu</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
            </div>
            <div class="mt-6 flow-root">
            <div class="-my-6 divide-y divide-gray-500/10">
                <div class="space-y-2 py-6">
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Produk</a>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Syarikat</a>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Marketplace</a>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Company</a>
                </div>
                <div class="py-6">
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log in</a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </header>

    <div class="relative isolate px-6 pt-14 lg:px-8">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
        <div class="text-center">
            <h1 class="text-balance text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">Keropok rangup untuk perut Anda</h1>
            <p class="mt-8 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat.</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
            <a href="#" class="text-sm/6 font-semibold text-gray-900">Learn more <span aria-hidden="true">→</span></a>
            </div>
        </div>
        </div>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
        <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
    </div>
    </div>

    <!-- Product -->
    <div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <h2 class="text-2xl font-bold tracking-tight text-gray-900">Customers also purchased</h2>

        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        <div class="group relative">
            <img src="https://tailwindui.com/plus-assets/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80">
            <div class="mt-4 flex justify-between">
            <div>
                <h3 class="text-sm text-gray-700">
                <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    Basic Tee
                </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">Black</p>
            </div>
            <p class="text-sm font-medium text-gray-900">$35</p>
            </div>
        </div>
        <div class="group relative">
            <img src="https://tailwindui.com/plus-assets/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80">
            <div class="mt-4 flex justify-between">
            <div>
                <h3 class="text-sm text-gray-700">
                <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    Basic Tee
                </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">Black</p>
            </div>
            <p class="text-sm font-medium text-gray-900">$35</p>
            </div>
        </div>
        <div class="group relative">
            <img src="https://tailwindui.com/plus-assets/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80">
            <div class="mt-4 flex justify-between">
            <div>
                <h3 class="text-sm text-gray-700">
                <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    Basic Tee
                </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">Black</p>
            </div>
            <p class="text-sm font-medium text-gray-900">$35</p>
            </div>
        </div>
        <div class="group relative">
            <img src="https://tailwindui.com/plus-assets/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80">
            <div class="mt-4 flex justify-between">
            <div>
                <h3 class="text-sm text-gray-700">
                <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    Basic Tee
                </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">Black</p>
            </div>
            <p class="text-sm font-medium text-gray-900">$35</p>
            </div>
        </div>
        <!-- More products... -->
        </div>
    </div>
    </div>

    <!-- Feedback -->
    <section class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:px-8">
    <div class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),white)] opacity-20"></div>
    <div class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center"></div>
    <div class="mx-auto max-w-2xl lg:max-w-4xl">
        <img class="mx-auto h-12" src="https://tailwindui.com/plus-assets/img/logos/workcation-logo-indigo-600.svg" alt="">
        <figure class="mt-10">
        <blockquote class="text-center text-xl/8 font-semibold text-gray-900 sm:text-2xl/9">
            <p>“Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita voluptas culpa sapiente alias molestiae. Numquam corrupti in laborum sed rerum et corporis.”</p>
        </blockquote>
        <figcaption class="mt-10">
            <img class="mx-auto size-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            <div class="mt-4 flex items-center justify-center space-x-3 text-base">
            <div class="font-semibold text-gray-900">Judith Black</div>
            <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-gray-900">
                <circle cx="1" cy="1" r="1" />
            </svg>
            <div class="text-gray-600">CEO of Workcation</div>
            </div>
        </figcaption>
        </figure>
    </div>
    </section>


    <!-- Footer -->
    <footer class="bg-white rounded-lg shadow-sm dark:bg-white-900 m-4">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="#" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">About</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#" class="hover:underline">Flowbite™</a>. All Rights Reserved.</span>
        </div>
    </footer>


</body>
</html>