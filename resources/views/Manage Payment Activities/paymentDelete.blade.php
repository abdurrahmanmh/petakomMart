@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Delete Payment</h1>
        <p>Are you sure you want to delete the following payment details?</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Payment ID</th>
                    <th>User ID</th>
                    <th>Sales ID</th>
                    <th>Product name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total Price</th>
                    <th>Pay Type</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $payment->id }}</td>
                    <td>{{ $payment->cashier_id }}</td>
                    <td>{{ $payment->product_id }}</td>
                    <td>{{ $payment->product_name }}</td>
                    <td>{{ $payment->price }}</td>
                    <td>{{ $payment->quantity }}</td>
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