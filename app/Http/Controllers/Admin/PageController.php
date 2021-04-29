<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Subcategories;
use App\Post;

use Illuminate\Contracts\Events\Dispatcher;
use App\Http\Controllers\MenuFilterController;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getSubcategory($id){
        $subcategories_posts= Subcategories::where('category_id',$id)->get();
        return response()->json($subcategories_posts);
    }
    public function welcome(){
        $categories = Category::orderBy('id', 'ASC')->paginate();
        $subcategories = Subcategories::orderBy('id', 'ASC')->paginate();
        $data= ['categories'=>$categories, 'subcategories'=>$subcategories];
        return view('welcome',$data);
    }
  
    public function blog(Dispatcher $events){
        $menu = new MenuFilterController();
        $menu->menuFilter($events);

    	$posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);

    	return view('web.admin.posts', compact('posts'));
    }

    public function subcategory($slug){
        $subcategory = Subcategories::where('slug', $slug)->pluck('id')->first();
        $posts = Post::where('subcategory_id', $subcategory)
            ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);

        return view('web.admin.posts', compact('posts'));
    }


    public function post($slug, Dispatcher $events){
        $menu = new MenuFilterController();
        $menu->menuFilter($events);

    	$post = Post::where('slug', $slug)->first();

    	return view('web.admin.post', compact('post'));
    }
}
