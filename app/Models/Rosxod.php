<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rosxod extends Model
{
    use HasFactory;
    protected $table = 'rosxods';
    public $fillable = ['naqt','bank','jami'];
    public $timestamps = true;
}