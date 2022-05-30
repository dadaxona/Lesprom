<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yilumumiychiqimtavar extends Model
{
    use HasFactory;
    protected $table = 'yilumumiychiqimtavars';
    public $fillable = ['yil_id','tavarturi_id','hajm','summa','umumiy'];
    public $timestamps = true;

    public function tavarturi()
    {
        return $this->belongsTo(tavarturi::class);
    }
}
