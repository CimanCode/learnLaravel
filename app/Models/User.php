<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public $guarded=["id"];
    // public $fillabe = [
    //     'Nama',
    //     'email',
    //     'password',
    //     'role',
    //     'isAktif'
    // ];

    protected $table = 'user';


}


