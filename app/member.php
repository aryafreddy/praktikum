<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = "users";

    public function testimoni(){
        return $this->hasMany(Testimoni::class, 'id_member');
    }
}
