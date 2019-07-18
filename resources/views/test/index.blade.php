@extends('layouts.app')
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h3>List des livres Siswa</h3>
      </div>
      <div class="col-sm-2">
  <a class="btn btn-sm btn-success" href="/test/create">Create New Biodata</a>
      </div>
    </div>
{{-- il kant had creation s7i7a titl3 lik had l msg f had l aler f dak l msg  --}}

    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif

    <table class="table table-hover table-sm">
      <tr>
        <th width = "50px"><b>No.</b></th>
        <th width = "300px">Name</th>
          <th width = "300px">prix </th>
           <th>image</th>
        <th width = "180px">Action</th>
      </tr>
{{-- han wahd l boucle tathet dok les noms lijbti mn table --}}
      @foreach ($tests as $test)
        <tr>
          <td><b>{{++$i}}.</b></td>
          <td>{{$test->name}}</td>
          <td>{{$test->prix}}</td>
          <td>
            <img
            src="{{$test->url}}" alt=" {{$test->url}}" class="img-thumbnail" style="width:80px; height:80px;  margin-right:25px;">
          </td>



          <td>
            <form action="{{ route('test.destroy', $test->id) }}" method="post">
              <a class="btn btn-sm btn-success" href="{{route('test.show',$test->id)}}">Show</a>
            <a class="btn btn-sm btn-warning" href="{{route('test.edit',$test->id)}}">Edit</a>

              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </table>

{!! $tests->links() !!}
  </div>
@endsection
