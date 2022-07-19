<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class newcontroller extends Controller
{
    //


    public function display()
    {
        return view('register');
    }



    public function fake(Request $request)
    {


        $user = new User();

        $user->name = $request->name;

        $user->email = $request->email;
        $user->password = $request->password;


       return redirect('users');
    }


    public function getsessiondata(Request $request)
    {
        
            $result = $request->session()->get('id');
            $products = Product::all()->where('id' , $result); 

            return $products;

       
   }


   public function sessionstore(Request $request , $id)
   {

    $request->session()->put('id' , $id);
    return $request->session()->get('id');

   }
    }
    

