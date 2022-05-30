<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oy extends Model
{
    use HasFactory;
    protected $table = 'oys';
    public $fillable = ['yil_id','oy'];
    public $timestamps = true;

    public function yil()
    {
        return $this->belongsTo(Yil::class);
    }

    public function kun()
    {
        return $this->hasOne(Kun::class);
    }
}
