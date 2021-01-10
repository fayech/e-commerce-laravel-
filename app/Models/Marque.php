<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    use HasFactory;
    protected $table = "marques";
    protected $fillable =  [

        'nom', 'marqueimage'

    ];
    public function Article()
    {
       // return $this->belongsTo('App\Models\Article');
        return $this->hasMany(Article::class);

    }
}

