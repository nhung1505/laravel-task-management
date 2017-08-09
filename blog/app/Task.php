<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function feature(){
        return $this->belongsTo("App\Feature");
    }
}
