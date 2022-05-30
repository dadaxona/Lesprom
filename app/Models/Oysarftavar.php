<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oysarftavar extends Model
{
    use HasFactory;
    protected $table = 'oysarftavars';
    public $fillable = ['yil_id','oy_id','tavar_id','data','hajm','summa','jamisumma'];
    public $timestamps = true;
    
    public function tavar()
    {
        return $this->belongsTo(Tavar::class);
    }
}
