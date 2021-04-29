<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\SubcategoryStoreRequest;
use App\Http\Requests\SubcategoryUpdateRequest;

use App\Http\Controllers\Controller;

use App\Subcategories;
use App\Category;

use Illuminate\Support\Facades\DB;

use Illuminate\Contracts\Events\Dispatcher;
use App\Http\Controllers\MenuFilterController;

class SubcategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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

        $subcategories = DB::table('subcategories')
        ->orderBy('id', 'ASC')
        ->join('categories', 'categories.id', 'subcategories.category_id')
        ->select('subcategories.*', 'categories.name as category_name')
        ->paginate(10);

        return view('admin.subcategories.index', compact('subcategories'));
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

        $categories = Category::pluck('name', 'id');
        //return $categories;
        return view('admin.subcategories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubcategoryStoreRequest $request)
    {
        $subcategory = Subcategories::create($request->all());
        //$this->authorize('pass', $subcategory);
        //$subcategory->category()->attach($request->get('categories'));
        return redirect()->route('subcategories.show', $subcategory->id);
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

        $subcategory = Subcategories::find($id);

        return view('admin.subcategories.show', compact('subcategory'));
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
        
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        $subcategory = Subcategories::find($id);
        return view('admin.subcategories.edit', compact('subcategory', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subcategory = Subcategories::find($id);

        $subcategory->fill($request->all())->save();

        return redirect()->route('subcategories.edit', $subcategory->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory = Subcategories::find($id)->delete();

        return back()->with('eliminar', 'ok');
    }
}