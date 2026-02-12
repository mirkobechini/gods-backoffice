<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    public function gods(){
        return $this->belongsToMany(God::class);
    }
}
