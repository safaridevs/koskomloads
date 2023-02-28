<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Load extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'truck_id',
        'from_state',
        'to_state',
        'pick_date',
        'delivery_date',
        'miles',
        'amount',
        'is_tonu',
        
    ];
}
