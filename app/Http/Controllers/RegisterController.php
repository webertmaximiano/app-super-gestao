<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $erro = '';
        return view('site.register', ['titulo' => 'Register', 'erro' => $erro]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         //regras de validação
         $regras = [
            'name' => 'required',
            'email' => 'email',
            'password' => 'required'
        ];

        //as mensagens de feedback de validação
        $feedback = [
            'name.required' => 'This field is required',
            'email.email' => 'O campo usuário (e-mail) é obrigatório',
            'password.required' => 'O campo senha é obrigatório'
        ];

        //se não passar pelo validate
        $request->validate($regras, $feedback);
        //dd($request);   
        User::create($request->all());
        return redirect()->route('site.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
