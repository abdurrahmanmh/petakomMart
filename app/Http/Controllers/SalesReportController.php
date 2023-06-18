<?php

namespace App\Http\Controllers;
use App\Models\SalesReport;
use Illuminate\Http\Request;
use Auth;
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
        $sale = SalesReport::create([
            'user_id' => Auth::user()->id,
            'product_Name' => $request->product_Name,
            'Quantity' => $request->Quantity,
            'Price' => $request->Price,
        ]);

    return redirect(route('Generate Sales Report.reportList'));
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
    public function update(Request $request, $Sales_ID)
    {
        $sale = SalesReport::create([
            'user_id' => Auth::user()->id,
            'product_Name' => $request->product_Name,
            'Quantity' => $request->Quantity,
            'Price' => $request->Price,
        ]);

    // Redirect or perform any other actions after updating the sales report

    // Example redirect to the report list
    return redirect()->route('Generate Sales Report.reportList');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SalesReport $Sales_ID)
    {
        $Sales_ID->delete();
        return redirect()->route('Generate Sales Report.reportList');
    }

}
