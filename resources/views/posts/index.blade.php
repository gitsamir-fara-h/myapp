@extends('layouts.app')

@section('content')






<div class="row justify-content-center">


  {!! Form::open(['url' => 'posts', 'method'=>'get', 'class'=>'form-inline']) !!}
      <div class="form-group {!! $errors->has('q') ? 'has-error' : '' !!}">
        {!! Form::text('q', isset($q) ?  : null, ['class'=>'form-control', 'placeholder' => 'Search...']) !!}
        {!! $errors->first('q', '<p class="help-block">:message</p>') !!}
      </div>
    {!! Form::submit('Search', ['class'=>'btn btn-primary']) !!}
  {!! Form::close() !!}

    </div>
    @foreach ($posts as $post)


    <div class="row justify-content-center">


        <div class="col-md-8">


            <div class="card">
            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <h3 style="..."> {{$post->category_id}}</h3>
                <p class="burmese">{{$post->scategory}}</p>
                <p>

                  <img src="{{$post->image}}" alt="" class="img-thumbnail" width="100px" height="100px">
                    <img src="{{$post->photo}}" alt="" class="img-thumbnail" width="100px" height="100px">
                      <img src="{{$post->galery}}" alt="" class="img-thumbnail" width="100px" height="100px">

                </p>

                <div class="caption">
                  <h3 style="..." class="burmese">{{$post->title}}</h3>
                  <p class="burmese"> {{$post->prix}}$</p>


                    <p>
                      <a class="" href="{{route('post.edit',['id' =>$post->id ])}}">
                                <i class="fas fa-edit"></i>
                           </a>

                        <a class="" href="{{route('post.delete',['id' =>$post->id ])}}">
                                                          <i class="far fa-trash-alt"></i>
                                                  </a>
                    </p>


                </div>

              </div>
            </div>
        </div>
    </div>
</div>

        @endforeach
<div class="row justify-content-center">
            <div class="text-center">{{ $posts->links() }}</div></div>
@endsection
