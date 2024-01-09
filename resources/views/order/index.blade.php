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
                        @foreach($orders as $order)
                            <div class="group relative">
                                <div>
                                    <x-label for="name" value="{{ __('Order ID') }}"/>
                                    <p><b>{{ $order->order_id }}</b></p>
                                </div>
                                <div>
                                    <x-label for="name" value="{{ __('Name') }}"/>
                                    <p><b>{{ $order->name }}</b></p>
                                </div>
                                <div>
                                    <x-label for="email" value="{{ __('Email') }}"/>
                                    <p><b>{{ $order->email }}</b></p>
                                </div>
                                <div>
                                    <x-label for="phone" value="{{ __('Phone') }}"/>
                                    <p><b>{{ $order->expected_delivery_date }}</b></p>
                                </div>
                                <div>
                                    <x-label for="phone" value="{{ __('Action') }}"/>
                                    <a href="{{ route('order-confirm',$order) }}"
                                       style="background-color: gray; color: white;"> SHow Order Detail</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
