<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chiqim extends Model
{
    use HasFactory;
    protected $table = 'chiqims';
    public $fillable = ['yil_id','oy_id','kun_id','jismoniyclenci_id','tavar_id','data','mijoz','kub','summa','naqt','summa2','kartq','summa3','bank','karzsumma','sroc'];
    public $timestamps = true;

    public function yil()
    {
        return $this->belongsTo(Yil::class);
    }
    public function oy()
    {
        return $this->belongsTo(Oy::class);
    }
    public function kun()
    {
        return $this->belongsTo(Kun::class);
    }
    public function tavar()
    {
        return $this->belongsTo(Tavar::class);
    }
}
