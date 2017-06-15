<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
	protected $fillable = [
		'nome',
		'qtde_porcao',
		'qtde_total',
		'preco_porcao',
		'unidade'
		];
		
    public function pizzas()
    {
        $this->belongsToMany(Pizza::class)
            ->withPivot('qtde_porcoes')
            ->withTimestamps();
    }
}
