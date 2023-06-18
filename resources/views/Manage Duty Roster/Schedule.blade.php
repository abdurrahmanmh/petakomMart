<!DOCTYPE html>
<html>
<head>
    <title>Duty Roster</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Duty Roster</h1>
        
        <!-- Display any success or error messages here -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Employee</th>
                    <th>Shift</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($duties as $duty)
                    <tr>
                        <td>{{ $duty->date }}</td>
                        <td>{{ $duty->employee }}</td>
                        <td>{{ $duty->shift }}</td>
                        <td>
                            <!-- Edit button -->
                            <a href="{{ route('Manage Duty Roster.slotUpdate', $duty->id) }}" class="btn btn-primary">Edit</a>
                            
                            <!-- Delete button -->
                            <form action="" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        <!-- Add new duty button -->
        <a href="{{ route('Manage Duty Roster.slotAdd') }}" class="btn btn-success">Add New Duty</a>
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
