<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <!-- Flowbite Table -->

                <form method="POST" action="{{ route('salesreport.edit', ['Sales_ID'=>$salesreport->Sales_ID]) }}" class="mt-6 space-y-6">
                    @csrf

                    <div class="mb-6">
                        <label for="salesreport" :value="__('product_Name')"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>
                        <input type="text" id="product_Name" name="product_Name"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="product_Name" required :value= "old('product_Name'. $salesreport->product_Name)" >

                        <label for="salesreport" :value="__('Quantity')"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                        <input type="number" id="Quantity" name="Quantity"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="quantity" required :value= "old('Quantity'. $salesreport->Quantity)"/>

                        <label for="salesreport" :value="__('Price')"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                        <input type="double" id="Price" name="Price"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="price" required pattern="\d+(\.\d+)?" :value= "old('Price'. $salesreport->Price)">
                    </div>
                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Save') }}</x-primary-button>

                        <a href="{{ route('Generate Sales Report.reportList') }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Cancel</a>

                    </div>

                </form>



            </div>
        </div>
    </div>
</x-app-layout>
