<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opshiumumiychiqimtavar extends Model
{
    use HasFactory;
    protected $table = 'opshiumumiychiqimtavars';
    public $fillable = ['tavarturi_id','hajm','summa','umumiy'];
    public $timestamps = true;
    public function tavarturi()
    {
        return $this->belongsTo(Tavarturi::class);
    }
}
