<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $primaryKey = 'Payment_ID';

    protected $fillable = [
        'Payment_ID',
        'User_ID',
        'Product_name',
        'quantity',
        'price',
        'Total_Price',
        'payType'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
