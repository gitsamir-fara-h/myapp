@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create New Item
            	</div>

                <div class="panel-body">
                    {!! Form::open(['method' => 'POST', 'route' => 'items.store', 'enctype' => 'multipart/form-data']) !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {!! Form::label('name', 'Name') !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        </div>

                        <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
                            {!! Form::label('quantity', 'Quantity') !!}
                            {!! Form::text('quantity', null, ['class' => 'form-control']) !!}
                            <small class="text-danger">{{ $errors->first('quantity') }}</small>
                        </div>

                        <div class="input-group control-group increment" >
                          <input type="file" name="image[]" class="form-control" multiple>
  </div>



























                        <br>
  <div class="form-group">
    <!-- Large modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">


<a href="/image-view">more image </a>
</div>
</div>
</div>

<!-- Small modal -->


    </div>


                        {!! Form::submit("Create Item", ['class' => 'btn btn-info btn-block']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>




</div>
@endsection
