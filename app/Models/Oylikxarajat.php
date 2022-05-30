<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oylikxarajat extends Model
{
    use HasFactory;
    protected $table = 'oylikxarajats';
    public $fillable = ['yil_id','oy_id','elektor','gaz','suv','pitaniya','avto','bux','korinmi','tutilmagan','data','jamisumma'];
    public $timestamps = true;

    public function oy()
    {
       return $this->belongsTo(Oy::class);
    }
}
