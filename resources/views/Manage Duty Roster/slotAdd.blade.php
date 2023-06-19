<!DOCTYPE html>
<html>
<head>
    <title>Add Sales Report</title>
    <!-- Include your CSS and JavaScript files here -->
</head>
<body>
    <x-app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="container">
                            <h1>Add Slot Schedule</h1>
                            <br>
                            <form method="POST" action="{{ route('schedule.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="duty_roster_id"> ID:</label>
                                    <input type="text" class="form-control" id="Duty_Roster_ID" name="Duty_Roster_ID" required>
                                </div>
                              
                                <div class="form-group">
                                    <label for="date">Date:</label>
                                    <input type="date" class="form-control" id="Date" name="Date" required>
                                </div>
                                <div class="form-group">
                                    <label for="time">Time:</label>
                                    <input type="" class="form-control" id="Time" name="Time" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>
</html>
