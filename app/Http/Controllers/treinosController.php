<?php

namespace App\Http\Controllers;

use App\Models\treino;
use Illuminate\Http\Request;

class treinosController extends Controller
{
    public function index()
    {
    $registros = treino::all();
    return view('admin.treinos.index',compact('registros'));
    }

    public function criar()
    {
        return view('admin.treinos.criar');
    }

    public function salvar(request $req)
    {
        $dados = $req->all();

        if($req->hasFile('arquivo')){
            $arquivo = $req->file('arquivo');
            $num = rand(1111,9999);
            $dir = "upload/treinos";
            $ext = $arquivo->guessClientExtension();
            $nomearquivo = "treino_".$num.".".$ext;
            $arquivo->move($dir,$nomearquivo);
            $dados['arquivo']=$dir."/".$nomearquivo;
        }

        treino::create($dados);
        session(['criar' => 'ativo']);
        return redirect()->route('admin.treinos');
    }

    public function editar($id)
    {
        $registro = treino::find($id);
        return view('admin.treinos.editar',compact('registro'));
    }

    public function atualizar(request $req,$id)
    {
        $dados = $req->all();
        treino::find($id)->update($dados);
        session(['editar' => 'ativo']);
        return redirect()->route('admin.treinos');
    }

    public function deletar(request $req,$id)
    {
        $dados = $req->all();
        treino::find($id)->delete($dados);
        session(['delete' => 'ativo']);
        return redirect()->route('admin.treinos');
    }

    public function download(request $arquivo)
    {

        return response()->download($arquivo);
    }
}
