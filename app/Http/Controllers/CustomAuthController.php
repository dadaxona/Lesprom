<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PhotoController;
use Illuminate\Http\Request;
use App\Models\Brend;
use App\Models\Drektor;
use App\Providers\OopServicePro;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class CustomAuthController extends PhotoController
{
  public function login()
  {
    return view("auth.login");
  }
  
  public function loginuser(Request $req)
  {
    if($req->login == "glovni"){
    $user = Drektor::where('login','=',$req['login'])->first();
    if($user){
      $user = Drektor::where('login','=',$req->login)->first();    
      if($req->login == "glovni" && Hash::check($req->password, $user->password)){            
            $req->session()->put('IDIE',$user->id);
            return redirect('/glavninachal');             
        }else{
          return back()->with('not','Parolingiz Xato');
        }

    }else{
      $req->validate([
        'login'=>'required',
        'password'=>'required',
      ]);  
      $user = new Drektor();
      $user->login = $req['login'];
      $user->password = Hash::make($req['password']);
      $user->save();      
      $user = Drektor::where('login','=',$req['login'])->first();
      if ($user) {         
          $req->session()->put('IDIE',$user->id);
          return redirect('/glavninachal');          
      }
    }

  }elseif($req->login == "bugalter"){
      $user = Brend::where('login','=',$req['login'])->first();
      if($user){
        $user = Brend::where('login','=',$req->login)->first();    
        if($req->login == "bugalter" && Hash::check($req->password, $user->password)){        
              $req->session()->put('loginID',$user->id);
              return redirect('/dashbord');          
          }else{
            return back()->with('not','Parolingiz Xato');
        }
      }else{
        $req->validate([
          'login'=>'required',
          'password'=>'required',
        ]);  
        $user = new Brend();
        $user->login = $req['login'];
        $user->password = Hash::make($req['password']);
        $user->save();      
        $user = Brend::where('login','=',$req['login'])->first();
        if ($user) {         
          $req->session()->put('loginID',$user->id);
          return redirect('/dashbord');          
        }
      }   
    }
  }
  
  public function logaut()
  {
    if(Session::has('IDIE')){
      Session::pull('IDIE');
      return redirect('/');
    }elseif(Session::has('loginID')) {
      Session::pull('loginID');
      return redirect('/');
    }   
  }
    public function logindrekror()
    {
      return view('drektor.loginoyna');
    }
    public function paroldrekror(Request $request)
    {
      $request->validate([
        'password'=>'required',
        'passwordconfirm'=>'required_with:password|same:password',
      ]);
      Drektor::where('id', 1)->update([
        'password'=>Hash::make($request['password'])
      ]);
      return back()->with('success', 'Parolingiz muvofaqiyatli yangilandi');
    }

    public function loginbugalter(OopServicePro $model)
    {
      return $model->loginbugalter();
    }

    public function bugalterparol(Request $request)
    {
      $request->validate([
        'password'=>'required',
        'passwordconfirm'=>'required_with:password|same:password',
      ]);
      
      Brend::where('id', 1)->update([
        'password'=>Hash::make($request['password'])
      ]);
      return back()->with('success', 'Parolingiz muvofaqiyatli yangilandi');
      }
    
}
