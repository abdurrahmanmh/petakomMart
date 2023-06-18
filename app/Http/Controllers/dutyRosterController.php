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
        //
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
     * Update the specified resource in storage.
     */
    public function update(Request $request, dutyRoster $dutyRoster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dutyRoster $dutyRoster)
    {
        //
    }
}
