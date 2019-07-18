@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>
                <div class="card-body">
                    @if(count($errors)>0)
                    <ul class="navbar-nav mr-auto">
                            @foreach ($errors->all() as $error)
                            <li class="nav-item active">
                                     {{$error}}
                                  </li>
                            @endforeach
                          </ul>
                          @endif

                    <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field()}}
                               <div class="form-group">
                                    <label for="exampleFormControlSelect1">Category :</label>
                                    <select class="form-control" name="category_id" id="category">
                                     @foreach ($categories as $category)
                                     <option value="{{$category->id}}" >{{$category->name}}</option>
                                     @endforeach
                                    </select>
                                  </div>

                        <div class="form-group">
                          <label for="title">Nom d'article :</label>
                          <input type="text" class="form-control" name="title"  placeholder="Nom d'article *">
                         </div>


                         <div class="form-group">
                           <label for="title">Prix :</label>
                           <input type="number" class="form-control" name="prix"  placeholder="Enter prix $ *">
                          </div>

            <label for="title">Sous Categories * :</label>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Launch demo modal
                              </button>

                              <!-- Modal -->
                              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <div class="form-group">
                                        <input type="text" class="form-control" name="scategory"  placeholder="Sous Categorie *">


                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">SAVE</button>

                                    </div>
                                  </div>
                                </div>
                              </div>




                          <div class="input-group control-group increment" >
                            <input type="file" name="image" class="form-control" >

                          </div>
                          <div class="input-group control-group increment" >
                            <input type="file" name="photo" class="form-control" >

                          </div>
                          <div class="input-group control-group increment" >
                            <input type="file" name="galery" class="form-control" >

                          </div>


                        <button type="submit" class="btn btn-primary">Save</button>
                      </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
@section('styles')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
@endsection
@section('scripts')
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js" defer></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

@endsection
