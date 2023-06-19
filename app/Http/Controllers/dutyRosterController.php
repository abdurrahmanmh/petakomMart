<?php

namespace App\Http\Controllers;

use App\Models\dutyRoster;
use Illuminate\Http\Request;

class DutyRosterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $duties = dutyRoster::all();
        return view('Manage Duty Roster.Schedule', ['duties' => $duties]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Manage Duty Roster.slotAdd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $duties = new dutyRoster();
        $duties-> Duty_Roster_ID = $request->input ('Duty_Roster_ID');
        $duties-> Date = $request->input ('Date');
        $duties-> Time = $request->input ('Time');
        $duties -> save ();
        return redirect(route('Manage Duty Roster.Schedule'));

    }

    /**
     * Display the specified resource.
     */
    public function show(dutyRoster $dutyRoster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dutyRoster $dutyRoster)
    {
        return view('Manage Duty Roster.slotUpdate');
    }

    /**
     * Update new slot in the schedule.
     */
    public function update(Request $request, dutyRoster $dutyRoster)
    {
        $duties = new dutyRoster();
        $duties-> duty_roster_id = $request->input ('Duty_Roster_ID');
        $duties-> date = $request->input ('Date');
        $duties-> time = $request->input ('Time');
        $duties -> save ();

        // Example redirect to the Schedule
        return redirect()->route('Manage Duty Roster.schedule');
    }


    /**
     * Remove the slot
     */
    public function destroy($dutyRoster)
    {
        $dutyRoster->delete();  
        return redirect(route('Manage Duty Roster.schedule'));
    }
}
