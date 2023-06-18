<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'Payment_ID',
        'User_ID',
        'Sales_ID',
        'Product_name',
        'quantity',
        'price',
        'Total_Price',
        'payType'
    ];
}
