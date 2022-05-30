<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jamiyuridik extends Model
{
    use HasFactory;
    protected $table = 'jamiyuridiks';
    public $fillable = ['yil_id','oy_id','kun_id','jamisumma','karzsumma','umumiy'];
    public $timestamps = true;
}