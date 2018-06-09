<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    protected $fillable = [
        'id_pemesanan','id_kue','qty'
];
    public function pemesanan(){
        return $this->BelongsTo('App\pemesanan');
    }
    public function kue(){
        return $this->BelongsTo('App\kue');
    }
}
