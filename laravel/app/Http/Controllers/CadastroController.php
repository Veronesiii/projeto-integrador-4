<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Pessoa_fisica;
use App\Pessoa_juridica;

class CadastroController extends Controller
{

    public function cadastroPessoaFisica(Request $request){


      //   $request->validate([
      //   'email' => 'unique',
      //   'cpf' => 'unique',
      //   'password' => 'required',
      //   'username' => 'required',
      //   'name' =>  'required',
      //   'sobrenome' => 'required',
      //   'data_de_nascimento' => 'required',
      //   'telefone' => 'required',
      //   'sexo' => 'required'
      // ]);



      $usuario = User::create([
        'email' => $request->input('email'),
        'password' =>  $request->input('password'),
        'username'=> $request->input('username')
      ]);

      $usuario->save();

      $pf = Pessoa_fisica::create([
        'name' => $request->input('name'),
        'sobrenome' => $request->input('sobrenome'),
        'data_de_nascimento' => $request->input('data_de_nascimento'),
        'telefone' => $request->input('telefone'),
        'cpf' => $request->input('cpf'),
        'sexo' => $request->input('sexo'),
        'users_usuario_id' => $usuario->usuario_id
      ]);

      $pf->save();

      return redirect('/login');


    }

    public function cadastroPessoaJuridica(Request $request){

      // $validator = $request->validate([
      //   'email' => 'required|unique:users',
      //   'cnpj_pj' => 'unique',
      //   'password' => 'required',
      //   'username' => 'required',
      //   'nome_fantasia' =>  'required',
      //   'sobrenome' => 'required',
      //   'data_de_nascimento' => 'required',
      //   'telefone' => 'required',
      //   'sexo' => 'required'
      // ]);
      //

      $usuario = User::create([
        'email' => $request->input('email'),
        'password' =>  $request->input('password'),
        'username'=> $request->input('username')
      ]);

      $usuario->save();

      $pj = Pessoa_juridica::create([
        'nome_fantasia' => $request->input('name'),
        'cnpj' => $request->input('cnpj'),
        'users_usuario_id' => $usuario->usuario_id
      ]);

      $pj->save();

      return redirect('/login');
    }

}
