<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jamiyuk extends Model
{
    use HasFactory;
    protected $table = 'jamiyuks';
    public $fillable = ['yil_id','oy_id','kun_id','jamisumma'];
    public $timestamps = true;
}