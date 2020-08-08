<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $table = "profile";
    protected $primaryKey = "id";
    protected $fillable = ['nama_lengkap','email','foto'];
     public function pertanyaan(){
        return $this->hasMany('App\Pertanyaan');
    }
}
