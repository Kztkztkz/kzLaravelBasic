<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Casts\Attribute;

class admin extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['name','email','password'];

    // protected function role(): Attribute
    // {
    //     // return new Attribute(function ($value) {
    //     //     return ["is_owner" => $value];
    //     // });
    // }
}
