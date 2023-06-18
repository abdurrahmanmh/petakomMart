<!DOCTYPE html>
<html>
<head>
    <title>Create Duty Roster Entry</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Create Duty Roster Entry</h1>
        
        <!-- Display any validation errors here -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ route('duty.store') }}" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" class="form-control" value="{{ old('date') }}">
            </div>
            
            <div class="form-group">
                <label for="employee">Employee:</label>
                <input type="text" id="employee" name="employee" class="form-control" value="{{ old('employee') }}">
            </div>
            
            <div class="form-group">
                <label for="shift">Shift:</label>
                <input type="text" id="shift" name="shift" class="form-control" value="{{ old('shift') }}">
            </div>
            
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="{{ route('duty.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
