<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umumiykirimtavar extends Model
{
    use HasFactory;
    protected $table = 'umumiykirimtavars';
    public $fillable = ['yil_id','oy_id','tavar_id','hajm','summa'];
    public $timestamps = true;

    public function tavar()
    {
        return $this->belongsTo(Tavar::class);
    }

    public function oy()
    {
        return $this->belongsTo(Oy::class);
    }
}
