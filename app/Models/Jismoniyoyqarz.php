<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jismoniyoyqarz extends Model
{
    use HasFactory;
    protected $table = 'jismoniyoyqarzs';
    public $fillable = ['yil_id','oy_id','jamisumma','karzsumma','umumiy'];
    public $timestamps = true;

    public function oy()
    {
        return $this->belongsTo(Oy::class);
    }
}
