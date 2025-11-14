<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    //un progetto puo avere un solo type
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
