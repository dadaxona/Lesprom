<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ishchimehnat extends Model
{
    use HasFactory;
    protected $table = 'ishchimehnats';
    public $fillable = ['yil_id','oy_id','kun_id','ishchi_id','tavarturi_id','data','hafta','hajm','summa','jamisumma'];
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
    public function ishchi()
    {
        return $this->belongsTo(ishchi::class);
    }
    public function tavarturi()
    {
        return $this->belongsTo(Tavarturi::class);
    }
}
