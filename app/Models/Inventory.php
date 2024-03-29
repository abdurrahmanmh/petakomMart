<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
  
    use HasFactory;

    //declare primary key
    protected $primaryKey = 'inventory_id';
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
