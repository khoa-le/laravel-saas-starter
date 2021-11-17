<x-app-layout>
    <x-slot name="header">
        <h1 class="text-3xl font-bold ">
            {{ __('Security Settings') }}
        </h1>
    </x-slot>
    <div class="max-w-screen-xl mx-auto pb-6 px-4 sm:px-6 lg:pb-16 lg:px-8">
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="divide-y divide-gray-200 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x">
                @include('components.settings.aside-nav')

                <form class="divide-y divide-gray-200 lg:col-span-9" action="{{ route('settings.security.save') }}"
                      method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="py-6 px-4 sm:p-6 lg:pb-8">
                        <div>
                            <h2 class="text-lg leading-6 font-medium text-gray-900">{{ __('Security Settings') }}</h2>
                        </div>
                        <x-auth-validation-errors class="mb-4" :errors="$errors"/>
                        <div class="mt-6 flex flex-col lg:flex-row">
                            <div class="flex-grow space-y-6">
                                <div class="col-span-12 sm:col-span-6">
                                    <label for="password" class="text-sm text-gray-600">Password</label>
                                    <input
                                        class="mt-2 border-2 border-gray-200 px-3 py-2 block w-full rounded-lg text-base text-gray-900 focus:outline-none focus:border-indigo-500"
                                        type="password" value="" name="password">
                                </div>
                                <div class="col-span-12 sm:col-span-6">
                                    <label for="password_confirmation" class="text-sm text-gray-600">Confirm Password</label>
                                    <input
                                        class="mt-2 border-2 border-gray-200 px-3 py-2 block w-full rounded-lg text-base text-gray-900 focus:outline-none focus:border-indigo-500"
                                        type="password" value="" name="password_confirmation">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-6 divide-y divide-gray-200">
                        <div class="mt-4 py-4 px-4 flex justify-end sm:px-6">
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
