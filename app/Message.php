<?php

namespace Gemtrust;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'subject', 'message',
        ];
}
