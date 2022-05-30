<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jamisarf extends Model
{
    use HasFactory;
    protected $table = 'jamisarves';
    public $fillable = ['yil_id','oy_id','kun_id','jamisumma'];
    public $timestamps = true;
}
