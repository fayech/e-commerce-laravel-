<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\Marque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{

    public function storeArticle(Request $request)
    {
        $nom	 = $request->nom;
        $prix  =$request->prix;
        $qtestoch=$request->qtestoch;
        $categorie_id = $request->categorie;
        $marque_id = $request->marque;
        $description= $request->description;
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images/Article/'),$imageName);
        $article = new Article();
        $article->nom = $nom;
        $article->prix = $prix;
        $article->qtestoch = $qtestoch;
        $article->categorie_id = $categorie_id;
        $article->marque_id = $marque_id;
        $article->description = $description;
        $article->articleimage = $imageName;
        $article->save();
        toastr()->success('Success Message');

        return back()->with('cart_added','cart record ');

    }
    public function Article()
    {
       /* $articles =DB::select('SELECT articles.nom,articles.id,categories.Nom as "categories",marques.nom as "marques" ,articles.prix, articles.qtestoch ,articles.articleimage FROM `articles`,`marques`,`categories` WHERE articles.marque_id=marques.id AND articles.categorie_id=categories.id');
         $marques=Marque::latest()->get();
         $categories=Categorie::latest()->get();

         */
        $articles = DB::table('articles')
            ->join('categories', 'articles.categorie_id', '=', 'categories.id')
            ->join('marques', 'articles.marque_id', '=', 'marques.id')
            ->select('articles.nom','articles.id','categories.Nom as categories','marques.nom as marques','articles.prix','articles.qtestoch','articles.articleimage')
           ->paginate(4);
            $marques=Marque::latest()->get();
             $categories=Categorie::latest()->get();
             return view('layout.article.listarticle',compact('articles','categories','marques'));


          /*
            ->select('users.name', 'posts.title', 'posts.body')
            ->get();
          return view('layout.article.listarticle',compact('articles','categories','marques'));
    */

        }

    public function editArticle($id)
    {/*
        $article = DB::table('articles')
        ->join('categories', 'articles.categorie_id', '=', 'categories.id')
        ->join('marques', 'articles.marque_id', '=', 'marques.id')
        ->select('articles.*','categories.Nom as categories','marques.nom as marques')
        ->where('articles.id',$id)
        ->get();
        dd($article);
        */
        $article = Article::find($id);

        $marques = Marque::all();
        $categories =  Categorie::all();
        return view('layout.article.edit-article',compact('article','marques','categories'));
    }
    public function deleteArticle(Request $request)
    {

        $article =Article::find($request->articleId);
        unlink(public_path('images/Article').'/'.$article->articleimage);
        $article->delete();
        toastr()->success('Success Message');

        return  redirect('/Article-list');
    }
    public function updateArticle(Request $request)
    {
        $nom	 = $request->nom;
        $prix  =$request->prix;
        $qtestoch=$request->qtestoch;
        $categorie_id = $request->categorie;
        $marque_id = $request->marque;
        $description= $request->description;
        if($request->file('file')){
            $image = $request->file('file');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('images/Article/'),$imageName);
            $article =Article::find($request->id);
            $article->nom = $nom;
            $article->prix = $prix;
            $article->qtestoch = $qtestoch;
            $article->categorie_id = $categorie_id;
            $article->marque_id = $marque_id;
            $article->description = $description;
            $article->articleimage = $imageName;
        }else{
            $article =Article::find($request->id);
            $article->nom = $nom;
            $article->prix = $prix;
            $article->qtestoch = $qtestoch;
            $article->categorie_id = $categorie_id;
            $article->marque_id = $marque_id;
            $article->description = $description;
        }



        $article->save();
        toastr()->success('Success Message');

        return redirect('/Article-list');

    }
     public function index($id)
    {
        if(!$id){
            $articles = DB::table('articles')
            ->join('categories', 'articles.categorie_id', '=', 'categories.id')
            ->join('marques', 'articles.marque_id', '=', 'marques.id')
            ->select('articles.nom','articles.id','categories.Nom as categories','marques.nom as marques','articles.prix','articles.qtestoch','articles.articleimage')
            ->paginate(5);
        }else{
            $articles = DB::table('articles')
            ->join('categories', 'articles.categorie_id', '=', 'categories.id')
            ->join('marques', 'articles.marque_id', '=', 'marques.id')
            ->select('articles.nom','articles.id','categories.Nom as categories','marques.nom as marques','articles.prix','articles.qtestoch','articles.articleimage')
            ->where('categories.id',$id)
            ->paginate(5);
        }

       $categories =  Categorie::all();
       $marques =  Marque::all();

       return view('layout-client.Listarticle',compact('articles','categories','marques'));
    }



    public function detailArticle($id)
    {/*
        $article = DB::table('articles')
        ->join('categories', 'articles.categorie_id', '=', 'categories.id')
        ->join('marques', 'articles.marque_id', '=', 'marques.id')
        ->select('articles.*','categories.Nom as categories','marques.nom as marques')
        ->where('articles.id',$id)
        ->get();
        dd($article);
        */

        $article = DB::table('articles')
        ->join('categories', 'articles.categorie_id', '=', 'categories.id')
        ->join('marques', 'articles.marque_id', '=', 'marques.id')
        ->select('articles.*','categories.Nom as categories','marques.nom as marques','articles.prix','articles.qtestoch','articles.articleimage')
        ->where('articles.id',$id)->first();


        return view('layout-client.single-product',compact('article'));
    }


    public function Articles()
    {
            $articles = DB::table('articles')
            ->join('categories', 'articles.categorie_id', '=', 'categories.id')
            ->join('marques', 'articles.marque_id', '=', 'marques.id')
            ->select('articles.nom','articles.id','categories.Nom as categories','marques.nom as marques','articles.prix','articles.qtestoch','articles.articleimage')
            ->paginate(5);


       $categories =  Categorie::all();
       $marques =  Marque::all();

       return view('layout-client.Listarticle',compact('articles','categories','marques'));
    }


}
