<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kun extends Model
{
    use HasFactory;
    protected $table = 'kuns';
    public $fillable = ['yil_id','oy_id','data','hafta'];
    public $timestamps = true;

    public function yil()
    {
        return $this->belongsTo(Yil::class);
    }

    public function oy()
    {
        return $this->belongsTo(Oy::class);
    }

}
