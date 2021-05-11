<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Yajra\DataTables\DataTables;

use Illuminate\Contracts\Events\Dispatcher;
use App\Http\Controllers\MenuFilterController;

use App\User;
use App\Fondo3;
use App\Http\Requests\Fondo3\StoreUserFile;

use Jenssegers\Date\Date;


class Fondo3Controller extends Controller
{
    public function index(Dispatcher $events)
    {
        $menu = new MenuFilterController();
        $menu->menuFilter($events);

        if(auth()->user()->role == "ADMINISTRADOR"){
            return view('admin.municipios.index');
        }else if(auth()->user()->role == "MUNICIPIO"){
            return view('admin.municipios.fondo3.index');
        }else{
            abort(403);
        }
    }

    public function getUsers()
    {
        return DataTables::of(User::get()->where('role', 'MUNICIPIO'))
        ->addColumn('view', 'admin.municipios.view')
        ->addColumn('role_user', 'admin.users.role')
        ->rawColumns(['view', 'role_user'])
        ->toJson();
    }

    public function history($id, Dispatcher $events)
    {
        $menu = new MenuFilterController();
        $menu->menuFilter($events);
        $user = User::find($id);

        if(auth()->user()->role == "ADMINISTRADOR" && $user->role == "MUNICIPIO"){
            return view('admin.municipios.profile', [
                'user' => $user,
            ]);
        }
        abort(403);
    }

    public function getCFDIs($id)
    {
        return DataTables::of(Fondo3::get()->where('m_user_id', $id))
        ->toJson();
    }

    public function uploadCFDIsUA(StoreUserFile $request)
    {
        $anio = date('Y');

        $fondo3 = (new Fondo3)->fill($request->all());
        $fondo3->file_user = $request->file('file_user')->store('public/pdfs/finanzas/' . $anio);
        $fondo3->user_id = auth()->user()->id;
        $fondo3->anio = $anio;
        $fondo3->month = ucwords(Date::now()->format('F'));
        $fondo3->save();

        alert()->success('Exito!', 'El pdf ha sido guardado con éxito.');
        return redirect()->back();
    }
}
