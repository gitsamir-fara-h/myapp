@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Edit test Siswa</h3>
      </div>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Whoops! </strong> there where some problems with your input.<br>
        <ul>
          @foreach ($errors as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{route('test.update',$test->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-12">
          <strong>name :</strong>
          <input type="text" name="name" class="form-control" value="{{$test->name}}">
        </div>
        <div class="col-md-12">
          <strong>prix :</strong>
          <input type="text" name="prix" class="form-control" value="{{$test->prix}}">

        </div>

        <div class="col-md-8">
          <strong>image:</strong>
          <input type="file" name="url" class="form-control" value="{{$test->url}}" >
        </div>


        <div class="col-md-12">
          <a href="{{route('test.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
@endsection
