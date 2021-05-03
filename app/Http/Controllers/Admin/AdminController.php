<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

use Illuminate\Contracts\Events\Dispatcher;
use App\Http\Controllers\MenuFilterController;

use App\Notifications\BannedUser;

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
        ->addColumn('status', 'admin.users.status')
        ->addColumn('change_status', 'admin.users.change_status')
        ->rawColumns(['delete', 'role_user', 'status', 'change_status'])
        ->toJson();
    }

    public function update(Request $request)
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->role = $request->role;
        $user->save();
        alert()->success('Exito!', 'Usuario editado correctamente.');
        return redirect()->back();
    }

    public function destroy($id)
    {
        User::destroy($id);
        alert()->success('Exito!', 'El usuario ha sido eliminado.');
        return redirect()->back();
    }

    public function change_status($id)
    {
        if(auth()->user()->id == $id){
            alert()->error('Error!', 'Por seguridad no es posible cambiar tu estatus.');
            return redirect()->back();
        }else{
            $user = User::find($id);
            if($user->activated == 0){
                $user->notify(new BannedUser);
                $user->activated = 1;
            }else{
                $user->notify(new BannedUser);
                $user->activated = 0;
            }
            $user->save();
            alert()->success('Exito!', 'Cambio de estatus exitoso.');
            return redirect()->back();
        }
    }
}
