<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use APP\User;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.users.index');
    }

    public function get()
    {
        return DataTables::of(User::get())
        ->addColumn('delete', 'admin.users.delete')
        ->rawColumns(['delete'])
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
}
