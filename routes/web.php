<?php
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes(['verify' => true]);

Route::get('image-view','ImageController@index');
Route::post('image-view','ImageController@store');



Route::resource('items', 'ItemController');
Route::resource('books', 'BooksController');

Route::get('image/upload','ImageUploadController@fileCreate');
Route::post('image/upload/store','ImageUploadController@fileStore');
Route::post('image/delete','ImageUploadController@fileDestroy');



Route::get('form','FormController@create')->name('form');
Route::post('form','FormController@store');
Route::get('form','FormController@display');


Route::get('photo', 'PhotoController@index')->name('photo');
Route::post('photo', 'PhotoController@uploadImage');

Route::get('/Product', 'ProductController@index')->name('product');
Route::post('/Product', 'ProductController@uploadImage');



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'UserController@profile');
Route::post('/profile', 'UserController@update_avatar');

Route::get('/employee', 'EmployeeController@index');
Route::post('/employee', 'EmployeeController@store')->name('addimage');
Route::get('/employeepage', 'EmployeeController@display');

Route::get('/e', 'EmployeeController@index');
Route::post('/e', 'EmployeeController@store')->name('addimage');
Route::get('/ep', 'EmployeeController@display');





route::post('/home','homeController@store');
route::put('/home','homeController@update');
route::delete('/home','homeController@delete');

Route::get('/image-gallery', 'ImageGalleryController@index');
Route::post('/image-gallery', 'ImageGalleryController@upload');
Route::delete('/image-gallery/{id}', 'ImageGalleryController@destroy');



Route::group([ 'middleware'=>'auth'], function () {

  Route::get('/posts', 'PostsController@index')->name('posts');
  Route::get('/post/trashed', 'PostsController@trashed')->name('post.trashed');
  Route::get('/post/hdelete/{id}', 'PostsController@hdelete')->name('post.hdelete');
  Route::get('/post/restore/{id}', 'PostsController@restore')->name('post.restore');
  Route::get('/post/edit/{id}', 'PostsController@edit')->name('post.edit');
  Route::post('/post/update/{id}', 'PostsController@update')->name('post.update');
  Route::get('/post/create', 'PostsController@create')->name('post.create');
  Route::post('/post/store', 'PostsController@store')->name('post.store');
  Route::get('/post/delete/{id}', 'PostsController@destroy')->name('post.delete');

  route::resource('test','TestController');



  //route for Categories
 Route::get('/categories', 'CategoriesController@index')->name('categories');
 Route::get('/category/edit/{id}', 'CategoriesController@edit')->name('category.edit');
 Route::get('/category/delete/{id}', 'CategoriesController@destroy')->name('category.delete');
 Route::get('/category/create', 'CategoriesController@create')->name('category.create');
 Route::post('/category/store', 'CategoriesController@store')->name('category.store');
 Route::post('/category/update/{id}', 'CategoriesController@update')->name('category.update');


 Route::get('/tags', 'TagController@index')->name('tags');
 Route::get('/tag/edit/{id}', 'TagController@edit')->name('tag.edit');
 Route::get('/tag/delete/{id}', 'TagController@destroy')->name('tag.delete');
 Route::get('/tag/create', 'TagController@create')->name('tag.create');
 Route::post('/tag/store', 'TagController@store')->name('tag.store');
 Route::post('/tag/update/{id}', 'TagController@update')->name('tag.update');


 Route::get('/users', 'UsersController@index')->name('users');
 Route::get('/users/admin/{id}', 'UsersController@admin')->name('users.admin'); //->middleware('admin');
 Route::get('/users/notadmin/{id}', 'UsersController@notAdmin')->name('users.not.admin');
 Route::get('/users/create', 'UsersController@create')->name('users.create');
 Route::post('/users/store', 'UsersController@store')->name('users.store');
 Route::get('/users/delete/{id}', 'UsersController@destroy')->name('users.delete');


 //route for user profile
 Route::get('/users/profile', 'ProfilesController@index')->name('users.profile');
 Route::post('/users/profile/update', 'ProfilesController@update')->name('users.profile.update');
 Route::get('/users/profile/create', 'ProfilesController@create')->name('users.profile.create');

 Route::get('/settings', 'SettingsController@index')->name('settings');
 Route::post('/settings/update', 'SettingsController@update')->name('settings.update');

 Route::get('/', 'siteUIcontroller@index')->name('index');
 Route::get('/category/{id}', 'siteUIcontroller@category')->name('category.show');




















 Route::get('/tag/{id}', 'siteUIcontroller@tag')->name('tag.show');


 Route::get('/post/{slug}', 'siteUIcontroller@showPost')->name('post.show');




  Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');


  Route::get('/results', function () {
      $post = App\Post::where('title', 'like' ,  '%' . request('search') . '%' )->get();

      return view('results.results')
      ->with('posts' , $post )
      ->with('title' ,  'Result : '. request('search') )
      ->with('settings',  App\Setting::first() )
      ->with('blog_name' , App\Setting::first()->blog_name)
      ->with('categories' , App\Category::take(5)->get() )
      ->with('query' , request('search') )   ;

  }) ;

  Route::get('/ds', function (Request $request) {
  
        $prod = $request->input('prix');

        $posts = DB::table('posts')
        ->whereRaw('prix ' >= ' $prod' )
        ->get();
         
        return view('results.res')

        ->with('posts' , $posts )
      ->with('title'  )
      ->with('settings',  App\Setting::first() )
      ->with('blog_name' , App\Setting::first()->blog_name)
      ->with('categories' , App\Category::take(5)->get() )
      ->with('query'  )   ;



}) ;

 























  


}) ;
