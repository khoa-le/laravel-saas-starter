<div class="relative bg-white" x-data="Components.popover({ open: false, focus: true })" x-init="init()"
     @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
    <div
        class="flex justify-between items-center max-w-7xl mx-auto px-4 py-6 sm:px-6 md:justify-start md:space-x-10 lg:px-8">
        <div class="flex justify-start lg:w-0 lg:flex-1">
            <a href="{{route("frontpage.home")}}">
                <span class="sr-only">Workflow</span>
                <img class="h-8 w-auto sm:h-10"
                     src="https://tailwindui.com/img/logos/workflow-mark.svg?color=rose&shade=500" alt="">
            </a>
        </div>
        <div class="-mr-2 -my-2 md:hidden">
            <button type="button"
                    class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                    @click="toggle" @mousedown="if (open) $event.preventDefault()" aria-expanded="false"
                    :aria-expanded="open.toString()">
                <span class="sr-only">Open menu</span>
                <svg class="h-6 w-6" x-description="Heroicon name: outline/menu"
                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                     aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        <nav class="hidden md:flex space-x-10" x-data="Components.popoverGroup()" x-init="init()">
            <a href="{{route('frontpage.home')}}"
               class="@if(request()->route()->getName() == 'frontpage.home')) {{"text-gray-700"}} @endif text-base font-medium text-gray-400 hover:text-gray-900">
                Home
            </a>
            <a href="{{route('frontpage.products')}}"
               class="@if(Request::is('products')) {{"text-gray-700"}} @endif text-base font-medium text-gray-400 hover:text-gray-900">
                Products
            </a>
            <a href="{{route('frontpage.contact')}}"
               @if(Request::is('contact')) {{"text-gray-700"}} @endif class="text-base font-medium text-gray-500 hover:text-gray-900">
                Contact
            </a>
        </nav>
        <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
            <a href="{{route("login")}}" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
                Sign in
            </a>
            <a href="{{route("register")}}"
               class="ml-8 whitespace-nowrap inline-flex items-center justify-center bg-rose-500 shadow hover:bg-rose-600  bg-origin-border px-4 py-2 border border-transparent rounded-md text-base font-medium text-white ">
                Sign up
            </a>
        </div>
    </div>


    <div x-show="open" x-transition:enter="duration-200 ease-out" x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in"
         x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
         x-description="Mobile menu, show/hide based on mobile menu state."
         class="absolute z-30 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden" x-ref="panel"
         @click.away="open = false" style="display: none;">
        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
            <div class="pt-5 pb-6 px-5">
                <div class="flex items-center justify-between">
                    <div>
                        <img class="h-8 w-auto"
                             src="https://tailwindui.com/img/logos/workflow-mark-purple-600-to-indigo-600.svg"
                             alt="Workflow">
                    </div>
                    <div class="-mr-2">
                        <button type="button"
                                class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                                @click="toggle">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" x-description="Heroicon name: outline/x"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="mt-6">
                    <nav class="grid grid-cols-1 gap-7">

                        <a href="#" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                            <div
                                class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-gradient-to-r from-purple-600 to-indigo-600 text-white">
                                <svg class="h-6 w-6" x-description="Heroicon name: outline/inbox"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                                </svg>
                            </div>
                            <div class="ml-4 text-base font-medium text-gray-900">
                                Inbox
                            </div>
                        </a>

                        <a href="#" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                            <div
                                class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-gradient-to-r from-purple-600 to-indigo-600 text-white">
                                <svg class="h-6 w-6" x-description="Heroicon name: outline/annotation"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                </svg>
                            </div>
                            <div class="ml-4 text-base font-medium text-gray-900">
                                Messaging
                            </div>
                        </a>

                        <a href="#" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                            <div
                                class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-gradient-to-r from-purple-600 to-indigo-600 text-white">
                                <svg class="h-6 w-6" x-description="Heroicon name: outline/chat-alt-2"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                                </svg>
                            </div>
                            <div class="ml-4 text-base font-medium text-gray-900">
                                Live Chat
                            </div>
                        </a>

                        <a href="#" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                            <div
                                class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-gradient-to-r from-purple-600 to-indigo-600 text-white">
                                <svg class="h-6 w-6" x-description="Heroicon name: outline/question-mark-circle"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="ml-4 text-base font-medium text-gray-900">
                                Knowledge Base
                            </div>
                        </a>

                    </nav>
                </div>
            </div>
            <div class="py-6 px-5">
                <div class="grid grid-cols-2 gap-4">
                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                        Pricing
                    </a>
                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                        Partners
                    </a>
                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                        Company
                    </a>
                </div>
                <div class="mt-6">
                    <a href="#"
                       class="w-full flex items-center justify-center bg-gradient-to-r from-purple-600 to-indigo-600 bg-origin-border px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white hover:from-purple-700 hover:to-indigo-700">
                        Sign up
                    </a>
                    <p class="mt-6 text-center text-base font-medium text-gray-500">
                        Existing customer?
                        <a href="#" class="text-gray-900">
                            Sign in
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
