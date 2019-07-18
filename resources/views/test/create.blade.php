@extends('layouts.app')
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>New test</h3>
      </div>
    </div>
{{--hadi boucle mta3 erreur ila kan f page --}}
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

    <form action="{{route('test.store')}}" method="post"   enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-md-8">
          <strong>Name:</strong>
          <input type="text" name="name" class="form-control" placeholder="Name">
        </div>
        <div class="col-md-8">
          <strong>Prix :</strong>
          <input type="text" name="prix" class="form-control" placeholder="prix">
        </div>
        <div class="col-md-8">
          <strong>image:</strong>
          <input type="file" name="url"  >
        </div>

        <div class="col-md-12">
          <a href="{{route('test.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>
@endsection
