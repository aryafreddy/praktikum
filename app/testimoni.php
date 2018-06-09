<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testimoni extends Model
{
    protected $fillable = [
        'id_member','testimoni'
];
    public function member(){
        return $this->BelongsTo('App\member');
    }
}
