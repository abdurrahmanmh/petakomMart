<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesReport extends Model
{
    use HasFactory;
    protected $table = 'salesreport'; 
    protected $primaryKey = 'Sales_ID';
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'Sales_ID',
        'User_ID',
        'Inventory_ID',
        'product_Name',
        'Quantity',
        'Price',
        'Date',
    ];

    // public function inventory()
    // {
    //     return $this->belongsTo(Inventory::class, 'Inventory_ID');
    // }
}

