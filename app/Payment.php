<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable =['order_id', 'payment_type', 'payment_status'];
}
