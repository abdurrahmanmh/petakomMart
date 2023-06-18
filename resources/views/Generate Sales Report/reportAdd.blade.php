<!DOCTYPE html>
<html>
<head>
    <title>Add Sales Report</title>
    <!-- Include your CSS and JavaScript files here -->
</head>
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <!-- Flowbite Table -->

                <form method="post" action="{{ route('salesreport.store') }}" class="mt-6 space-y-6">
                    @csrf
                    <div class="mb-6">
                        <label for="inventory" :value="__('user_id')"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User ID</label>
                        <input type="text" id="user_id" name="user_id"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="Insert User ID" required>
                            <div class="mb-6">
                        <label for="inventory" :value="__('inventory_id')"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Inventory ID</label>
                        <input type="text" id="inventory_id" name="inventory_id"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="Insert Inventory ID" required>
                    <div class="mb-6">
                        <label for="inventory" :value="__('product_Name')"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>
                        <input type="text" id="product_Name" name="product_Name"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="Product Name" required>

                        <label for="quantity" :value="__('quantity')"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                        <input type="number" id="quantity" name="quantity"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="Quantity" required>

                        <label for="price" :value="__('price')"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                        <input type="number" id="task" name="price"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="Price" required pattern="\d+(\.\d+)?">

                    </div>
                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Save') }}</x-primary-button>

                        <a href="{{ route('Generate Sales Report.reportList') }}"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
<!-- <body>
    <x-app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="container">
                            <h1>Add Sales Report</h1>
                            <br>
                            <form method="POST" action="{{ route('salesreport.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="cashier_id">User ID:</label>
                                    <input type="text" class="form-control" id="user_id" name="cashier_id" required>
                                </div>
                                <div class="form-group">
                                    <label for="product_id">Inventory ID:</label>
                                    <input type="text" class="form-control" id="inventory_id" name="product_id" required>
                                </div>
                                <div class="form-group">
                                    <label for="product_name">Product Name:</label>
                                    <input type="text" class="form-control" id="product_Name" name="product_Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price:</label>
                                    <input type="number" class="form-control" id="price" name="price" step="0.01" required>
                                </div>
                                <div class="form-group">
                                    <label for="quantity">Quantity:</label>
                                    <input type="number" class="form-control" id="quantity" name="quantity" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</body> -->
</html>
