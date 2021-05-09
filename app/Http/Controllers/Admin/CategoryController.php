<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;

use App\Http\Controllers\Controller;

use App\Category;
use App\Logo;

use Illuminate\Contracts\Events\Dispatcher;
use App\Http\Controllers\MenuFilterController;

class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Dispatcher $events)
    {
        $menu = new MenuFilterController();
        $menu->menuFilter($events);
        if(auth()->user()->role=="ADMINISTRADOR"){
            $categories = Category::orderBy('id', 'ASC')->paginate();

            return view('admin.categories.index', compact('categories'));
        }
        abort(403);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Dispatcher $events)
    {
        $menu = new MenuFilterController();
        $menu->menuFilter($events);

        if(auth()->user()->role=="ADMINISTRADOR"){
            $logos = Logo::get();
            return view('admin.categories.create', [
                "logos" => $logos,
            ]);
        }
        abort(403);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryStoreRequest $request)
    {
        $category = Category::create($request->all());
        if($request->file('image')){
            $path = Storage::disk('public')->put('image',  $request->file('image'));
            $category->fill(['file' => asset($path)])->save();
        }
        return redirect()->route('categories.index', $category->id)->with('status', 'Profile updated!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Dispatcher $events)
    {
        $menu = new MenuFilterController();
        $menu->menuFilter($events);

        if(auth()->user()->role=="ADMINISTRADOR"){
            $category = Category::find($id);

            return view('admin.categories.show', compact('category'));
        }
        abort(403);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Dispatcher $events)
    {
        $menu = new MenuFilterController();
        $menu->menuFilter($events);

        if(auth()->user()->role=="ADMINISTRADOR"){
            $category = Category::find($id);
            $logos = Logo::get();

            return view('admin.categories.edit', compact('category', 'logos'));
        }
        abort(403);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request, $id)
    {
        $category = Category::find($id);

        $category->fill($request->all())->save();

        return redirect()->route('categories.show', $category->id)->with('status', 'Profile updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id)->delete();

        return back()->with('eliminar','ok');
    }
}
