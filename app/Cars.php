<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $fillable = [
        'brand', 'model', 'type','doors','priceHour','priceDay','priceWeek','priceMonth','priceYear',''
    ];
}
