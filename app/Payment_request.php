<?php

namespace Gemtrust;

use Illuminate\Database\Eloquent\Model;

class Payment_request extends Model
{
    //
    protected $fillable = [
        'sender_id', 'reciever_id', 'status', 'package',
        ];
}
