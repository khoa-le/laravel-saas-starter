<x-app-layout>
    <x-slot name="header">
        <h1 class="text-3xl font-bold ">
            {{ __('Billing') }}
        </h1>
    </x-slot>
    <div class="max-w-screen-xl mx-auto pb-6 px-4 sm:px-6 lg:pb-16 lg:px-8">
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="divide-y divide-gray-200 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x">
                @include('theme::components.settings.aside-nav')

                <div id="switch-plans-modal" class="fixed w-full h-full inset-0 z-50">
                    <div class="fixed opacity-50 bg-black inset-0 w-full h-full"></div>
                    <form method="POST" action="{{ route('billing.switch_plan') }}"
                          class="absolute bg-white rounded-lg p-5" id="switch-plans">
                        @csrf
                        <div id="switch-plans-close"
                             class="absolute right-0 top-0 -mt-4 -mr-4 w-8 h-8 rounded-full shadow bg-white text-center flex justify-center align-center text-xl font-bold cursor-pointer">
                            &times;
                        </div>
                        <p class="text-sm text-gray-600 mb-4">Switch Plans</p>
                        @include('theme::components.plan.plans')
                        <button
                            class="bg-indigo-500 text-white text-sm font-medium px-6 py-2 rounded float-right uppercase cursor-pointer">
                            Switch Plans
                        </button>
                    </form>
                </div>
                <form id="billing-form" class="divide-y divide-gray-200 lg:col-span-9" enctype="multipart/form-data"
                      action="{{route('settings.billing.save')}}" method="POST">
                @csrf

                <!-- Profile section -->
                    <div class="py-6 px-4 sm:p-6 lg:pb-8">
                        <div>
                            <h2 class="text-lg leading-6 font-medium text-gray-900">Billing Settings</h2>
                        </div>
                        <x-auth-validation-errors class="mb-4" :errors="$errors"/>
                        <div class="mt-6 flex flex-col lg:flex-row">
                            <div class="flex-grow space-y-6">
                                @if(auth()->user()->subscribed('default'))
                                    <div class="py-8 px-16">
                                        <div class="flex">
                                            <img src="/img/plans/{{ auth()->user()->plan->name }}.png"
                                                 class="w-16 h-16 mr-3">
                                            <div>
                                                <span class="block">Subscribed to {{ ucfirst(auth()->user()->plan->name) }} Plan</span>
                                                <span
                                                    class="text-xs text-gray-700">{{ auth()->user()->plan->description }}</span>
                                            </div>
                                        </div>

                                        <div id="switch-plan-btn"
                                             class="bg-gray-300 text-gray-600 text-sm font-medium px-6 py-2 rounded uppercase cursor-pointer inline-block mt-4">
                                            Switch My Plan
                                        </div>
                                    </div>

                                    <hr class="border-gray-300">

                                    <div class="py-8 px-16">
                                        <div class="text-xs text-blue-600">Your default payment method ends
                                            in {{ auth()->user()->pm_last_four }}</div>
                                        <div class="text-xs text-gray-500">To update your default payment method, add a
                                            new card below:
                                        </div>
                                    </div>
                                    <hr class="border-gray-300">
                                @endif

                                @if(auth()->user()->onTrial())
                                    <div class="py-8 px-16">
                                        @include('theme::components.plan.trial_notification')
                                        <p class="text-sm text-gray-500 mt-2">Subscribe to a Plan Below:</p>
                                    </div>
                                    <hr class="border-gray-300">
                                @endif
                                <div>
                                    <label for="card-holder-name" class="block text-sm font-medium text-gray-700">
                                        {{ __('Name on Card') }}
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm flex">
                                        <input type="text" name="card-holder-name" id="card-holder-name"
                                               class="focus:ring-sky-500 focus:border-sky-500 flex-grow block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300">
                                    </div>
                                </div>
                                <div class="mt-6 grid grid-cols-12 gap-6">
                                    <div class="col-span-12">
                                        <label for="card-element"
                                               class="block text-sm font-medium text-gray-700">Credit Card</label>
                                        <div id="card-element"
                                             class="mt-2 border-2 border-gray-200 px-3 py-3 block w-full rounded-lg text-base text-gray-900 focus:outline-none focus:border-indigo-500"></div>
                                        <div id="card-errors"
                                             class="text-red-400 text-bold mt-2 text-sm font-medium"></div>
                                    </div>
                                </div>
                                @if(!auth()->user()->subscribed('default'))
                                    <div class="space-y-6 sm:space-y-5 divide-y divide-gray-200">
                                        <div class="pt-6 sm:pt-5">
                                            <div role="group" aria-labelledby="label-email">
                                                <div class="sm:grid sm:grid-cols-1 sm:gap-4 sm:items-baseline">
                                                    <div>
                                                        <div
                                                            class="text-base font-medium text-gray-900 sm:text-sm sm:text-gray-700"
                                                            id="label-email">
                                                            Select Your Plan
                                                        </div>
                                                    </div>

                                                    <hr class="border-gray-300">
                                                    <div class="py-8 px-16">
                                                        <p class="text-sm text-gray-600 mb-4">Select a Plan</p>
                                                        @include('theme::components.plan.plans')
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="pt-6 divide-y divide-gray-200">
                            <div class="mt-4 py-4 px-4 flex justify-end sm:px-6">
                                <button id="card-button" data-secret="{{$intent->client_secret}}"
                                        class="ml-5 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Update Payment Method
                                </button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripe = Stripe('{{env('STRIPE_KEY')}}');

        const elements = stripe.elements();
        const cardElement = elements.create('card');
        cardElement.mount('#card-element');
        const cardHolderName = document.getElementById('card-holder-name');
        const cardButton = document.getElementById('card-button');
        const clientSecret = cardButton.dataset.secret;
        const cardError = document.getElementById('card-errors');

        cardElement.addEventListener('change', function (event) {
            if (event.error) {
                cardError.textContent = event.error.message;
            } else {
                cardError.textContent = '';
            }
        });


        var form = document.getElementById('billing-form');
        form.addEventListener('submit', async (e) => {
            alert(cardHolderName.value);
            e.preventDefault();
            const {setupIntent, error} = await stripe.confirmCardSetup(
                clientSecret, {
                    payment_method: {
                        card: cardElement,
                        billing_details: {
                            name: cardHolderName.value,
                        },
                    },
                }
            );
            if (error) {
                // Display "error.message" to the user...
                cardError.textContent = error.message;
            } else {
                // The card has been verified successfully...
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'payment_method');
                hiddenInput.setAttribute('value', setupIntent.payment_method);
                form.appendChild(hiddenInput);
                // Submit the form
                form.submit();
            }
        });
    </script>
</x-app-layout>

