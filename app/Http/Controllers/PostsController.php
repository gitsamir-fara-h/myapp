<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Tag;
use Image;
use Illuminate\Support\Facades\Input;
use File;
use DB;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

      $q = $request->get('q');


            return view('posts.index')
                                       ->with('posts',Post::where('title', 'LIKE', '%'.$q.'%')
                                       ->orderBy('id','desc')->paginate(4))

                                      ;
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


      $categories = Category::all();
      if ($categories->count() ==0   ) {

          return redirect()->route('category.create') ;

      }





      return view('posts.create')->with('categories',$categories)
      ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
// validate c'est valide les champs

              $this->validate($request,[
                  "title"    => "required",
                  "prix"  => "required",
                  "category_id"  => "required",
                  "image" => "required|image",
                  'photo' => 'image',
                  'galery' => 'image'

              ]);


             if($request->hasFile('image') && $request->hasFile('galery') && $request->hasFile('photo')) {

                $image = $request->image;
                $image_new_name = time().$image->getClientOriginalName();
                $image->move('uploads/posts',$image_new_name);
                $galery= $request->galery;
                $galery_new_name = time().$galery->getClientOriginalName();
                $galery->move('uploads/posts',$galery_new_name);

                $photo= $request->photo;
                $photo_new_name = time().$photo->getClientOriginalName();
                $photo->move('uploads/posts',$photo_new_name);



                $post = Post::create([
                    "title"    => $request->title,
                    "prix"  => $request->prix,
                    "scategory"  => $request->scategory,
                    "category_id"  => $request->category_id,
                    "image" => 'uploads/posts/'.$image_new_name,
                    "galery" => 'uploads/posts/'.$galery_new_name,
                    "photo" => 'uploads/posts/'.$photo_new_name,
                ]);

         }else if ( $request->hasFile('image') && $request->hasFile('photo')) {
                   $image = $request->image;
                   $image_new_name = time().$image->getClientOriginalName();
                   $image->move('uploads/posts',$image_new_name);

                   $photo = $request->photo;
                   $photo_new_name = time().$photo->getClientOriginalName();
                   $photo->move('uploads/posts',$photo_new_name);

                   $post = Post::create([
                       "title"    => $request->title,
                       "prix"  => $request->prix,
                       "scategory"  => $request->scategory,
                       "category_id"  => $request->category_id,
                       "image" => 'uploads/posts/'.$image_new_name,
                       "photo" => 'uploads/posts/'.$photo_new_name,



                   ]);
                 }else if ($request->hasFile('image') && $request->hasFile('galery') ) {

                                 $image = $request->image;
                                 $image_new_name = time().$image->getClientOriginalName();
                                 $image->move('uploads/posts',$image_new_name);
                                 $galery= $request->galery;
                                 $galery_new_name = time().$galery->getClientOriginalName();
                                 $galery->move('uploads/posts',$galery_new_name);

                                 $post = Post::create([
                                     "title"    => $request->title,
                                     "prix"  => $request->prix,
                                     "scategory"  => $request->scategory,
                                     "category_id"  => $request->category_id,
                                     "image" => 'uploads/posts/'.$image_new_name,
                                     "galery" => 'uploads/posts/'.$galery_new_name,



                                 ]);


                 }
                 else {


  $image = $request->image;
  $image_new_name = time().$image->getClientOriginalName();
  $image->move('uploads/posts',$image_new_name);




  $post = Post::create([
      "title"    => $request->title,
      "prix"  => $request->prix,
      "scategory"  => $request->scategory,
      "category_id"  => $request->category_id,
      "image" => 'uploads/posts/'.$image_new_name,
      


  ]);


}


           return redirect()->back();


  }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $post = Post::find($id);
      return view('posts.edit')->with('posts',$post)
      ->with('categories',Category::all());
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

      $post = Post::find($id);

      $this->validate($request,[
          "title"    => "required",
          "prix"  => "required",
          "category_id"  => "required"

      ]);


      if ( $request->hasFile('image')  ) {
          $image= $request->image;
          $image_new_name = time().$image->getClientOriginalName();
          $image->move('uploads/posts/',$image_new_name);

          $post->image = 'uploads/posts/'.$image_new_name;

      }

      if ( $request->hasFile('photo')  ) {
          $photo = $request->photo;
          $photo_new_name = time().$photo->getClientOriginalName();
          $photo->move('uploads/posts/',$photo_new_name);

          $post->photo = 'uploads/posts/'.$photo_new_name;

      }

      if ( $request->hasFile('galery')  ) {
          $galery = $request->galery;
          $galery_new_name = time().$galery->getClientOriginalName();
          $galery->move('uploads/posts/',$galery_new_name);

          $post->galery = 'uploads/posts/'.$galery_new_name;

      }



     // dd($post);
      $post->title =  $request->title;
      $post->prix =  $request->prix;
      $post->category_id = $request->category_id;
      $post->scategory = $request->scategory;
      $post->save();



      return redirect()->route('posts');
  }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $post = Post::find($id);
      $post->delete($id);
      return redirect()->back();
    }

    public function search(Request $request)
    {
        $q = $request->get('q');
        $post = Post::where('title', 'LIKE', '%'.$q.'%')->orderBy('title')->paginate(5);
        return view('posts.index', compact('posts'));
    }



    public function list(Request $request)
    {
         $prod = $request->input('prix');
        $prods = Post::all()->whereRaw('prix >= $prod');
        echo dd($prods);
        
        
        
    }



}
