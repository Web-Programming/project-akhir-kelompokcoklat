<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Register extends Model
{
    protected $table = 'register';
    protected $fillable = ['full_name', 'email', 'password'];

    public $timestamps = false;
}
