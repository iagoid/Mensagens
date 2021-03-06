<?php

namespace App\Http\Controllers;

use App\mensagens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MensagemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaMensagens = mensagens::all();
        return view('mensagens.list',['mensagens' => $listaMensagens]);
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mensagens.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = array(
            'titulo.required' => 'É obrigatório um título para a mensagem',
            'texto.required' => 'É obrigatório um texto para a mensagem',
            'autor.required' => 'É obrigatório um autor para a mensagem',
            );
            //vetor com as especificações de validações
            $regras = array(
            'titulo' => 'required|string|max:255',
            'texto' => 'required',
            'autor' => 'required|string',
            );
            //cria o objeto com as regras de validação
            $validador = Validator::make($request->all(), $regras, $messages);
            //executa as validações
            if ($validador->fails()) {
            return redirect('mensagens/create')
            ->withErrors($validador)
            ->withInput($request->all);
            }
            //se passou pelas validações, processa e salva no banco...
            $obj_mensagens = new mensagens();
            $obj_mensagens->titulo = $request['titulo'];
            $obj_mensagens->texto = $request['texto'];
            $obj_mensagens->autor = $request['autor'];
            $obj_mensagens->save();
            return redirect('/mensagens')->with('success', 'Mensagem criada com sucesso!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mensagens  $mensagens
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mensagem = Mensagens::find($id);
        return view('mensagens.show',['mensagem' => $mensagem]);
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mensagens  $mensagens
     * @return \Illuminate\Http\Response
     */
    public function edit(mensagens $mensagens)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mensagens  $mensagens
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mensagens $mensagens)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mensagens  $mensagens
     * @return \Illuminate\Http\Response
     */
    public function destroy(mensagens $mensagens)
    {
        //
    }
}