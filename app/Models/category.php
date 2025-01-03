<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    protected $table='category';
    protected $primaryKey='id';
    protected $fillable=['cat_id','cat_name'];

    use HasFactory;


}
