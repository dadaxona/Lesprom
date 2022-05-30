<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sarftavar extends Model
{
    use HasFactory;

    protected $table = 'sarftavars';
    public $fillable = ['yil_id','oy_id','kun_id','tavar_id','data','hajm','summa','jamisumma'];
    public $timestamps = true;
    
    public function tavar()
    {
        return $this->belongsTo(Tavar::class);
    }
}
