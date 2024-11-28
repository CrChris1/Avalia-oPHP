<?php

namespace App\Http\Controllers;
use App\Models\Time;
use Illuminate\Http\Request;

class TimeController extends Controller
{
    public function criar(Request $request) {
        $time = new Time;
        $time->name = $request->name;
        $time->jogador = $request->jogador;

        $time->save();
        return redirect('/listar_time');
    }

    public function listar() {
        $times = \App\Models\Time::with('jogador')->get();
        return view("times", ["times"=>$times]);
    }

    public function formCriarTime() {
        $jogadores = \App\Models\Jogador::all(); // Busca todos os jogadores
        return view('cadastro_time', ['jogadores' => $jogadores]); // Envia para a view
    }
    

    public function deletar($id) {
        $time = Time::find($id);
        if ($time) {
            $time->delete();
        }
        return redirect('/listar_time');
    }
    

    public function formmudarTime($id) {
        $time = Time::find($id);

        return view('editar_materia', ["time" => $time]);
    }


    public function editar(Request $request) {
        Time::where('id', $request->id)->update([
            'name' => $request->name,
            'jogador' => $request->jogador,
        ]);

        return redirect('/listar_time');
    }
}
