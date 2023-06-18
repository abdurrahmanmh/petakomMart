<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
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
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($salesreport as $report)
                                <tr>
                                    <td>{{ $report->Sales_ID }}</td>
                                    <td>{{ $report->User_ID}}</td>
                                    <td>{{ $report->Inventory_ID}}</td>
                                    <td>{{ $report->Inventory->name }}</td>
                                    <td>{{ $report->Inventory->price }}</td>
                                    <td>{{ $report->Inventory->quantity }}</td>
                                    <td>{{ $report->date }}</td>
                                    <td>
                                        <a href="{{ route('sales.edit', $report->Sales_ID) }}" class="btn btn-primary">Edit</a>
                                        <form class="d-inline" method="POST" action="{{ route('sales.destroy', $report->Sales_ID) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
