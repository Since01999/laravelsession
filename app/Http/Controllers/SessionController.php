<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function login(Request $request){

        // //Request Instanse
        // //storing data 
        // // $request->session()->put('user','anas');
        // $request->session()->put('user','Muhammad');
        // // $request->session()->put('city','karachi');  //now this is stored in the session

        // //in session when key is same the name will be replaced with the old name
        // //data of the key without value will not be shown
        // //retrieving data
        // $user = $request->session()->get('user');

        // // now if the city is not stored in the session then we can give it a default value 
        // // this will work in the adsence of actual city value 
        // $city = $request->session()->get('city','Multan');
        // // now with closure function 
        // $price = $request->session()->get('price',function(){
        //     return "Price not set yet";
        // });



        //retrieving all the session data

        // $data = $request->session()->all();

        //checking if the item exist in the function

        // if($request->session()->has('user') && $request->session()->has('city')){
        //     dd('yes');
        // };


        // other method to check item in the session 

        // if($request->session()->exists('user'))
        // {
        //     dd("yes");
            
        // }
        // dd("no");
        // exit;


        // other method to check the session item is missing or not 
        
        // if($request->session()->missing('user'))
        // {
        //     dd("yes");
            
        // }
        // dd("no");
        // exit;

    //     $request->session()->get('user');
    //     $request->session()->forget('user');
    //     echo $request->session()->get('user');
    //      $request->session()->get('city');
    //      $request->session()->flush();
    //    echo $request->session()->get('city');
    //     exit;

        



        // return view('login',compact('user','city','price','data'));


        //Global Session Helper

        //Storing data 
            session(['name'=>'ali']);

            //for retrieving

           $name =  session('name');
        
               


                // flash()   and keep()  and now()

               $request->session()->flash('status','Login successful');
                return redirect('/home');

                //we get flash data on the next request

    }
   
}
