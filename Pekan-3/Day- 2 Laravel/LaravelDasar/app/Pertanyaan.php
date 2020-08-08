<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    //
    protected $table = "pertanyaan";
    protected $primaryKey = "id";
    protected $fillable = ['judul','isi','tanggal_dibuat','tanggal_diperbarui','jawaban_tepat_id','profile_id'];
    public function profile(){
    	return $this->belongsTo('App\Profile','profile_id');
    }
}
