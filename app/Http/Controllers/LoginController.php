<?php
/**
 * Created by PhpStorm.
 * User: mfarid
 * Date: 06/04/18
 * Time: 21.18
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;

class LoginController extends Controller
{

    public function actionIndex(Request $request){
        if ($request->session()->exists('activeUser')) {
            return redirect('/backend');
        }
        return view('login.index');
    }

    public  function actionLogin(Request $request){
        $username=$request->input('username');
        $password=$request->input('password');

        if($username == 'admin' && $password =='admin'){
            $request->session()->put('activeUser', $username);
            return "
            <div class='alert alert-success'>Login berhasil!</div>
            <script> scrollToTop(); reload(1000); </script>";
        }else{
            return "<div class='alert alert-danger'>Username atau Password Salah!</div>";
        }
    }

    public function actionLogout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }


}