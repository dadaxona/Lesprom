<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umumiychiqimtavar extends Model
{
    use HasFactory;
    protected $table = 'umumiychiqimtavars';
    public $fillable = ['yil_id','oy_id','tavarturi_id','hajm','summa','umumiy'];
    public $timestamps = true;

    public function tavarturi()
    {
        return $this->belongsTo(Tavarturi::class);
    }

}
