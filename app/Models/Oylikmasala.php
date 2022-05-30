<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oylikmasala extends Model
{
    use HasFactory;
    protected $table = 'oylikmasalas';
    public $fillable = ['yil_id','oy_id','ishchi_id','tavarturi_id','yuk','summa','jamisumma'];
    public $timestamps = true;
    
    public function ishchi()
    {
        return $this->belongsTo(ishchi::class);
    }

    public function tavarturi()
    {
        return $this->belongsTo(Tavarturi::class);
    }

    public function oy()
    {
        return $this->belongsTo(Oy::class);
    }
}