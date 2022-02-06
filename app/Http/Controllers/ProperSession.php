<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class ProperSession extends Controller
{
    public function login(Request $request){

    $user = $request->input();
    $request->session()->put('user',$user['email']);
   return redirect('/success');

}
}