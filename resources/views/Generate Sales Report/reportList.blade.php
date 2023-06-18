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
                @foreach ($salesreport as $salesreport)
                    <tr>
                        <td>{{ $salesreport->Sales_ID }}</td>
                        <td>{{ $salesreport->User_ID}}</td>
                        <td>{{ $salesreport->Inventory_ID}}</td>
                        <td>{{ $salesreport->Inventory->name }}</td>
                        <td>{{ $salesreport->Inventory->price }}</td>
                        <td>{{ $salesreport->Inventory->quantity }}</td>
                        <td>{{ $salesreport->date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
