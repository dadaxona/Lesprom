<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tavarturi extends Model
{
    use HasFactory;
    protected $table = 'tavarturis';
    public $fillable = ['tavarturi'];
    public $timestamps = true;
}
