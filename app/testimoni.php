<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $table = "testimonis";

    public function member(){
        return $this->belongsTo('App\Member', 'id');
    }
}
