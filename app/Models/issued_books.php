<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class issued_books extends Model
{
    //
    protected $table='issued_books';
    protected $primaryKey='id';
    protected $fillable=['book_no','book_author','student_id','issued_date'];

    use HasFactory;
}
