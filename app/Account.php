<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = "users";
    protected $fillable = [
        "name",
        "age",
        "phoneNumber",
        "email",
        "password",
    ];
}
