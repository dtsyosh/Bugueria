<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    public function ingredientes()
    {
        return $this->belongsToMany(Ingrediente::class)
            ->withPivot('qtde_porcoes')
            ->withTimestamps();
    }

    public function pedidos()
    {
      return $this->belongsToMany(Pedido::class)
        ->withTimestamps();
    }
}
