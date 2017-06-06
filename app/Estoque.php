<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    public function ingrediente()
    {
        return $this->hasOne(Ingrediente::class);
    }
}
