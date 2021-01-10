<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $table = "categories";
    protected $fillable = [
        'Nom'
    ];

    public function Article()
    {
       // return $this->belongsTo('App\Models\Article');
        return $this->hasMany(Article::class);

    }


}
