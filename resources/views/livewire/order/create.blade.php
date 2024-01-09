<div>
    <div class="">
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
                </div>
                <div>
                    <x-label for="name" value="{{ __('Name') }}"/>
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" wire:model="name" autofocus
                             autocomplete="name"/>
                    <x-input-error for="name" class="mt-1"/>
                </div>
                <div>
                    <x-label for="email" value="{{ __('Email') }}"/>
                    <x-input id="email" class="block mt-1 w-full" type="text" wire:model="email" autofocus
                             autocomplete="email"/>
                    <x-input-error for="email" class="mt-1"/>
                </div>
                <div>
                    <x-label for="name" value="{{ __('Address') }}"/>
                    <textarea cols="8" rows="5" wire:model="address" placeholder="Address"></textarea>
                    <x-input-error for="address" class="mt-1"/>
                </div>

                <div>
                    <x-label for="phone" value="{{ __('Phone') }}"/>
                    <x-input id="phone" class="block mt-1 w-full" type="text" wire:model="phone" autofocus
                             autocomplete="Phone"/>
                    <x-input-error for="phone" class="mt-1"/>
                </div>
                <div>

                <button style="background-color: gray; color: white; margin-top: 10px;" wire:click="order">Order Now</button>
                </div>
            </div>
        </div>
    </div>
</div>
