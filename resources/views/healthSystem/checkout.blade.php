@extends('index')

@section('content')
@foreach($array_features as $features)

    @if($features == "Database")
<div class="col-lg-4">
    <div class="box col-lg-4 box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Database Microservice</h3>
          <div class="box-tools pull-right">
            <!-- Buttons, labels, and many other things can be placed here! -->
            <!-- Here is a label for example -->
            <span class="label label-primary">TRY!!!</span>
          </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
        <a href="{{ route('call') }} " class="btn btn-primary">Click Here!</a>
        </div><!-- /.box-body -->
        
      </div><!-- /.box -->
</div>
      
    @else  
    <div class="alert alert-warning">
    <strong>Warning!</strong> No Microservice Available.
    </div>
    @endif
@endforeach
@endsection