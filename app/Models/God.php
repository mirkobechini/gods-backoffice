<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class God extends Model
{
    public function pantheon(){
        return $this->belongsTo(Pantheon::class);
    }

    public function domains(){
        return $this->belongsToMany(Domain::class);
    }
}
