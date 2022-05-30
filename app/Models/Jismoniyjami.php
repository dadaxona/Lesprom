<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jismoniyjami extends Model
{
    use HasFactory;
    protected $table = 'jismoniyjamis';
    public $fillable = ['yil_id','oy_id','kun_id','jamisumma','karzsumma','umumiy'];
    public $timestamps = true;
}
