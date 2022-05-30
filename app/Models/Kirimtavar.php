<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kirimtavar extends Model
{
    use HasFactory;
    protected $table = 'kirimtavars';
    public $fillable = ['yil_id','oy_id','kun_id','kompaniya_id','tavar_id','data','hajm','summa','kozoq','uzb','rostomoshka','oylikharajat','jami'];
    public $timestamps = true;

    public function kompaniya()
    {
        return $this->belongsTo(Kompaniya::class);
    }
    
    public function tavar()
    {
        return $this->belongsTo(Tavar::class);
    }
}