<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Client extends Model
{
    use Notifiable;

    protected $fillable = ['name', 'email', 'message'];

    protected $hidden = ['deleted_at', 'created_at', 'updated_at'];
}
