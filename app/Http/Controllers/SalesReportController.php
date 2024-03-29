<?php

namespace App\Http\Controllers;

use App\Models\SalesReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class SalesReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salesreport = SalesReport::all(); // Assuming you have a Sale model and sales data stored in the database

    return view('Generate Sales Report.reportList', ['salesreport' => $salesreport]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Generate Sales Report.reportAdd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    $salesreport = new SalesReport();

    $salesreport->User_ID = Auth::user()->id;
    //$salesreport-> = Auth::user()->id;
    $salesreport->product_Name = Auth::user()->id;
    $salesreport->Price = $request->input('Price');
    $salesreport->Quantity = $request->input('Quantity');
    $salesreport->save();
    
    // Redirect or perform any other actions after saving the sales report

    // Example redirect to the report list
    return redirect()->route('Generate Sales Report.reportList');
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
    $salesreport = SalesReport::findOrFail($id);
    $salesreport->cashier_id = $request->input('User_ID');
    $salesreport->product_name = $request->input('Product_name');
    $salesreport->price = $request->input('Price');
    $salesreport->quantity = $request->input('Quantity');
    $salesreport->save();

    // Redirect or perform any other actions after updating the sales report

    // Example redirect to the report list
    return redirect()->route('report.list');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    $salesreport = SalesReport::findOrFail($id);
    $salesreport->delete();

    // Redirect or perform any other actions after deleting the sales report

    // Example redirect to the report list
    return redirect()->route('report.list');
    }

}
