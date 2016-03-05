<?php

namespace Soporte\Http\Controllers;

use Illuminate\Http\Request;

use Soporte\Http\Requests;
use Soporte\Http\Controllers\Controller;
use Session;
use Redirect;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $users=\Soporte\User::paginate(7);
        return view('usuario.index',compact('users'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \Soporte\User::create([
          'name'    => $request['name'],
          'email'   => $request['email'],
          'matricula'   => $request['matricula'],
          'telefono'   => $request['telefono'],
          'direccion'   => $request['direccion'],
          'nivel'   => $request['nivel'],
          'password'=> bcrypt($request['password']),
        ]);
        return "hola mundo";
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
      $user=\Soporte\User::find($id);
          return view('usuario.edit',['user'=>$user]);
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
        $user = \Soporte\User::find($id);
        $user -> fill($request->all());
        $user -> save();
        return Redirect::to('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      \Soporte\User::destroy($id);      
      return Redirect::to('/usuario');
    }
}
