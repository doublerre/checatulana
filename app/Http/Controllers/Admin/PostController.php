<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;

use App\Post;
use App\Category;
use App\Subcategories;

use Illuminate\Contracts\Events\Dispatcher;
use App\Http\Controllers\MenuFilterController;


class PostController extends Controller
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

        $posts = Post::orderBy('id', 'DESC')
            ->where('user_id', auth()->user()->id)
            ->paginate();

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Dispatcher $events)
    {
        //$categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        $menu = new MenuFilterController();
        $menu->menuFilter($events);

        $subcategories= Subcategories::orderBy('name', 'ASC')->pluck('name', 'id');

        return view('admin.posts.create', compact('subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {
        $post = Post::create($request->all());
        //$this->authorize('pass', $post);

        //IMAGE 
        if($request->file('image')){
            $path = Storage::disk('public')->put('image',  $request->file('image'));
            $post->fill(['file' => asset($path)])->save();
        }
        //TAGS
       // $post->subcategories()->attach($request->get('subcategories'));

        return redirect()->route('posts.show', $post->id);
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

        $post = Post::find($id);
        //$this->authorize('pass', $post);

        return view('admin.posts.show', compact('post'));
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
        

        //$categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        $subcategories= Subcategories::orderBy('name', 'ASC')->pluck('name', 'id');
        $post= Post::find($id);
        if($post == null || $post->user_id != auth()->user()->id){
            abort(404);
        }else{
            return view('admin.posts.edit', compact('post','subcategories'));
        }
       // $this->authorize('pass', $post);

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, $id)
    {
        $post = Post::find($id);
        //$this->authorize('pass', $post);

        $post->status = "DRAFT";
        $post->validated = 0;

        $post->fill($request->all())->save();

        //IMAGE 
        if($request->file('image')){
            $path = Storage::disk('public')->put('image',  $request->file('image'));
            $post->fill(['file' => asset($path)])->save();
        }

        //TAGS
       // $post->categories()->sync($request->get('categories'));

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id)->delete();
        //$this->authorize('pass', $post);

        return back()->with('eliminar','ok');
    }

    //Funcion de envio a revision de post.
    public function send_review($id)
    {
        $post = Post::find($id);
        $post->validated = 1;
        $post->save();
        alert()->success('Éxito', 'Post enviado a revisión.');
        return redirect()->back();
    }
}
