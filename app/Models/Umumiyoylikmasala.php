<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umumiyoylikmasala extends Model
{
    use HasFactory;
    protected $table = 'umumiyoylikmasalas';
    public $fillable = ['yil_id','oy_id','ishchi_id','yuk','summa','jamisumma'];
    public $timestamps = true;
    
    public function ishchi()
    {
        return $this->belongsTo(ishchi::class);
    }
}
