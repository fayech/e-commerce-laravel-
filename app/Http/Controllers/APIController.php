<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class APIController extends Controller
{
    public function Articles()
    {
            $articles = DB::table('articles')
            ->join('categories', 'articles.categorie_id', '=', 'categories.id')
            ->join('marques', 'articles.marque_id', '=', 'marques.id')
            ->select('articles.nom','articles.id','categories.Nom as categories','marques.nom as marques','articles.prix','articles.qtestoch','articles.articleimage')
            ->paginate(5);
            return $articles;
    }
}
