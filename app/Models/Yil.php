<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yil extends Model
{
    use HasFactory;
    protected $table = 'yils';
    public $fillable = ['yil'];
    public $timestamps = true;
}
