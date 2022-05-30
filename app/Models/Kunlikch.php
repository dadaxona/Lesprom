<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunlikch extends Model
{
    use HasFactory;
    protected $table = 'kunlikches';
    public $fillable = ['yil_id','oy_id','kun_id','elektor','gaz','suv','pitaniya','avto','bux','korinmi','tutilmagan','sabab','data','jamisumma'];
    public $timestamps = true;
}
