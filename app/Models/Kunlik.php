<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunlik extends Model
{
    use HasFactory;
    protected $table = 'kunliks';
    public $fillable = ['yil_id','oy_id','kun_id','elektor','gaz','suv','pitaniya','avto','bux','korinmi','tutilmagan','data','jamisumma'];
    public $timestamps = true;
}