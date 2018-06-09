<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kue extends Model
{
    protected $fillable = [
        'nama_kue','harga'
];
    public function kue(){
        return $this->BelongsTo('App\detail','id_kue');
    }
}
