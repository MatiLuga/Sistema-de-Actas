<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Mostrar el formulario de inicio de sesión
    public function index()
    {
        //$users = User::paginate(4);
        //return view('users.index')->with('users', $users);
    }

    public function show($id)
    {
        return $id;
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request, UserRequest $validator)
    {
        $user = new User;
        $user->name = $request->name;
    }
}
