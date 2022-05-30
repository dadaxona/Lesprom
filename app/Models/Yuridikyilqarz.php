<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yuridikyilqarz extends Model
{
    use HasFactory;
    protected $table = 'yuridikyilqarzs';
    public $fillable = ['yil_id','jamisumma','karzsumma','umumiy'];
    public $timestamps = true;

    public function yil()
    {
        return $this->belongsTo(Yil::class);
    }
}
