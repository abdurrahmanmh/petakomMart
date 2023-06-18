@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add Sales Report</h1>
        <form method="POST" action="{{ route('sales.store') }}">
            @csrf
            <div class="form-group">
                <label for="cashier_id">Cashier ID:</label>
                <input type="text" class="form-control" id="cashier_id" name="cashier_id" required>
            </div>
            <div class="form-group">
                <label for="product_id">Product ID:</label>
                <input type="text" class="form-control" id="product_id" name="product_id" required>
            </div>
            <div class="form-group">
                <label for="product_name">Product Name:</label>
                <input type="text" class="form-control" id="product_name" name="product_name" required>
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
@endsection
