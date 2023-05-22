<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    protected $table = 'tb_user';
    protected $primarykey = 'tb_user';
    protected $fillable=['email','username','password'];
}
