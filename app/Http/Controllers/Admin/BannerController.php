<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Banner\BannerRequest;
use Illuminate\Http\Request;

use App\Banners;
use Yajra\DataTables\DataTables;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banners::get();
        return view('admin.banners.index', [
            "banners" => $banners,
        ]);
    }

    public function store(BannerRequest $request)
    {
        $banner = (new Banners)->fill($request->all());
        $banner->file = $request->file('file')->store('public');
        $banner->save();
        
        return response()->json('Carga correcta', 200);
    }

    public function get()
    {
        return DataTables::of(Banners::get())
        ->editColumn('created_at', function(Banners $banner){
            return $banner->created_at->diffForHumans();
        })
        ->addColumn('img_file', 'admin.banners.img')
        ->addColumn('delete', 'admin.banners.delete')
        ->rawColumns(['img_file', 'delete'])
        ->toJson();
    }

    public function destroy($id)
    {
        Banners::destroy($id);
        alert()->success('Exito!', 'El banner ha sido eliminado.');
        return redirect()->route('banners.index');
    }
}
