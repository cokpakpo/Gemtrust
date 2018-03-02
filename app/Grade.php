<?php

namespace Gemtrust;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    //
     protected $fillable = [
        'user_id', 'grade_level', 'payouts', 'package',
        ];
}
