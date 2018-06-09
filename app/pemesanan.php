<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    protected $fillable = [
        'tgl_order','total_beli','total_bayar','tgl_kirim','id_member'
];
    public function pemesanan(){
        return $this->hasMany('App\detail');
    }
    public function member(){
        return $this->BelongsTo('App\member');
    }
}
