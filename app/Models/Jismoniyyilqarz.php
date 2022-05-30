<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jismoniyyilqarz extends Model
{
    use HasFactory;
    protected $table = 'jismoniyyilqarzs';
    public $fillable = ['yil_id','jamisumma','karzsumma','umumiy'];
    public $timestamps = true;

    public function yil()
    {
        return $this->belongsTo(Yil::class);
    }
}
