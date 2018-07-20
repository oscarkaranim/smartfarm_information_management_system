<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supply extends Model
{
    protected $fillable=['supplier_contact',
'supplier_name',
'date',
'commodity',
'quantity',
'unit_price',
'total_amount'];

}
