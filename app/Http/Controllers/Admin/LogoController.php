<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Logo;
use App\Http\Requests\Logo\LogoRequest;
use Yajra\DataTables\DataTables;

class LogoController extends Controller
{
    public function index()
    {
        return view('admin.logos.index');
    }

    public function store(LogoRequest $request)
    {
        $logo = (new Logo)->fill($request->all());
        $logo->file = $request->file('file')->store('public');
        $logo->save();

        return response()->json('Carga correcta', 200);
    }

    public function get()
    {
        return DataTables::of(Logo::get())
        ->editColumn('created_at', function(Logo $logo){
            return $logo->created_at->diffForHumans();
        })
        ->addColumn('img_file', 'admin.logos.img')
        ->addColumn('delete', 'admin.logos.delete')
        ->rawColumns(['img_file', 'delete'])
        ->toJson();
    }

    public function destroy($id)
    {
        Logo::destroy($id);
        alert()->success('Exito!', 'El logo ha sido eliminado.');
        return redirect()->route('logos.index');
    }
}
