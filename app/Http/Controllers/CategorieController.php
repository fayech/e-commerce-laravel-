<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use DataTables;

class CategorieController extends Controller
{


        public function index(Request $request)
        {
            if ($request->ajax()) {
                $data = Categorie::latest()->get();
                return Datatables::of($data)
                        ->addIndexColumn()
                        ->addColumn('action', function($row){

                               $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editCategorie">Edit</a>';

                               $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteCategorie">Delete</a>';

                                return $btn;
                        })
                        ->rawColumns(['action'])
                        ->make(true);
            }

            return view('layout.categorie');
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            Categorie::updateOrCreate(['id' => $request->categorie_id],['Nom' => $request->Nom]);

            return response()->json(['success'=>'Product saved successfully.']);
        }
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Categorie  $product
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $categorie = Categorie::find($id);
            return response()->json($categorie);
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Categorie  $categorie
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            Categorie::find($id)->delete();

            return response()->json(['success'=>'Product deleted successfully.']);
        }
    }

