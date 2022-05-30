<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yuk extends Model
{
    use HasFactory;

    protected $table = 'yuks';
    public $fillable = ['yil_id','oy_id','kun_id','ishchi_id','tavarturi_id','data','hajm','summa','jamisumma'];
    public $timestamps = true;
    
    public function ishchi()
    {
        return $this->belongsTo(ishchi::class);
    }

    public function tavarturi()
    {
        return $this->belongsTo(Tavarturi::class);
    }
}
