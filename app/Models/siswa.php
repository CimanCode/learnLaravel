<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    public $guarded=["id"];

    public function sekolah(){
        return $this->belongsTo(sekolah::class);
    }
}
