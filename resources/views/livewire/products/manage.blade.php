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


                <form wire:submit.prevent="{{$editMode ? 'update' : 'submit' }}" class="max-w-sm mx-auto">
                    <div class="mb-5">
                        <label for="name"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" wire:model.debounce="name" id="name"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="name">
                        <x-input-error for="name" class="mt-1"/>
                    </div>
                    <div class="mb-5">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea wire:model.debounce="description"></textarea>
                        <x-input-error for="description" class="mt-1"/>
                    </div>
                    <div class="mb-5">
                        <label for="image"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                        @if ($photo)
                            <img width="100px" height="60" src="{{ asset($photo->temporaryUrl()) }}">
                        @else
                            <img width="100px" height="60" src="{{ asset($image) }}">
                        @endif
                        <input type="file" wire:model.debounce="photo" id="image"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="image">
                        <x-input-error for="photo" class="mt-1"/>
                    </div>
                    <div class="mb-5">
                        <label for="price"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                        <input type="text" wire:model.debounce="price" id="price"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="price">
                        <x-input-error for="price" class="mt-1"/>
                    </div>
                    <div class="mb-5">
                        <label for="stock_quantity"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                        <input type="text" wire:model.debounce="stock_quantity" id="stock_quantity"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="stock_quantity">
                        <x-input-error for="stock_quantity" class="mt-1"/>
                    </div>
                    <button type="submit"
                            class="text-black bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        {{$editMode ? 'Update' : 'Submit' }}
                    </button>

                </form>

            </div>
        </div>
    </div>
</div>
