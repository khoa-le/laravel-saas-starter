<x-guest-layout>

    <header>
        @include("theme::components.frontpage.menu")
    </header>
    <div class="bg-white">
        <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-x-8 lg:items-start">
                <!-- Image gallery -->
                <div class="flex flex-col-reverse">
                    <!-- Image selector -->
                    <div class="hidden mt-6 w-full max-w-2xl mx-auto sm:block lg:max-w-none">
                        <div class="grid grid-cols-4 gap-6" aria-orientation="horizontal" role="tablist">
                            <button id="tabs-1-tab-1" class="relative h-24 bg-white rounded-md flex items-center justify-center text-sm font-medium uppercase text-gray-900 cursor-pointer hover:bg-gray-50 focus:outline-none focus:ring focus:ring-offset-4 focus:ring-opacity-50" aria-controls="tabs-1-panel-1" role="tab" type="button">
              <span class="sr-only">
                Angled view
              </span>
                                <span class="absolute inset-0 rounded-md overflow-hidden">
                <img src="{{asset($product->photo)}}" alt="" class="w-full h-full object-center object-cover">
              </span>
                                <!-- Selected: "ring-rose-500", Not Selected: "ring-transparent" -->
                                <span class="ring-transparent absolute inset-0 rounded-md ring-2 ring-offset-2 pointer-events-none" aria-hidden="true"></span>
                            </button>

                            <!-- More images... -->
                        </div>
                    </div>

                    <div class="w-full aspect-w-1 aspect-h-1">
                        <!-- Tab panel, show/hide based on tab state. -->
                        <div id="tabs-1-panel-1" aria-labelledby="tabs-1-tab-1" role="tabpanel" tabindex="0">
                            <img src="{{asset($product->photo)}}" alt="Angled front view with bag zipped and handles upright." class="w-full h-full object-center object-cover sm:rounded-lg">
                        </div>

                        <!-- More images... -->
                    </div>
                </div>

                <!-- Product info -->
                <div class="mt-10 px-4 sm:px-0 sm:mt-16 lg:mt-0">
                    <h1 class="text-3xl font-extrabold tracking-tight text-gray-900">{{$product->name}}</h1>

                    <div class="mt-3">
                        <h2 class="sr-only">Product information</h2>
                        <p class="text-3xl text-gray-900">${{$product->price}}</p>
                    </div>

                    <!-- Reviews -->
                    <div class="mt-3">
                        <h3 class="sr-only">Reviews</h3>
                        <div class="flex items-center">
                            <div class="flex items-center">
                                <!--
                                  Heroicon name: solid/star

                                  Active: "text-rose-500", Inactive: "text-gray-300"
                                -->
                                <svg class="h-5 w-5 flex-shrink-0 text-rose-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>

                                <!-- Heroicon name: solid/star -->
                                <svg class="h-5 w-5 flex-shrink-0 text-rose-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>

                                <!-- Heroicon name: solid/star -->
                                <svg class="h-5 w-5 flex-shrink-0 text-rose-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>

                                <!-- Heroicon name: solid/star -->
                                <svg class="h-5 w-5 flex-shrink-0 text-rose-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>

                                <!-- Heroicon name: solid/star -->
                                <svg class="h-5 w-5 flex-shrink-0 text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                            <p class="sr-only">4 out of 5 stars</p>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h3 class="sr-only">Description</h3>

                        <div class="text-base text-gray-700 space-y-6">
                            {!! $product->description !!}
                        </div>
                    </div>

                    <form class="mt-6">
                        <div class="mt-10 flex sm:flex-col1">
                            <button type="submit" class="max-w-xs flex-1 bg-rose-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-rose-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-rose-500 sm:w-full">Add to bag</button>

                            <button type="button" class="ml-4 py-3 px-3 rounded-md flex items-center justify-center text-gray-400 hover:bg-gray-100 hover:text-gray-500">
                                <!-- Heroicon name: outline/heart -->
                                <svg class="h-6 w-6 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                                <span class="sr-only">Add to favorites</span>
                            </button>
                        </div>
                    </form>

                    <section aria-labelledby="details-heading" class="mt-12">
                        <h2 id="details-heading" class="sr-only">Additional details</h2>

                        <div class="border-t divide-y divide-gray-200">
                            <div>
                                <h3>
                                    <!-- Expand/collapse question button -->
                                    <button type="button" class="group relative w-full py-6 flex justify-between items-center text-left" aria-controls="disclosure-1" aria-expanded="false">
                                        <!-- Open: "text-rose-600", Closed: "text-gray-900" -->
                                        <span class="text-gray-900 text-sm font-medium">
                    Features
                  </span>
                                        <span class="ml-6 flex items-center">
                    <!--
                      Heroicon name: outline/plus-sm

                      Open: "hidden", Closed: "block"
                    -->
                    <svg class="block h-6 w-6 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                                            <!--
                                              Heroicon name: outline/minus-sm

                                              Open: "block", Closed: "hidden"
                                            -->
                    <svg class="hidden h-6 w-6 text-rose-400 group-hover:text-rose-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6" />
                    </svg>
                  </span>
                                    </button>
                                </h3>
                                <div class="pb-6 prose prose-sm" id="disclosure-1">
                                    <ul role="list">
                                        <li>Multiple strap configurations</li>

                                        <li>Spacious interior with top zip</li>

                                        <li>Leather handle and tabs</li>

                                        <li>Interior dividers</li>

                                        <li>Stainless strap loops</li>

                                        <li>Double stitched construction</li>

                                        <li>Water-resistant</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- More sections... -->
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>

