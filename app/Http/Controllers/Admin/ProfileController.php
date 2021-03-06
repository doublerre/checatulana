<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\User\ChangePasswordRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Contracts\Events\Dispatcher;
use App\Http\Controllers\MenuFilterController;

class ProfileController extends Controller
{

    public function index(Dispatcher $events)
    {
        $menu = new MenuFilterController();
        $menu->menuFilter($events);

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
        alert()->success('Éxito', 'Perfil editado correctamente.');
        return redirect()->route('profile.index');
    }

    public function change_password(ChangePasswordRequest $request)
    {
        $request->user()->password = Hash::make($request->password);
        $request->user()->save();
        alert()->success('Éxito!', 'Contraseña actualizada correctamente.');
        return redirect()->back();
    }

    public function get_posts()
    {
        $posts = DB::table('posts')->where('user_id', auth()->user()->id)->get();
        return response() -> json($posts);
    }
}
