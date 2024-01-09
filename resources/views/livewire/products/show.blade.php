<div>
    <div>
        {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
        <div class="container mx-auto px-12 sm:px-12">
            <div class="py-8">
                <div>
                    <h2 class="text-2xl font-semibold leading-tight">
                        {{$editMode ? 'Edit' : 'Add' }}
                    </h2>
                </div>


                <form  class="max-w-sm mx-auto">
                    <div class="mb-5">
                        <label for="name"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <p>{{ $product->name }}</p>
                    </div><br>
                    <div class="mb-5">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <p>{{ $product->description }}</p>
                    </div><br>
                    <div class="mb-5">
                        <label for="image"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
//                            <img width="60px" height="60" src="{{ asset($image) }}">
                    </div><br>
                    <div class="mb-5">
                        <label for="price"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                        <p>{{ $product->price }}</p>
                    </div><br>
                    <div class="mb-5">
                        <label for="stock_quantity"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                        <p>{{ $product->stock_quantity }}</p>
                    </div><br>
                    <a href="{{ route('seller.products.index') }}"
                            class="text-black bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Back To Products List
                    </a>

                </form>

            </div>
        </div>
    </div>
</div>
