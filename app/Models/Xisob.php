<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xisob extends Model
{
    use HasFactory;
    protected $table = 'xisobs';
    public $fillable = ['yil_id','oy_id','kun_id','tavarturi_id','data','qayerdan','kub','summa','naqt','kartq','bank'];
    public $timestamps = true;
}
