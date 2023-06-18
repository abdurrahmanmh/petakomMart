@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Report List</h1>
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
                @foreach ($sales as $sale)
                    <tr>
                        <td>{{ $sale->id }}</td>
                        <td>{{ $sale->cashier_id }}</td>
                        <td>{{ $sale->product_id }}</td>
                        <td>{{ $sale->product->name }}</td>
                        <td>{{ $sale->product->price }}</td>
                        <td>{{ $sale->quantity }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
