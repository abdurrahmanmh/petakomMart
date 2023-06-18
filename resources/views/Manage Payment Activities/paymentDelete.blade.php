@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Delete Sales Report</h1>
        <p>Are you sure you want to delete the following sales report?</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Sales ID</th>
                    <th>Cashier ID</th>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $sale->id }}</td>
                    <td>{{ $sale->cashier_id }}</td>
                    <td>{{ $sale->product_id }}</td>
                    <td>{{ $sale->product_name }}</td>
                    <td>{{ $sale->price }}</td>
                    <td>{{ $sale->quantity }}</td>
                </tr>
            </tbody>
        </table>
        <form method="POST" action="{{ route('sales.destroy', $sale->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection