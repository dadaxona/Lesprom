<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avto extends Model
{
    use HasFactory;
    protected $table = 'avtos';
    public $fillable = ['mashina','nomer','yil','kundata'];
    public $timestamps = true;
}
