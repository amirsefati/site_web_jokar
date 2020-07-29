<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daily_individual_cash_inflow extends Model
{
    protected $fillable = ['data','date'];

    protected $casts = [
        'data' => 'array'
    ];
}
