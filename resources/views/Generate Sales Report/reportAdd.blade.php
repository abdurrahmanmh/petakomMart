<!DOCTYPE html>
<html>
<head>
    <title>Add Sales Report</title>
    <!-- Include your CSS and JavaScript files here -->
</head>
<body>
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
</body>
</html>
