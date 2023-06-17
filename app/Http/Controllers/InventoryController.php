<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
                $inventories =Inventory::all();
                //$inventories = Auth::user()->inventory;

                //$todos=Todo::with('user')->get();
                return view('inventory.index', ['inventories' => $inventories]);
                //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inventory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'product_Name' => 'required|string|max:255'
        ]);

        $inventory = new Inventory();
        $inventory->inventory_id;
        //dd(Auth::user()->id);
        $inventory->product_Name = $request->product_Name;
        $inventory->quantity = $request->quantity;
        $inventory->price = $request->price;
        $inventory->notes = $request->notes;
        $inventory->save();

        return redirect(route('inventory.index'));
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventory $inventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventory $inventory)
    {
        
        return view('inventory/edit', ['inventory' => $inventory]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inventory $inventory)
    {
        
        $request->validate([
            'product_Name' => 'required|string|max:255',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            'notes' => 'nullable|string',
        ]);

        $inventory->product_Name = $request->product_Name;
        $inventory->quantity = $request->quantity;
        $inventory->price = $request->price;
        $inventory->notes = $request->notes;

        $inventory->update();

        return redirect(route('inventory.index'));
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventory $inventory)
    {
        
        $inventory->delete();

        return redirect(route('inventory.index'));
        
    }
}
