<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    //
    protected $table='books';
    protected $primaryKey='id';
    protected $fillable=['book_id','book_name','author_id','cat_id','book_no','book_price'];

    use HasFactory;
}
