<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Conversation extends Model
{
     use HasFactory;

    protected $fillable = [
        'customer_id',
        'time',
        'communication_medium',
        'message',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
