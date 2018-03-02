<?php

namespace Gemtrust;

use Illuminate\Database\Eloquent\Model;

class Backoffice extends Model
{
    //


    protected $fillable = [
        'sender_id', 'package', 'status', 'createdBy',
    ];
}
