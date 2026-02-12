<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pantheon extends Model
{
    public function gods(){
        return $this->hasMany(God::class);
    }
}
