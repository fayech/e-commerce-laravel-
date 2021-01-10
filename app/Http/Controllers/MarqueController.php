<?php

namespace App\Http\Controllers;

use App\Models\Marque;
use Illuminate\Http\Request;
use DataTables;


class MarqueController extends Controller
{

    public function index()
    {
        return view('layout.marque.marque');
    }
    public function storeMarque(Request $request)
    {
        $nom	 = $request->nom;
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images/marque/'),$imageName);
        $marque = new Marque();
        $marque->nom = $nom;
        $marque->marqueimage = $imageName;
        $marque->save();
        return back()->with('student_added','student record ');


    }
    public function Marque()
    {
        $marques = Marque::paginate(6);
        return view('layout.marque.marque',compact('marques'));
    }

    public function editMarque($id)
    {
        $marque = Marque::find($id);

        return view('layout.marque.edit-marque',compact('marque'));
    }
    public function deleteMarque(Request $request)
    {

        $marque =Marque::find($request->marqueId);
        unlink(public_path('images/marque').'/'.$marque->marqueimage);
        $marque->delete();
        toastr()->success('Success Message');

        return  redirect('/Marque-list');
    }
    public function updateMarque(Request $request)
    {
        $nom = $request->nom;
        if($request->file('file')){
            $image = $request->file('file');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('images/marque/'),$imageName);
            $marque =Marque::find($request->id);
            $marque->nom = $nom;
            $marque->marqueimage = $imageName;
        }else{
            $marque =Marque::find($request->id);
            $marque->nom = $nom;
        }



        $marque->save();
        toastr()->success('Success Message');

        return redirect('/Marque-list');

    }

}
