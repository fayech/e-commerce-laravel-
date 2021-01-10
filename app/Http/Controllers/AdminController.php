<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function index()
    {
        //return view('layout.index');


        return view('layout.index');

    }
    public function client()
    {
        return view('layout-client.index')->with('layout-client.home');
    }

    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password'=>'required',
         ]);

        $user = User::where(['email' => $request->email])->first();
        if(!$user || !Hash::check($request->password,$user->password)){
            toastr()->error('Success Message');

            return redirect('/sigin');
        }
        else{
            $request->session()->put('id_users',$user->id );
            $request->session()->put('name',$user->name );
            $request->session()->put('image_user',$user->image );

            if(session()->has('id_users')){
                session()->pull('user');
                toastr()->success('Success Message');

                return redirect('/Admin');

            }


             return redirect('/s');

        }
    }
    public function sigin()
    {

        return view('login.login-admin');

    }

    public function AdminAuth(){
        $id_users= Session::get('id_users');
        if($id_users){
          return;
        }else{
         return Redirect::to('/admin')->send();

        }
      }
       public function  logout(){
           if(session()->has('id_users')){
               session()->pull('user');
           }
        }

}
