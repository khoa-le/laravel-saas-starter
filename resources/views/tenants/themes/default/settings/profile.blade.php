<x-app-layout>
    <x-slot name="header">
        <h1 class="text-3xl font-bold ">
            {{ __('Profile') }}
        </h1>
    </x-slot>
    <div class="max-w-screen-xl mx-auto pb-6 px-4 sm:px-6 lg:pb-16 lg:px-8">
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="divide-y divide-gray-200 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x">
                @include('theme::components.settings.aside-nav')
                <form class="divide-y divide-gray-200 lg:col-span-9" enctype="multipart/form-data"
                      action="{{route('settings.profile.save')}}" method="POST">
                @csrf
                <!-- Profile section -->
                    <div class="py-6 px-4 sm:p-6 lg:pb-8">
                        <div>
                            <h2 class="text-lg leading-6 font-medium text-gray-900">Profile</h2>
                        </div>
                        <x-auth-validation-errors class="mb-4" :errors="$errors"/>
                        <div class="mt-6 flex flex-col lg:flex-row">
                            <div class="flex-grow space-y-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700">
                                        {{ __('Name') }}
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm flex">
                                        <input type="text" name="name" id="name" autocomplete="name"
                                               class="focus:ring-sky-500 focus:border-sky-500 flex-grow block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300"
                                               value="{{$user->name}}">
                                    </div>
                                </div>
                                <div class="mt-6 grid grid-cols-12 gap-6">
                                    <div class="col-span-12">
                                        <label for="url" class="block text-sm font-medium text-gray-700">URL</label>
                                        <input type="text" name="url" id="url"
                                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-sky-500 focus:border-sky-500 sm:text-sm"
                                               value="{{$user->url}}">
                                    </div>

                                    <div class="col-span-12 sm:col-span-6">
                                        <label for="company"
                                               class="block text-sm font-medium text-gray-700">Company</label>
                                        <input type="text" name="company" id="company" autocomplete="organization"
                                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-sky-500 focus:border-sky-500 sm:text-sm"
                                               value="{{$user->company}}"
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6 flex-grow lg:mt-0 lg:ml-6 lg:flex-grow-0 lg:flex-shrink-0">
                                <p class="text-sm font-medium text-gray-700" aria-hidden="true">
                                    Photo
                                </p>

                                <div class="hidden relative rounded-full overflow-hidden lg:block">
                                    <img class="relative rounded-full w-40 h-40"
                                         src="{{asset('storage/images/user/'.$user->photo)}}"
                                         alt="">
                                    <label for="desktop-user-photo"
                                           class="absolute inset-0 w-full h-full bg-black bg-opacity-75 flex items-center justify-center text-sm font-medium text-white opacity-0 hover:opacity-100 focus-within:opacity-100">
                                        <span>Change</span>
                                        <span class="sr-only"> user photo</span>
                                        <input type="file" id="desktop-user-photo" name="photo"
                                               class="absolute inset-0 w-full h-full opacity-0 cursor-pointer border-gray-300 rounded-md">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6 divide-y divide-gray-200">
                        <div class="mt-4 py-4 px-4 flex justify-end sm:px-6">
                            <button type="button"
                                    class="bg-white border border-gray-300 rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                                Cancel
                            </button>
                            <button type="submit"
                                    class="ml-5 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
