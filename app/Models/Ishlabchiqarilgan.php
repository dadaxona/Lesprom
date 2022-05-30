<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ishlabchiqarilgan extends Model
{
    use HasFactory;
    protected $table = 'ishlabchiqarilgans';
    public $fillable = ['yil_id','oy_id','kun_id','data','summa'];
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
}
