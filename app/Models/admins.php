<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admins extends Model
{
    //
    protected $table='admins';
    protected $primaryKey='id';
    protected $fillable=['name','email','password','mobile'];


    use HasFactory;
}