<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <div class="navbar bg-base-100 shadow-md fixed w-full z-50 top-0">
        <div class="flex-1">
            <a class="btn btn-ghost normal-case text-xl">MyCompany</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#projets">Projets</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
        <div class="flex-none">
            <button class="btn btn-primary">Login</button>
        </div>
    </div>
    {{-- <div class="navbar bg-base-100 shadow-md">
        <div class="flex-1">
            <a class="btn btn-ghost normal-case text-xl">MyCompany</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#projets">Projets</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </div> --}}

    <!-- Accueil Section -->
    <section id="accueil" class="hero min-h-screen bg-base-200">
        <div class="hero-content text-center">
            <div class="max-w-md">
                <h1 class="text-5xl font-bold">Welcome to MyCompany</h1>
                <p class="py-6">We provide the best solutions for your business. Our services are top-notch and
                    tailored to your needs.</p>
                <button class="btn btn-primary">Get Started</button>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-base-100">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold">Our Services</h2>
        </div>
        <div class="flex flex-wrap justify-center gap-6">
            <div class="card w-80 bg-base-200 shadow-md">
                <div class="card-body">
                    <h2 class="card-title">Service 1</h2>
                    <p>Detail about service 1.</p>
                </div>
            </div>
            <div class="card w-80 bg-base-200 shadow-md">
                <div class="card-body">
                    <h2 class="card-title">Service 2</h2>
                    <p>Detail about service 2.</p>
                </div>
            </div>
            <div class="card w-80 bg-base-200 shadow-md">
                <div class="card-body">
                    <h2 class="card-title">Service 3</h2>
                    <p>Detail about service 3.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projets Section -->
    <section id="projets" class="py-20 bg-base-200">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold">Our Projects</h2>
        </div>
        <div class="flex flex-wrap justify-center gap-6">
            <div class="card w-80 bg-base-100 shadow-md">
                <div class="card-body">
                    <h2 class="card-title">Project 1</h2>
                    <p>Detail about project 1.</p>
                </div>
            </div>
            <div class="card w-80 bg-base-100 shadow-md">
                <div class="card-body">
                    <h2 class="card-title">Project 2</h2>
                    <p>Detail about project 2.</p>
                </div>
            </div>
            <div class="card w-80 bg-base-100 shadow-md">
                <div class="card-body">
                    <h2 class="card-title">Project 3</h2>
                    <p>Detail about project 3.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="py-20 bg-base-100">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold">Our Team</h2>
        </div>
        <div class="flex flex-wrap justify-center gap-6">
            <div class="card w-80 bg-base-200 shadow-md">
                <div class="card-body items-center text-center">
                    <div class="avatar">
                        <div class="w-24 rounded-full">
                            <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                        </div>
                    </div>
                    <h2 class="card-title">Member 1</h2>
                    <p>Position</p>
                </div>
            </div>
            <div class="card w-80 bg-base-200 shadow-md">
                <div class="card-body items-center text-center">
                    <div class="avatar">
                        <div class="w-24 rounded-full">
                            <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                        </div>
                    </div>
                    <h2 class="card-title">Member 2</h2>
                    <p>Position</p>
                </div>
            </div>
            <div class="card w-80 bg-base-200 shadow-md">
                <div class="card-body items-center text-center">
                    <div class="avatar">
                        <div class="w-24 rounded-full">
                            <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                        </div>
                    </div>
                    <h2 class="card-title">Member 3</h2>
                    <p>Position</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-base-200">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold">Contact Us</h2>
        </div>
        <div class="flex justify-center">
            <div class="card w-full max-w-md bg-base-100 shadow-md">
                <div class="card-body">
                    <form>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Name</span>
                            </label>
                            <input type="text" placeholder="Your name" class="input input-bordered" />
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Email</span>
                            </label>
                            <input type="email" placeholder="Your email" class="input input-bordered" />
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Message</span>
                            </label>
                            <textarea placeholder="Your message" class="textarea textarea-bordered"></textarea>
                        </div>
                        <div class="form-control mt-6">
                            <button class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- <div class="bg-white">
        <header class="absolute inset-x-0 top-0 z-50">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                            alt="">
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Product</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Features</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Marketplace</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Company</a>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <a href="{{ route('login') }}" class="text-sm font-semibold leading-6 text-gray-900">Log in <span
                            aria-hidden="true">&rarr;</span></a>
                </div>
            </nav>
            <!-- Mobile menu, show/hide based on menu open state. -->
            <div class="lg:hidden" role="dialog" aria-modal="true">
                <!-- Background backdrop, show/hide based on slide-over state. -->
                <div class="fixed inset-0 z-50"></div>
                <div
                    class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                    <div class="flex items-center justify-between">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">Your Company</span>
                            <img class="h-8 w-auto"
                                src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                        </a>
                        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Product</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Features</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Marketplace</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Company</a>
                            </div>
                            <div class="py-6">
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log
                                    in</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="relative isolate px-6 pt-14 lg:px-8">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                    <div
                        class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                        Announcing our next round of funding. <a href="#"
                            class="font-semibold text-indigo-600"><span class="absolute inset-0"
                                aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
                    </div>
                </div>
                <div class="text-center">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Data to enrich your online
                        business</h1>
                    <p class="mt-6 text-lg leading-8 text-gray-600">Anim aute id magna aliqua ad ad non deserunt sunt.
                        Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="#"
                            class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                            started</a>
                        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span
                                aria-hidden="true">→</span></a>
                    </div>
                </div>
            </div>
            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
                aria-hidden="true">
                <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
        </div>
    </div> --}}

    @livewireScripts
    <!-- Footer -->
    <footer class="footer p-10 bg-base-200 text-base-content">
        <div>
            <span class="footer-title">Services</span>
            <a class="link link-hover">Branding</a>
            <a class="link link-hover">Design</a>
            <a class="link link-hover">Marketing</a>
            <a class="link link-hover">Advertisement</a>
        </div>
        <div>
            <span class="footer-title">Company</span>
            <a class="link link-hover">About us</a>
            <a class="link link-hover">Contact</a>
            <a class="link link-hover">Jobs</a>
            <a class="link link-hover">Press kit</a>
        </div>
        <div>
            <span class="footer-title">Legal</span>
            <a class="link link-hover">Terms of use</a>
            <a class="link link-hover">Privacy policy</a>
            <a class="link link-hover">Cookie policy</a>
        </div>
    </footer>
    <footer class="footer px-10 py-4 border-t bg-base-200 text-base-content border-base-300">
        <div class="items-center grid-flow-col">
            <svg width="36" height="36" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                fill="none" stroke="currentColor" class="inline-block fill-current">
                <path
                    d="M10 20v-6h4v6m1 0h2a2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2h-1V7a3 3 0 0 0-3-3h-2a3 3 0 0 0-3 3v2H7a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h2">
                </path>
            </svg>
            <p>MyCompany Ltd. <br />Providing reliable tech since 2024</p>
        </div>
        <div class="md:place-self-center md:justify-self-end">
            <div class="grid grid-flow-col gap-4">
                <a href="#" aria-label="Twitter">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M24 4.557a9.654 9.654 0 0 1-2.828.775 4.932 4.932 0 0 0 2.165-2.724 9.869 9.869 0 0 1-3.127 1.195 4.922 4.922 0 0 0-8.384 4.482A13.978 13.978 0 0 1 1.671 3.149 4.922 4.922 0 0 0 3.194 9.72 4.905 4.905 0 0 1 .964 8.953v.061a4.921 4.921 0 0 0 3.95 4.827 4.928 4.928 0 0 1-2.217.084 4.927 4.927 0 0 0 4.6 3.417 9.869 9.869 0 0 1-6.115 2.107c-.397 0-.788-.023-1.175-.068a13.978 13.978 0 0 0 7.557 2.212c9.054 0 14.01-7.497 14.01-13.986 0-.213 0-.425-.015-.637A9.925 9.925 0 0 0 24 4.557z" />
                    </svg>
                </a>
                <a href="#" aria-label="YouTube">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M19.615 3.184c-3.2-.3-12.03-.3-15.23 0C1.007 3.565 0 6.141 0 11.988s1.007 8.423 4.385 8.804c3.2.3 12.03.3 15.23 0C22.993 20.411 24 17.836 24 11.988s-1.007-8.423-4.385-8.804zM9.645 15.568V8.404l6.548 3.581-6.548 3.583z" />
                    </svg>
                </a>
                <a href="#" aria-label="Facebook">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M22.675 0h-21.35C.595 0 0 .594 0 1.326v21.348C0 23.406.595 24 1.325 24H12.82v-9.294H9.692V11.17h3.127V8.413c0-3.1 1.893-4.787 4.659-4.787 1.325 0 2.464.099 2.796.143v3.24h-1.918c-1.504 0-1.795.715-1.795 1.764v2.313h3.587l-.467 3.536h-3.12V24h6.116c.73 0 1.325-.594 1.325-1.326V1.326C24 .594 23.405 0 22.675 0z" />
                    </svg>
                </a>
            </div>
        </div>
    </footer>

</body>

</html>
