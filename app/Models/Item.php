<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', // Adicione o campo necessário
        'quantity', // Exemplo de outro campo
        'price', // Caso haja
    ];
}

