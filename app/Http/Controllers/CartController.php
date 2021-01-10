<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use PDF;


class CartController extends Controller
{
    public function addToCart($id)
    {
        $article = Article::find($id);
        if(!$article) {
            abort(404);
        }
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                    $id => [
                        "name" => $article->nom,
                        "quantity" => 1,
                        "price" => $article->prix,
                        "photo" => $article->articleimage
                    ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $article->nom,
            "quantity" => 1,
            "price" => $article->prix,
            "photo" => $article->articleimage
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }



    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
    public function pdf()
    {

            return view('layout-client.pdf');
    }
    public function createPDF() {
        // retreive all records from db
        // $data = session()->get('cart');
        // view()->share('cart',$data);

         $pdf = PDF::loadView('layout-client.pdf');

        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
      }



      public function download()
      {
          $render = view('layout-client.pdf')->render();

          $pdf = new Pdf;
          $pdf->addPage($render);
          $pdf->setOptions(['javascript-delay' => 5000]);
          $pdf->saveAs(public_path('report.pdf'));

          return response()->download(public_path('report.pdf'));
      }
}
