<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Yajra\DataTables\DataTables;

use Illuminate\Contracts\Events\Dispatcher;
use App\Http\Controllers\MenuFilterController;

use App\User;
use App\Fondo4;
use App\Fondo4Comments;

use App\Http\Requests\Fondo3\StoreUserFile;
use App\Http\Requests\Fondo3\StoreUserMFile;
 
use Jenssegers\Date\Date;

class Fondo4Controller extends Controller
{
    public function index(Dispatcher $events)
    {
        $menu = new MenuFilterController();
        $menu->menuFilter($events);

        if(auth()->user()->role == "ADMINISTRADOR"){
            return view('admin.municipios.fondo4.admin.index');
        }else if(auth()->user()->role == "MUNICIPIO"){
            return view('admin.municipios.fondo4.index');
        }else{
            abort(403);
        }
    }

    public function getUsers()
    {
        return DataTables::of(User::get()->where('role', 'MUNICIPIO'))
        ->addColumn('view', 'admin.municipios.fondo4.admin.view')
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
            return view('admin.municipios.fondo4.admin.profile', [
                'user' => $user,
            ]);
        }
        abort(403);
    }

    public function getCFDIs($id)
    {
        return DataTables::of(Fondo4::get()->where('m_user_id', $id))
        ->addColumn('estado', 'admin.municipios.estado')
        ->addColumn('view_pdf', 'admin.municipios.view_pdf')
        ->addColumn('view_pdf_m', 'admin.municipios.view_pdf_m')
        ->addColumn('aceptar', 'admin.municipios.fondo4.admin.aceptar')
        ->addColumn('rechazar', 'admin.municipios.rechazar')
        ->addColumn('view_all', 'admin.municipios.fondo4.view_all')
        ->rawColumns(['estado', 'aceptar', 'rechazar', 'view_pdf', 'view_pdf_m', 'view_all'])
        ->toJson();
    }

    public function uploadCFDIsUA(StoreUserFile $request)
    {
        $anio = date('Y');

        $fondo3 = (new Fondo4)->fill($request->all());
        $fondo3->file_user = $request->file('file_user')->store('public/pdfs/finanzas/fondo4/' . $anio);
        $fondo3->user_id = auth()->user()->id;
        $fondo3->anio = $anio;
        $fondo3->month = ucwords(Date::now()->format('F'));
        $fondo3->save();

        alert()->success('Exito!', 'El pdf ha sido guardado con éxito.');
        return redirect()->back();
    }

    public function aprobarCFDI($id)
    {
        $fondo3 = Fondo4::find($id);
        $fondo3->status = "APROBADO";

        $fondo3->save();
        alert()->success('Exito!', 'El CFDI ha sido aprobado.');
        return redirect()->back();
    }

    public function rechazarCFDI(Request $request)
    {
        $fondo4 = Fondo4::find($request->fondo4_id);
        $fondo4->status = "RECHAZADO";
        //Se quedara pendiente ya que aun no existen los archivos por parte de los municipios
        Storage::delete($fondo4->file);
        $fondo4->file = "EN ESPERA...";
        $fondo4->save();
        
        $comment = (new Fondo4Comments)->fill($request->all());
        $comment->user_id = auth()->user()->id;
        $comment->save();
        alert()->success('Exito!', 'El comentario ha sido guardado.');
        return redirect()->back();
    }

    public function verCFDI($id, Dispatcher $events)
    {
        $menu = new MenuFilterController();
        $menu->menuFilter($events);
        
        $fondo4 = Fondo4::find($id);
        $comments = Fondo4Comments::where('fondo4_id', $fondo4->id)
        ->join('users', 'users.id', 'fondo4_comments.user_id')
        ->select('fondo4_comments.*', 'users.name')
        ->get();
        return view('admin.municipios.fondo4.show', [
            'fondo4' => $fondo4,
            'comments' => $comments,
        ]);
    }

    public function uploadCFDIsUM($id, StoreUserMFile $request)
    {
        $anio = date('Y');

        $fondo3 = Fondo4::find($id);
        $fondo3->file = $request->file('file')->store('public/pdfs/municipio/fondo4/' . $anio);
        $fondo3->status = "EN REVISION";
        $fondo3->save();
        //Espacio para el envio de notificaciones.

        alert()->success('Exito!', 'El CFDI ha sido guardado y enviado a revisión con éxito.');
        return redirect()->back();
    }
}
