<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sotilishkun extends Model
{
    use HasFactory;
    protected $table = 'sotilishkuns';
    public $fillable = ['yil_id','oy_id','kun_id','tavar_id','hajm','summa'];
    public $timestamps = true;

    public function tavar()
    {
        return $this->belongsTo(Tavar::class);
    }
}
