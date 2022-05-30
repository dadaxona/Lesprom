<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jamikirimtavar extends Model
{
    use HasFactory;
    protected $table = 'jamikirimtavars';
    public $fillable = ['yil_id','oy_id','kun_id','tavar_id','hajm','summa'];
    public $timestamps = true;

    public function tavar()
    {
        return $this->belongsTo(Tavar::class);
    }

    public function kun()
    {
        return $this->belongsTo(Kun::class);
    }
}
