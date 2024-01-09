<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Order Now') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mx-auto my-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                    <div class="mt-6 grid grid-cols-4 gap-x-6 gap-y-18 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                        <div class="group relative">
                            <div
                                class="aspect-h-1 aspect-w-1 w-2 overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                                <img style="width: 100px;"
                                     src="{{ asset($product->image) }}" alt="Front of men&#039;s Basic Tee in black."
                                     class="h-2 w-2 object-cover object-center lg:h-full lg:w-full">
                            </div>
                            <div class="mt-4 flex justify-between">
                                <div>
                                    <h3 class="text-sm text-gray-700">
                                        <a href="{{ route('buy-now',$product ) }}">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            {{ $product->name }}
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-500">{{ $product->description }}</p>
                                </div>
                                <p class="text-sm font-medium text-gray-900">{{ $product->price }}</p>
                            </div>
                            <div>
                                <x-label for="name" value="{{ __('Order ID') }}"/>
                                <p><b>{{ $order->order_id }}</b></p>
                            </div>                            <div>
                                <x-label for="name" value="{{ __('Name') }}"/>
                                <p><b>{{ $order->name }}</b></p>
                            </div>
                            <div>
                                <x-label for="email" value="{{ __('Email') }}"/>
                                <p><b>{{ $order->email }}</b></p>
                            </div>
                            <div>
                                <x-label for="name" value="{{ __('Address') }}"/>
                                <p><b>{{ $order->address }}</b></p>
                            </div>

                            <div>
                                <x-label for="phone" value="{{ __('Phone') }}"/>
                                <p><b>{{ $order->expected_delivery_date }}</b></p>
                            </div>
                            <div>
                                <x-label for="phone" value="{{ __('Payment Mode') }}"/>
                                <p><b>{{ $order->payment_mode }}</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
