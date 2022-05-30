<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tavar extends Model
{
    use HasFactory;
    protected $table = 'tavars';
    public $fillable = ['tavar'];
    public $timestamps = true;
}

