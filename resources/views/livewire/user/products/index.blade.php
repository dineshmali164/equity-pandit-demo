<div>
    @forelse($products as $product)
        <div class="bg-white">
            <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">

                <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                    <div class="group relative">
                        <div class="aspect-h-1 aspect-w-1 w-2 overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                            <img style="width: 100px;"
                                 src="{{ $product->image }}" alt="Front of men&#039;s Basic Tee in black."
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

                            <a href="{{ route('buy-now',$product ) }}">
                                Buy Now
                            </a>
                        </div>
                    </div>

                    <!-- More products... -->
                </div>
            </div>
        </div>
    @empty
        <h2>Product Not available</h2>
    @endforelse
</div>
