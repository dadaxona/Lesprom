<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jismoniyopshiqarz extends Model
{
    use HasFactory;
    protected $table = 'jismoniyopshiqarzs';
    public $fillable = ['jamisumma','karzsumma','umumiy'];
    public $timestamps = true;
}
