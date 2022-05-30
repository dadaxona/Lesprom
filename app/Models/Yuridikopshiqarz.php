<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yuridikopshiqarz extends Model
{
    use HasFactory;
    protected $table = 'yuridikopshiqarzs';
    public $fillable = ['jamisumma','karzsumma','umumiy'];
    public $timestamps = true;
}
