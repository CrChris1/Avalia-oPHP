<?php

namespace App\Http\Controllers;

use App\Models\Jogador;
use Illuminate\Http\Request;

class JogadorController extends Controller
{
    public function criar(Request $request) {
        $Jogador = new Jogador;
        $Jogador->name = $request->name;
        $Jogador->idade = $request->idade;
        $Jogador->time = $request->time;

        $Jogador->save();
        return redirect('/listar_time');
    }

    public function listar() {
        $jogadores = Jogador::all();

        return view("jogadores", ["jogadores"=>$jogadores]);
    }

    public function formcriarJogador() {
        return view("cadastro_Jogador");
    }

    public function deletar($id) {
        $Jogador = new Jogador;
        $Jogador->find($id)->delete();
        return redirect('/listar_time');
    }

    public function formmudarTime($id) {
        $Jogador = Jogador::find($id);

        return view('editar_jogador', ["Jogador" => $Jogador]);
    }


    public function editar(Request $request) {
        Jogador::where('id', $request->id)->update([
            'name' => $request->name,
            'idade' => $request->idade,
            'time' => $request->time
        ]);

        return redirect('/listar_time');
    }


}
