<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{

    //un type puo avere piu progetti
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
