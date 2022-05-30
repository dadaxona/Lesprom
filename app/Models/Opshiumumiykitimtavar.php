<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opshiumumiykitimtavar extends Model
{
    use HasFactory;
    protected $table = 'opshiumumiykitimtavars';
    public $fillable = ['tavar_id','hajm','summa'];
    public $timestamps = true;

    public function tavar()
    {
        return $this->belongsTo(Tavar::class);
    }
}
