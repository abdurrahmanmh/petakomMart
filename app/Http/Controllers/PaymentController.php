<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Auth;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('cashPaySlot');
        $payments = Payment::all();

    return view ('Manage Payment Activities.paymentList', ['payments' => $payments]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Manage Payment Activities.paymentAdd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $payment = Payment::create([
            'User_ID' => \Illuminate\Support\Facades\Auth::user()->id,
            'Product_name' => $request->Product_name,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'Total_Price' => $request->Total_Price,
            'payType' => $request->payType,
        ]);

        return redirect()->route('Manage Payment Activities.paymentList'); //->with('success', 'Payment for product created successfully');
        //return response()->json(['Product_name' => $Product_name]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        //$payment = Payment::findorFail($Payment_ID);
        $payment->Payment_ID = $request->input('Payment_ID');
        $payment->User_ID = $request->input('User_ID');
        $payment->Sales_ID = $request->input('Sales_ID');
        $payment->Product_name = $request->input('Product_name');
        $payment->Price = $request->input('Price');
        $payment->Quantity = $request->input('Quantity');
        $payment->Total_Price = $request->input('Total_Price');
        $payment->payType = $request->input('payType');
        $payment->save();

        return redirect()->route('Manage Payment Activities.paymentList');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $Payment_ID)
    {

        $Payment_ID->delete();
        return redirect()->route('Manage Payment Activities.paymentList');
    }
}
