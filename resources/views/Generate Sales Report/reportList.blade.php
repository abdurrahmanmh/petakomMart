@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Generate Sales Report List</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Sales ID</th>
                    <th>User ID</th>
                    <th>Inventory ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sales as $salereport)
                    <tr>
                        <td>{{ $salereport->Sales_ID }}</td>
                        <td>{{ $salereport->User_ID}}</td>
                        <td>{{ $salereport->Inventory_ID}}</td>
                        <td>{{ $salereport->Inventory->name }}</td>
                        <td>{{ $salereport->Inventory->price }}</td>
                        <td>{{ $salereport->Inventory->quantity }}</td>
                        <td>{{ $salereport->date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
