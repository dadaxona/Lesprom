<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yilliksariftavar extends Model
{
    use HasFactory;
    protected $table = 'yilliksariftavars';
    public $fillable = ['yil_id','tavar_id','data','hajm','summa','jamisumma'];
    public $timestamps = true;
    
    public function tavar()
    {
        return $this->belongsTo(Tavar::class);
    }
}
