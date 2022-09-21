<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class newcontroller extends Controller
{
    //

   public $data = array();


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
    //  array_push($data,$id);

    //  foreach($data as $cat)
    //  {
         $request->session()->put('id' , $id);
//    }
    
    //return $data;
    return redirect('test'); //$request->session()->get('id');

   }
    }
    

