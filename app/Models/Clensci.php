<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clensci extends Model
{
    use HasFactory;
    protected $table = 'clenscis';
    public $fillable = ['yil_id','oy_id','kun_id','kampaniya','raxbar','inn','tel'];
    public $timestamps = true;
    public function yil()
    {
        return $this->belongsTo(Yil::class);
    }
    public function oy()
    {
        return $this->belongsTo(Oy::class);
    }
    public function kun()
    {
        return $this->belongsTo(Kun::class);
    }
}
