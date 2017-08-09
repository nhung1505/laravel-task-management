<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    public function tasks(){
        return $this->hasMany("App\Task");
    }
}
