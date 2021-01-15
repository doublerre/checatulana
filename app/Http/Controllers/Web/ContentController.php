<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Subcategories;
use App\Post;

class ContentController extends Controller
{
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
    public function blog1(){
    	$posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);

    	return view('content', compact('posts'));
    }
  
    public function blog(){
    	$posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);

    	return view('web.client.articulos', compact('posts'));
    }

    public function subcategory($slug){
        $subcategory = Subcategories::where('slug', $slug)->pluck('id')->first();
        $posts = Post::where('subcategory_id', $subcategory)
            ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);

        return view('web.client.articulos', compact('posts'));
    }


    public function post($slug){
    	$post = Post::where('slug', $slug)->first();

    	return view('web.client.articulo', compact('post'));
    }

  

}
