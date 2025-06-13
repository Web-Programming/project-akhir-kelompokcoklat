<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Testi extends Model
{
    protected $table = 'testi';
    protected $fillable = ['name', 'message'];

    public $timestamps = false;
}
