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
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SalesReport $Sales_ID)
    {
        return view('Generate Sales Report.reportUpdate', ['salesreport' => $Sales_ID]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SalesReport $sales)
    {
        $sales->product_Name = $request->product_Name;
        $sales->Quantity = $request->Quantity;
        $sales->Price = $request->Price;

        $sales->update();

        return redirect(route('Generate Sales Report.reportList', [$sales->Sales_ID]));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SalesReport $Sales_ID)
    {
        $Sales_ID->delete();
        
        return redirect(route('Generate Sales Report.reportList'));
    }
}