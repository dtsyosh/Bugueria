<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public function pizzas()
    {
        return $this->belongsToMany(Pizza::class)
            ->withTimestamps();
    }
}
