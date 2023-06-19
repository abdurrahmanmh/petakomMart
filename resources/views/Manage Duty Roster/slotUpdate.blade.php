<!DOCTYPE html>
<html>
<head>
    <title>Edit Duty Roster Entry</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Edit Duty Roster Entry</h1>
        
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
        
        <form action="{{ route('duty.update', $duty->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" class="form-control" value="{{ $duty->date }}">
            </div>
            
            <div class="form-group">
                <label for="employee">Employee:</label>
                <input type="text" id="employee" name="employee" class="form-control" value="{{ $duty->employee }}">
            </div>
            
            <div class="form-group">
                <label for="shift">Shift:</label>
                <input type="text" id="shift" name="shift" class="form-control" value="{{ $duty->shift }}">
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('duty.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
