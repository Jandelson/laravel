<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = \App\User::all();
        return $users;
    }

    public function show($id, Request $request)
    {
        //$users = User::findOrFail($id);
        //return $users;
        $headers = $request->headers->get('user-agent');
        \dd($headers);
        $nome  = $request->query('nome');
        print $nome;
        return \response('Olá', 200)
            ->header('Content-Type', 'text/plain');
    }
}
