<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sale extends Model
{
    protected $fillable=["buyer_contact" ,
"date",
"produce_name",
"quantity" ,
"unit_price",
"total_amount" ];
}
