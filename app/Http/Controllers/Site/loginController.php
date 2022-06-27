<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
    public function entrar(Request $req)
    {
        $dados = $req->all();
        if(Auth::attempt(['email'=>$dados,'password'=>$dados['senha']]))
        {
            return redirect()->route('admin.treinos');
        }
        session(['loginincorreto' => 'ativo']);
        return redirect()->route('login');
    }
    public function sair()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
