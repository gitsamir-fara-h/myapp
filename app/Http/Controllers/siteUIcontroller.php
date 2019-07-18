<?php

namespace App\Http\Controllers;
use\App\Setting;
use\App\Post;
use\App\Tag;
use\App\Category;
use Illuminate\Http\Request;

class siteUIcontroller extends Controller
{







    public function index()
    {
        return view('index')->with('blog_name' , Setting::first()->blog_name)
                            ->with('categories' , Category::take(6)->get() )


                            ->with('first_post' , Post::orderBy('created_at','desc')->first())
                            ->with('second_post' , Post::orderBy('created_at','desc')->skip(1)->take(1)->get()->first())
                            ->with('third_post' , Post::orderBy('created_at','desc')->skip(2)->take(1)->get()->first())

                            ->with('fourth_post' , Post::orderBy('created_at','desc')->skip(3)->take(1)->get()->first())
                            ->with('five_post' , Post::orderBy('created_at','desc')->skip(4)->take(1)->get()->first())
                            ->with('six_post' , Post::orderBy('created_at','desc')->skip(5)->take(1)->get()->first())
                            ->with('php',  Category::find(1) )
                            ->with('jee',  Category::find(1) )
                            ->with('jevascript',  Category::find(1) )
                            ->with('java',  Category::find(1) )
                            ->with('settings', Setting::first() )
                            ->with('python',  Category::find(1) )
                            ->with('rubby',  Category::find(1) )
                             ;

// take hiya khodha chehal bghit mn categorie bghiti


    }



    public function showPost($slug)
    {

        $post      = Post::where('slug' , $slug)->first();
        $next_page = Post::where('id' , '>' ,$post->id)->min('id');
        $prev_page = Post::where('id' , '<' ,$post->id)->max('id');


        return view('posts.show')


                             ->with('post' , $post)
                             ->with('next' , Post::find($next_page))
                             ->with('prev' , Post::find($prev_page))
                            ->with('title' , $post->title)
                            ->with('blog_name' , Setting::first()->blog_name)
                            ->with('settings',  Setting::first() )

                            ->with('categories' , Category::take(5)->get() )   ;











    }



    public function category($id)
    {

        $category      = Category::where('id',$id)->firstOrFail() ;
$posts      = post::paginate(5) ;
        return view('categories.category')

                            ->with('title' , $category->name)
                            ->with('categories' , Category::take(5)->get() )
                            ->with('blog_name' , Setting::first()->blog_name)
                            ->with('settings',  Setting::first() )
                            ->with('name' , $category->name )
                            ->with('category' , $category )    ;

    }







}
