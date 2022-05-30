<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sotilishyil extends Model
{
    use HasFactory;
    protected $table = 'sotilishyils';
    public $fillable = ['yil_id','tavar_id','hajm','summa'];
    public $timestamps = true;

    public function tavar()
    {
        return $this->belongsTo(Tavar::class);
    }
}
