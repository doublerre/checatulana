<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;


class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('profile.index', [
            'user' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->save();
        alert()->success('Exito!', 'Perfil editado correctamente.');
        return redirect()->route('profile.index');
    }
}
