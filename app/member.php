<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    protected $fillable = [
        'nama_member','alamat','email','no_hp','username_member','pass_member'
];
    public function pemesanan(){
        return $this->hasMany('App\pemesanan');
    }
    public function testi(){
        return $this->hasMany('App\testimoni');
    }
}
