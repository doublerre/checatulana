<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Yajra\DataTables\DataTables;

use Illuminate\Contracts\Events\Dispatcher;
use App\Http\Controllers\MenuFilterController;

use App\User;
use App\Fondo3;
use App\Fondo3Comments;

use App\Notifications\NewFondoPdfNotification;
use App\Notifications\FondoCFDIUpdateNotification;

use App\Http\Requests\Fondo3\StoreUserFile;
use App\Http\Requests\Fondo3\StoreUserMFile;

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
        ->addColumn('estado', 'admin.municipios.estado')
        ->addColumn('view_pdf', 'admin.municipios.view_pdf')
        ->addColumn('view_pdf_m', 'admin.municipios.view_pdf_m')
        ->addColumn('aceptar', 'admin.municipios.aceptar')
        ->addColumn('rechazar', 'admin.municipios.rechazar')
        ->addColumn('view_all', 'admin.municipios.fondo3.view_all')
        ->rawColumns(['estado', 'aceptar', 'rechazar', 'view_pdf', 'view_pdf_m', 'view_all'])
        ->toJson();
    }

    public function uploadCFDIsUA(StoreUserFile $request)
    {
        $anio = date('Y');

        $fondo3 = (new Fondo3)->fill($request->all());
        $fondo3->file_user = $request->file('file_user')->store('public/pdfs/finanzas/fondo3/' . $anio);
        $fondo3->user_id = auth()->user()->id;
        $fondo3->anio = $anio;
        $fondo3->month = ucwords(Date::now()->format('F'));
        $fondo3->save();

        //Metodo para enviar el correo electronico al municipio.
        $user = User::find($request->m_user_id);
        $user->notify(new NewFondoPdfNotification(3));

        alert()->success('Exito!', 'El pdf ha sido guardado con éxito.');
        return redirect()->back();
    }

    public function aprobarCFDI($id)
    {
        $fondo3 = Fondo3::find($id);
        $fondo3->status = "APROBADO";

        $fondo3->save();
        alert()->success('Exito!', 'El CFDI ha sido aprobado.');
        return redirect()->back();
    }

    public function rechazarCFDI(Request $request)
    {
        $fondo3 = Fondo3::find($request->fondo3_id);
        $fondo3->status = "RECHAZADO";

        Storage::delete($fondo3->file);
        $fondo3->file = "EN ESPERA...";
        $fondo3->save();
        
        $comment = (new Fondo3Comments)->fill($request->all());
        $comment->user_id = auth()->user()->id;
        $comment->save();
        alert()->success('Exito!', 'El comentario ha sido guardado.');
        return redirect()->back();
    }

    public function verCFDI($id, Dispatcher $events)
    {
        $menu = new MenuFilterController();
        $menu->menuFilter($events);
        
        $fondo3 = Fondo3::find($id);
        $comments = Fondo3Comments::where('fondo3_id', $fondo3->id)
        ->join('users', 'users.id', 'fondo3_comments.user_id')
        ->select('fondo3_comments.*', 'users.name')
        ->get();
        return view('admin.municipios.fondo3.show', [
            'fondo3' => $fondo3,
            'comments' => $comments,
        ]);
    }

    public function uploadCFDIsUM($id, StoreUserMFile $request)
    {
        $anio = date('Y');

        $fondo3 = Fondo3::find($id);
        $fondo3->file = $request->file('file')->store('public/pdfs/municipio/fondo3/' . $anio);
        $fondo3->status = "EN REVISION";

        $fondo3->save();
        //Espacio para el envio de notificaciones.
        $user = User::find($fondo3->user_id);
        $municipio = User::find($fondo3->m_user_id);
        $user->notify(new FondoCFDIUpdateNotification(3, $municipio->name, $municipio->id));

        alert()->success('Exito!', 'El CFDI ha sido guardado y enviado a revisión con éxito.');
        return redirect()->back();
    }
}
