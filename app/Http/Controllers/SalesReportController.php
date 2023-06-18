<?php

namespace App\Http\Controllers;

use App\Models\SalesReport;
use Illuminate\Http\Request;

class SalesReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salesreport = SalesReport::all(); // Assuming you have a Sale model and sales data stored in the database

    return view('reportList', compact('salesreport'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $salereport = new SalesReport();
    $salereport->User_ID = $request->input('User_ID');
    $salereport->Inventory_ID = $request->input('Inventory_ID');
    $salereport->product_Name = $request->input('product_Name');
    $salereport->Price = $request->input('Price');
    $salereport->Quantity = $request->input('Quantity');
    $salereport->save();

    // Redirect or perform any other actions after saving the sales report

    // Example redirect to the report list
    return redirect()->route('report.list');
    }


    /**
     * Display the specified resource.
     */
    public function show(SalesReport $salesReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SalesReport $salesReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    $salereport = SalesReport::findOrFail($id);
    $salereport->cashier_id = $request->input('cashier_id');
    $salereport->product_id = $request->input('product_id');
    $salereport->product_name = $request->input('product_name');
    $salereport->price = $request->input('price');
    $salereport->quantity = $request->input('quantity');
    $salereport->save();

    // Redirect or perform any other actions after updating the sales report

    // Example redirect to the report list
    return redirect()->route('report.list');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    $salereport = SalesReport::findOrFail($id);
    $salereport->delete();

    // Redirect or perform any other actions after deleting the sales report

    // Example redirect to the report list
    return redirect()->route('report.list');
    }

}
