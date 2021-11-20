<x-guest-layout>
    <!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  const colors = require('tailwindcss/colors')

  module.exports = {
    // ...
    theme: {
      extend: {
        colors: {
          rose: colors.rose,
        },
      },
    },
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
--> <header>
        @include('theme::components.frontpage.menu')
    </header>
    <div class="bg-white">
        <main>
            <div class="bg-white">
                <div class="pt-32 overflow-hidden sm:pt-14">
                    <div class="bg-gray-800">
                        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                            <div class="relative pt-48 pb-16 sm:pb-24">
                                <div>
                                    <h2 id="sale-heading" class="text-4xl font-extrabold tracking-tight text-white md:text-5xl">
                                        Final Stock.
                                        <br>
                                        Up to 50% off.
                                    </h2>
                                    <div class="mt-6 text-base">
                                        <a href="{{route("frontpage.products")}}" class="ml-8 whitespace-nowrap inline-flex items-center justify-center bg-rose-500 shadow hover:bg-rose-600  bg-origin-border px-4 py-2 border border-transparent rounded-md text-base font-medium text-white  font-semibold text-white">Shop the sale<span aria-hidden="true"> &rarr;</span></a>
                                    </div>
                                </div>

                                <div class="absolute -top-32 left-1/2 transform -translate-x-1/2 sm:top-6 sm:translate-x-0">
                                    <div class="ml-24 flex space-x-6 min-w-max sm:ml-3 lg:space-x-8">
                                        <div class="flex space-x-6 sm:flex-col sm:space-x-0 sm:space-y-6 lg:space-y-8">
                                            <div class="flex-shrink-0">
                                                <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-01.jpg" alt="">
                                            </div>

                                            <div class="mt-6 flex-shrink-0 sm:mt-0">
                                                <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-02.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="flex space-x-6 sm:-mt-20 sm:flex-col sm:space-x-0 sm:space-y-6 lg:space-y-8">
                                            <div class="flex-shrink-0">
                                                <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="https://tailwindui.com/img/ecommerce-images/home-page-03-favorite-01.jpg" alt="">
                                            </div>

                                            <div class="mt-6 flex-shrink-0 sm:mt-0">
                                                <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="https://tailwindui.com/img/ecommerce-images/home-page-03-favorite-02.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="flex space-x-6 sm:flex-col sm:space-x-0 sm:space-y-6 lg:space-y-8">
                                            <div class="flex-shrink-0">
                                                <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-01.jpg" alt="">
                                            </div>

                                            <div class="mt-6 flex-shrink-0 sm:mt-0">
                                                <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-02.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50">
                <div class="max-w-2xl mx-auto px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:px-8">
                    <!-- Details section -->
                    <section aria-labelledby="details-heading">
                        <div class="flex flex-col items-center text-center">
                            <h2 id="details-heading" class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">The Fine Details</h2>
                            <p class="mt-3 max-w-3xl text-lg text-gray-600">Our patented padded snack sleeve construction protects your favorite treats from getting smooshed during all-day adventures, long shifts at work, and tough travel schedules.</p>
                        </div>

                        <div class="mt-16 grid grid-cols-1 gap-y-16 lg:grid-cols-2 lg:gap-x-8">
                            <div>
                                <div class="w-full aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
                                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-detail-product-shot-01.jpg" alt="Drawstring top with elastic loop closure and textured interior padding." class="w-full h-full object-center object-cover">
                                </div>
                                <p class="mt-8 text-base text-gray-500">The 20L model has enough space for 370 candy bars, 6 cylinders of chips, 1220 standard gumballs, or any combination of on-the-go treats that your heart desires. Yes, we did the math.</p>
                                <br>
                                <a href="{{route("frontpage.products")}}" class=" whitespace-nowrap inline-flex items-center justify-center bg-rose-500 shadow hover:bg-rose-600  bg-origin-border px-4 py-2 border border-transparent rounded-md text-base font-medium text-white  font-semibold text-white">Shop the sale<span aria-hidden="true"> →</span></a>
                            </div>
                            <div>
                                <div class="w-full aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
                                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-detail-product-shot-02.jpg" alt="Front zipper pouch with included key ring." class="w-full h-full object-center object-cover">
                                </div>
                                <p class="mt-8 text-base text-gray-500">Up your snack organization game with multiple compartment options. The quick-access stash pouch is ready for even the most unexpected snack attacks and sharing needs.</p>
                                <br>
                                <a href="{{route("frontpage.products")}}" class=" whitespace-nowrap inline-flex items-center justify-center bg-rose-500 shadow hover:bg-rose-600  bg-origin-border px-4 py-2 border border-transparent rounded-md text-base font-medium text-white  font-semibold text-white">Shop the sale<span aria-hidden="true"> →</span></a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <!-- Testimonial/stats section -->
            <div class="relative mt-20">
                <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:gap-24 lg:items-start">
                    <div class="relative sm:py-16 lg:py-0">
                        <div aria-hidden="true" class="hidden sm:block lg:absolute lg:inset-y-0 lg:right-0 lg:w-screen">
                            <div class="absolute inset-y-0 right-1/2 w-full bg-gray-50 rounded-r-3xl lg:right-72"></div>
                            <svg class="absolute top-8 left-1/2 -ml-3 lg:-right-8 lg:left-auto lg:top-12" width="404" height="392" fill="none" viewBox="0 0 404 392">
                                <defs>
                                    <pattern id="02f20b47-fd69-4224-a62a-4c9de5c763f7" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                                    </pattern>
                                </defs>
                                <rect width="404" height="392" fill="url(#02f20b47-fd69-4224-a62a-4c9de5c763f7)" />
                            </svg>
                        </div>
                        <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0 lg:max-w-none lg:py-20">
                            <!-- Testimonial card-->
                            <div class="relative pt-64 pb-10 rounded-2xl shadow-xl overflow-hidden">
                                <img class="absolute inset-0 h-full w-full object-cover" src="https://images.unsplash.com/photo-1521510895919-46920266ddb3?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&fp-x=0.5&fp-y=0.6&fp-z=3&width=1440&height=1440&sat=-100" alt="">
                                <div class="absolute inset-0 bg-rose-500 mix-blend-multiply"></div>
                                <div class="absolute inset-0 bg-gradient-to-t from-rose-600 via-rose-600 opacity-90"></div>
                                <div class="relative px-8">
                                    <div>
                                        <img class="h-12" src="https://tailwindui.com/img/logos/workcation.svg?color=white" alt="Workcation">
                                    </div>
                                    <blockquote class="mt-8">
                                        <div class="relative text-lg font-medium text-white md:flex-grow">
                                            <svg class="absolute top-0 left-0 transform -translate-x-3 -translate-y-2 h-8 w-8 text-rose-400" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                                <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                                            </svg>
                                            <p class="relative">
                                                Tincidunt integer commodo, cursus etiam aliquam neque, et. Consectetur pretium in volutpat, diam. Montes, magna cursus nulla feugiat dignissim id lobortis amet.
                                            </p>
                                        </div>

                                        <footer class="mt-4">
                                            <p class="text-base font-semibold text-rose-200">Sarah Williams, CEO at Workcation</p>
                                        </footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0">
                        <!-- Content area -->
                        <div class="pt-12 sm:pt-16 lg:pt-20">
                            <h2 class="text-3xl text-gray-900 font-extrabold tracking-tight sm:text-4xl">
                                On a mission to empower teams
                            </h2>
                            <div class="mt-6 text-gray-500 space-y-6">
                                <p class="text-lg">
                                    Sagittis scelerisque nulla cursus in enim consectetur quam. Dictum urna sed consectetur neque tristique pellentesque. Blandit amet, sed aenean erat arcu morbi. Cursus faucibus nunc nisl netus morbi vel porttitor vitae ut. Amet vitae fames senectus vitae.
                                </p>
                                <p class="text-base leading-7">
                                    Sollicitudin tristique eros erat odio sed vitae, consequat turpis elementum. Lorem nibh vel, eget pretium arcu vitae. Eros eu viverra donec ut volutpat donec laoreet quam urna. Sollicitudin tristique eros erat odio sed vitae, consequat turpis elementum. Lorem nibh vel, eget pretium arcu vitae. Eros eu viverra donec ut volutpat donec laoreet quam urna.
                                </p>
                                <p class="text-base leading-7">
                                    Rhoncus nisl, libero egestas diam fermentum dui. At quis tincidunt vel ultricies. Vulputate aliquet velit faucibus semper. Pellentesque in venenatis vestibulum consectetur nibh id. In id ut tempus egestas. Enim sit aliquam nec, a. Morbi enim fermentum lacus in. Viverra.
                                </p>
                            </div>
                        </div>

                        <!-- Stats section -->
                        <div class="mt-10">
                            <dl class="grid grid-cols-2 gap-x-4 gap-y-8">
                                <div class="border-t-2 border-gray-100 pt-6">
                                    <dt class="text-base font-medium text-gray-500">Founded</dt>
                                    <dd class="text-3xl font-extrabold tracking-tight text-gray-900">2021</dd>
                                </div>

                                <div class="border-t-2 border-gray-100 pt-6">
                                    <dt class="text-base font-medium text-gray-500">Employees</dt>
                                    <dd class="text-3xl font-extrabold tracking-tight text-gray-900">5</dd>
                                </div>

                                <div class="border-t-2 border-gray-100 pt-6">
                                    <dt class="text-base font-medium text-gray-500">Beta Users</dt>
                                    <dd class="text-3xl font-extrabold tracking-tight text-gray-900">521</dd>
                                </div>

                                <div class="border-t-2 border-gray-100 pt-6">
                                    <dt class="text-base font-medium text-gray-500">Raised</dt>
                                    <dd class="text-3xl font-extrabold tracking-tight text-gray-900">$25M</dd>
                                </div>
                            </dl>
                            <div class="mt-10">
                                <a href="#" class="text-base font-medium text-rose-500">
                                    Learn more about how we're changing the world&nbsp&rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Logo cloud section -->
            <div class="mt-32">
                <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
                    <div class="lg:grid lg:grid-cols-2 lg:gap-24 lg:items-center">
                        <div>
                            <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">
                                Backed by world-renowned investors
                            </h2>
                            <p class="mt-6 max-w-3xl text-lg leading-7 text-gray-500">
                                Sagittis scelerisque nulla cursus in enim consectetur quam. Dictum urna sed consectetur neque tristique pellentesque. Blandit amet, sed aenean erat arcu morbi. Cursus faucibus nunc nisl netus morbi vel porttitor vitae ut. Amet vitae fames senectus vitae.
                            </p>
                            <div class="mt-6">
                                <a href="#" class="text-base font-medium text-rose-500">
                                    Meet our investors and advisors&nbsp&rarr;
                                </a>
                            </div>
                        </div>
                        <div class="mt-12 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-0 lg:grid-cols-2">
                            <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                                <img class="max-h-12" src="https://tailwindui.com/img/logos/transistor-logo-gray-400.svg" alt="Transistor">
                            </div>

                            <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                                <img class="max-h-12" src="https://tailwindui.com/img/logos/mirage-logo-gray-400.svg" alt="Mirage">
                            </div>

                            <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                                <img class="max-h-12" src="https://tailwindui.com/img/logos/tuple-logo-gray-400.svg" alt="Tuple">
                            </div>

                            <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                                <img class="max-h-12" src="https://tailwindui.com/img/logos/laravel-logo-gray-400.svg" alt="Laravel">
                            </div>

                            <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                                <img class="max-h-12" src="https://tailwindui.com/img/logos/statickit-logo-gray-400.svg" alt="StaticKit">
                            </div>

                            <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                                <img class="max-h-12" src="https://tailwindui.com/img/logos/workcation-logo-gray-400.svg" alt="Workcation">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA section -->
            <div class="relative mt-24 sm:mt-32 sm:py-16">
                <div aria-hidden="true" class="hidden sm:block">
                    <div class="absolute inset-y-0 left-0 w-1/2 bg-gray-50 rounded-r-3xl"></div>
                    <svg class="absolute top-8 left-1/2 -ml-3" width="404" height="392" fill="none" viewBox="0 0 404 392">
                        <defs>
                            <pattern id="8228f071-bcee-4ec8-905a-2a059a2cc4fb" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="404" height="392" fill="url(#8228f071-bcee-4ec8-905a-2a059a2cc4fb)" />
                    </svg>
                </div>
                <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
                    <div class="relative rounded-2xl px-6 py-10 bg-rose-500 overflow-hidden shadow-xl sm:px-12 sm:py-20">
                        <div aria-hidden="true" class="absolute inset-0 -mt-72 sm:-mt-32 md:mt-0">
                            <svg class="absolute inset-0 h-full w-full" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 1463 360">
                                <path class="text-rose-400 text-opacity-40" fill="currentColor" d="M-82.673 72l1761.849 472.086-134.327 501.315-1761.85-472.086z" />
                                <path class="text-rose-600 text-opacity-40" fill="currentColor" d="M-217.088 544.086L1544.761 72l134.327 501.316-1761.849 472.086z" />
                            </svg>
                        </div>
                        <div class="relative">
                            <div class="sm:text-center">
                                <h2 class="text-3xl font-extrabold text-white tracking-tight sm:text-4xl">
                                    Get notified when we&rsquo;re launching.
                                </h2>
                                <p class="mt-6 mx-auto max-w-2xl text-lg text-rose-100">
                                    Sagittis scelerisque nulla cursus in enim consectetur quam. Dictum urna sed consectetur neque tristique pellentesque.
                                </p>
                            </div>
                            <form action="#" class="mt-12 sm:mx-auto sm:max-w-lg sm:flex">
                                <div class="min-w-0 flex-1">
                                    <label for="cta-email" class="sr-only">Email address</label>
                                    <input id="cta-email" type="email" class="block w-full border border-transparent rounded-md px-5 py-3 text-base text-gray-900 placeholder-gray-500 shadow-sm focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-rose-500" placeholder="Enter your email">
                                </div>
                                <div class="mt-4 sm:mt-0 sm:ml-3">
                                    <button type="submit" class="block w-full rounded-md border border-transparent px-5 py-3 bg-gray-900 text-base font-medium text-white shadow hover:bg-black focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-rose-500 sm:px-10">Notify me</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>


    </div>

</x-guest-layout>

