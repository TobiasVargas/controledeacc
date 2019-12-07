<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Acc;
use Illuminate\Support\Facades\Auth;

class AccController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idUsuario = Auth::user()->id;
        $accs = User::find($idUsuario)->accs;
        return view('acc.tabela', compact('accs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('acc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mensagens = [
            'nome.required' => 'O tipo de ACC não pode ser nulo!',
            'limiteHoras.required' => 'O limite de horas não pode ser nulo!',
            'horas.required' => 'O número de horas não pode ser nulo!',
            'limiteHoras.max' => 'Limite de 6 digitos para o limite de horas',
            'horas.max' => 'Limite de 6 digitos para o número de horas'
        ];
        $request->validate([
            'nome' => 'required',
            'limiteHoras' => 'required | min:1 | max:6',
            'horas' => 'required | min:1 | max:6'
        ], $mensagens);

        $acc = new Acc;

        $acc->nome = $request->nome;
        $acc->limiteHoras = $request->limiteHoras;
        $acc->horas = $request->horas;
        $acc->user_id = Auth::user()->id;

        $acc->save();

        return redirect('horas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $acc = Acc::find($id);
        return view('acc.edit', compact('acc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mensagens = [
            'nome.required' => 'O tipo de ACC não pode ser nulo!',
            'limiteHoras.required' => 'O limite de horas não pode ser nulo!',
            'horas.required' => 'O número de horas não pode ser nulo!',
            'limiteHoras.max' => 'Limite de 6 digitos para o limite de horas',
            'horas.max' => 'Limite de 6 digitos para o número de horas'
        ];
        $request->validate([
            'nome' => 'required',
            'limiteHoras' => 'required | min:1 | max:6',
            'horas' => 'required | min:1 | max:6'
        ], $mensagens);
        
        $acc = Acc::find($id);

        $acc->nome = $request->nome;
        $acc->limiteHoras = $request->limiteHoras;
        $acc->horas = $request->horas;
        $acc->user_id = Auth::user()->id;

        $acc->save();

        return redirect('horas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $acc = Acc::find($id);
        $acc->delete();

        return redirect('/horas');
    }

    public function addHoras(Request $request, $id)
    {
        $acc = Acc::find($id);
        $qtdHoras = $request->add + $acc->horas;
        $acc->horas = $qtdHoras;

        $acc->save();

        return redirect('horas');
    }

}
