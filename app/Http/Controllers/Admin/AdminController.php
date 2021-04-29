<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

use Illuminate\Contracts\Events\Dispatcher;
use App\Http\Controllers\MenuFilterController;

class AdminController extends Controller
{
    
    public function index(Dispatcher $events)
    {
        $menu = new MenuFilterController();
        $menu->menuFilter($events);

        if(auth()->user()->role=="ADMINISTRADOR"){
            return view('admin.users.index');
        }
        abort(403);
    }

    public function get()
    {
        return DataTables::of(User::get())
        ->addColumn('delete', 'admin.users.delete')
        ->addColumn('role_user', 'admin.users.role')
        ->addColumn('change_role', 'admin.users.change_role')
        ->rawColumns(['delete', 'role_user', 'change_role'])
        ->toJson();
    }

    public function update(Request $request)
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->save();
        alert()->success('Exito!', 'Perfil editado correctamente.');
        return redirect()->back();
    }

    public function destroy($id)
    {
        User::destroy($id);
        alert()->success('Exito!', 'El usuario ha sido eliminado.');
        return redirect()->back();
    }

    public function change_role($id)
    {
        $user = User::find($id);
        if($user->role == "EDITOR"){
            $user->role = "ADMINISTRADOR";
        }else{
            $user->role = "EDITOR";
        }
        $user->save();
        alert()->success('Exito!', 'Cambio de rol exitoso.');
        return redirect()->back();
    }
}
