<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ishchi extends Model
{
    use HasFactory;
    protected $table = 'ishchis';
    public $fillable = ['name','fam','ochestvo'];
    public $timestamps = true;
}
