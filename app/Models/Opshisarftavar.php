<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opshisarftavar extends Model
{
    use HasFactory;
    protected $table = 'opshisarftavars';
    public $fillable = ['tavar_id','data','hajm','summa','jamisumma'];
    public $timestamps = true;
    
    public function tavar()
    {
        return $this->belongsTo(Tavar::class);
    }
}
