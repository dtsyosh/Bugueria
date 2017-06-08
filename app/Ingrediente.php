<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    public function pizzas()
    {
        $this->belongsToMany(Pizza::class)
            ->withPivot('qtde_porcoes')
            ->withTimestamps();
    }
}
