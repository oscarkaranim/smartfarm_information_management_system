<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{protected $fillable=[

'first_name',
'last_name',
'id_number',
'telephone_number',
'job_title',
'date_contracted',
    'pay_grade',
'salary'
];
}
