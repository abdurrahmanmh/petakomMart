<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SalesReport extends Model
{
    use HasFactory;
    protected $table = 'salesreport'; 
    protected $primaryKey = 'Sales_ID';
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
    protected $fillable = [
        'Sales_ID',
        'user_id',
        // 'Inventory_ID',
        'product_Name',
        'Quantity',
        'Price',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // public function inventory()
    // {
    //     return $this->belongsTo(Inventory::class, 'Inventory_ID');
    // }
}

