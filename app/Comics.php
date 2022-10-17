<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comics extends Model
{
    // Inseriamo i nomi dei campi per i quali vogliamo permettere l'assegnamento di massa
    protected $fillable = [
        'title',
        'description',
        'thumb',
        'price',
        'series',
        'sale_date',
        'type'
    ];
}
