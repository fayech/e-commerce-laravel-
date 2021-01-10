<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table = "articles";
    protected $fillable =  [
        'nom',
        'prix',
        'qtestoch',
        'articleimage',
        'categorie_id',
        'marque_id',
        'description'

    ];
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
    public function marque()
    {
        return $this->belongsTo(Marque::class);
    }
}
