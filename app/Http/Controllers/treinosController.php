<?php

namespace App\Http\Controllers;

use App\Models\treino;
use Illuminate\Http\Request;
USE Illuminate\Support\Facades\DB;

class treinosController extends Controller
{
    public function index()
    {
        $registros = treino::paginate(10);
        return view('admin.treinos.index', compact('registros'));
    }

    public function criar()
    {
        return view('admin.treinos.criar');
    }

    public function salvar(request $req)
    {
        $dados = $req->all();

        if ($req->hasFile('arquivo')) {
            $arquivo = $req->file('arquivo');
            $num = rand(1111, 9999);
            $dir = "upload/treinos";
            $ext = $arquivo->guessClientExtension();
            $nomearquivo = "treino_" . $num . "." . $ext;
            $arquivo->move($dir, $nomearquivo);
            $dados['arquivo'] = $dir . "/" . $nomearquivo;
        }

        treino::create($dados);
        session(['criar' => 'ativo']);
        return redirect()->route('admin.treinos');
    }

    public function editar($id)
    {
        $registro = treino::find($id);
        return view('admin.treinos.editar', compact('registro'));
    }

    public function atualizar(request $req, $id)
    {
        $dados = $req->all();

        if ($req->hasFile('arquivo')) {

        }else{
            $arquivo = $req->file('arquivo');
            $num = rand(1111, 9999);
            $dir = "upload/treinos";
            $ext = $arquivo->guessClientExtension();
            $nomearquivo = "treino_" . $num . "1." . $ext;
            $arquivo->move($dir, $nomearquivo);
            $dados['arquivo'] = $dir . "/" . $nomearquivo;
        }

        treino::find($id)->update($dados);
        session(['editar' => 'ativo']);
        return redirect()->route('admin.treinos');
    }

    public function deletar(request $req, $id)
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


    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = "";
            $treinos = DB::table('treinos')->where('treino', 'LIKE', '%' . $request->search . "%")->get();
            if ( $treinos) {
                foreach ( $treinos as $key =>  $treino) {
                    $output .= '<tr>' .
                        '<td>' . $treino->id . '</td>' .
                        '<td>' . $treino->treino . '</td>' .
                        '<td>' . $treino->descricao . '</td>' .


                        '<td>
                            <a class="btn btn-small amber darken-3" href="/admin/treinos/editar/'.$treino->id.'"><i class="material-icons">edit</i></a>
                            <a class="btn btn-small blue darken-3" href="/'.$treino->arquivo.'" target="_blank"><i class="material-icons">download</i></a>
                            <a class="btn btn-small red darken-3" href="/admin/treinos/deletar/'.$treino->id.'"><i class="material-icons">delete</i></a>
                       </td>'.




                      '</tr>';
                }
                return Response($output);
            }
        }

    }
}
