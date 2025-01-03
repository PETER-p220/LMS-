<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class authors extends Model
{
    //
    protected $table='authors';
    protected $primaryKey='id';
    protected $fillable=['author_id','author_name'];
    use HasFactory;
    
}
