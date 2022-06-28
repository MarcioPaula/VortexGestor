<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aluno;
use App\Models\treino;

class alunosController extends Controller
{
    public function index()
    {
        $registros = aluno::paginate(10);
        return view('admin.alunos.index',compact('registros'));
    }

    public function criar()
    {
        $treinos = treino::all();
        return view('admin.alunos.criar',compact('treinos'));
    }

    public function salvar(request $req)
    {
      $dados = $req->all();
      aluno::create($dados);
        session(['criar' => 'ativo']);
      return redirect()->route('admin.alunos');
    }

    public function editar($id)
    {
        $treinos = treino::all();
        $registro = aluno::find($id);
        return view('admin.alunos.editar',compact('registro','treinos'));
    }

    public function atualizar(request $req,$id)
    {
        $dados = $req->all();
        aluno::find($id)->update($dados);
        session(['editar' => 'ativo']);
        return redirect()->route('admin.alunos');
    }

    public function deletar(request $req,$id)
    {
        $dados = $req->all();
        aluno::find($id)->delete($dados);
        session(['delete' => 'ativo']);
        return redirect()->route('admin.alunos');

    }

    public function treino(request $req)
    {

        $alunos = aluno::where([
            ['cpf', '=', $req->cpf],
        ])->first();

        if($alunos == true)
        {
            $treino = treino::where([
                ['treino', '=', $alunos['treino']],
            ])->first();

            if($treino == true) {

                return view('site.treino', compact('alunos', 'treino'));
            }else
            {
                session(['treinonaocadastrado' => 'ativo']);
                return redirect()->route('home');
            }

        }else
        {
            session(['cpfinvalido' => 'ativo']);
            return redirect()->route('home');
        }


    }
}


