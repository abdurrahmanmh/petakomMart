<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <!-- Flowbite Table -->

                <form method="POST" action="{{ route('inventory.update', $inventory->inventory_id) }}" class="mt-6 space-y-6">
                    @csrf
                    @method('put')

                    <div class="mb-6">
                        <label for="product_Name" :value="__('product_Name')"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Task</label>
                        <input type="text" id="product_Name" name="product_Name"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="product_Name" required value="{{ $inventory->product_Name }}" >

                        <label for="quantity" :value="__('quantity')"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                        <input type="number" id="quantity" name="quantity"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="quantity" required value="{{ $inventory->quantity }}"/>

                        <label for="price" :value="__('price')"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                        <input type="number" id="price" name="price"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="price" required pattern="\d+(\.\d+)?" value="{{ $inventory->price }}">

                        <label for="notes" :value="__('notes')"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Notes</label>
                        <input type="text" id="notes" name="notes"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="notes" required value="{{ $inventory->notes }}">
                    </div>
                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Save') }}</x-primary-button>

                        <a href="{{ route('inventory.index') }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Cancel</a>

                    </div>

                </form>



            </div>
        </div>
    </div>
</x-app-layout>
