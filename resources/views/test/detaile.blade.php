@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Detail </h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>Name : </strong> {{$test->name}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>prix : </strong> {{$test->prix}}
        </div>
      </div>
      <div class="col-md-12">
        <a href="{{route('test.index')}}" class="btn btn-sm btn-success">Back</a>
      </div>
    </div>
  </div>
@endsection
