<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    public function estoque()
    {
        return $this->belongsTo(Estoque::class);
    }
}
