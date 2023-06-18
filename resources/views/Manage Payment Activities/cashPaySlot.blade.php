<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

            <!DOCTYPE html>
<html>
<head>
    <title>Add Payment</title>
    <!-- Add your CSS and JavaScript files here -->
</head>
<body>
    <h1>Add Payment</h1>

    <!-- Display validation errors, if any -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Add your form code here -->
    <form method="POST" action="{{ route('payments.store') }}">
        @csrf

        <!-- Sales ID -->
        <label for="sales_id">Sales ID:</label>
        <input type="text" id="sales_id" name="sales_id" required>

        <!-- Cashier ID -->
        <label for="cashier_id">Cashier ID:</label>
        <input type="text" id="cashier_id" name="cashier_id" required>

        <!-- Product Name -->
        <label for="product_name">Product Name:</label>
        <input type="text" id="product_name" name="product_name" required>

        <!-- Product Code -->
        <label for="product_code">Product Code:</label>
        <input type="text" id="product_code" name="product_code" required>

        <!-- Quantity -->
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required>

        <!-- Price -->
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" required>

        <!-- Total Price -->
        <label for="total_price">Total Price:</label>
        <input type="number" id="total_price" name="total_price" required>

        <!-- Submit Button -->
        <button type="submit">Add Payment</button>
    </form>

    <!-- Add your JavaScript code here -->
</body>
</html>


            </div>
        </div>
    </div>

</x-app-layout>