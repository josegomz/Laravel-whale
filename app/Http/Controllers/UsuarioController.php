<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUsuarioRequest;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuario.index',compact('usuarios'));
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
    public function store(StoreUsuarioRequest $request)
    {
        $usuario = new Usuario();
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/img/usuario/',$name);
        }
        $usuario->name = $request->input('name');
        $usuario->username = $request->input('username');
        $usuario->slug = $request->input('username');
        $usuario->email = $request->input('email');
        $usuario->password = $request->input('password');
        $usuario->avatar = $name;
        $usuario->save();
        return redirect()->route('usuario.index')->with('status','Usuario creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //$usuario = Usuario::where('slug','=',$slug)->firstOrFail();
        return view('usuario.show',compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        return view('usuario.edit',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Usuario $usuario)
    {
        $usuario->fill($request->except('avatar'));
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $usuario->avatar=$name;
            $file->move(public_path().'/img/usuario/',$name);
        }
        $usuario->save();
        return redirect()->route('usuario.index')->with('status','Usuario editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        $file_path = public_path().'/img/usuario/'.$usuario->avatar;
        \File::delete($file_path);
        $usuario->delete();
        return redirect()->route('usuario.index')->with('status','Usuario eliminado correctamente');
    }

    public function login(Request $request)
    {

        $usuario = Usuario::where('username or email','=',$request->input('username'))->where('password','=','password');
        if($usuario->length() >= 1){
            return view('welcome');
        }
        else{
            return view('login');
        }
    }

}
