<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    public function ingredientes()
    {
        return $this->belongsToMany(Ingrediente::class);
    }
}
