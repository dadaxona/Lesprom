<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yillikxarajat extends Model
{
    use HasFactory;
    protected $table = 'yillikxarajats';
    public $fillable = ['yil_id','elektor','gaz','suv','pitaniya','avto','bux','korinmi','tutilmagan','data','jamisumma'];
    public $timestamps = true;

    public function yil()
    {
        return $this->belongsTo(Yil::class);
    }
}
