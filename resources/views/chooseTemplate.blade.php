@extends('index')


@section('page_title')
<section class="content-header">
                <h1>
                    <h1><i class="fa fa-folder-open"></i>    Templates</h1>
               </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i>My Projects</a></li>
                    
                    <li class="active">Templates</li>
                </ol>
            </section>
@endsection

@section('content')

<div class="container" style="margin-top:30px">
<div class="row">
<div class="col-md-4">
        <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Template1</h3>
            <div class="box-tools pull-right">
            <!-- Buttons, labels, and many other things can be placed here! -->
            <!-- Here is a label for example -->
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
           <img src="{{ asset('images/template1.jpg') }}   " style="width:100%;height:100%"/>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <a href="{{ route('microservices') }}">Select <i class="fa fa-arrow-right"></i></a>
        </div>

 </div>

 

</div> 
    <!-- Box1 End -->


<div class="col-md-4">
        <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Template2</h3>
            <div class="box-tools pull-right">
            <!-- Buttons, labels, and many other things can be placed here! -->
            <!-- Here is a label for example -->
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
           <img src="{{ asset('images/template2.jpg') }}   " style="width:100%;height:100%"/>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <a href="{{ route('microservices') }}">Select <i class="fa fa-arrow-right"></i></a>
        </div>

 </div>
</div>
<!-- Box2 End -->

<div class="col-md-4">
        <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Template3</h3>
            <div class="box-tools pull-right">
            <!-- Buttons, labels, and many other things can be placed here! -->
            <!-- Here is a label for example -->
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
           <img src="{{ asset('images/template3.jpg') }}   " style="width:100%;height:100%"/>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <a href="{{ route('microservices') }}">Select <i class="fa fa-arrow-right"></i></a>
        </div>

 </div>

 

</div>
<!-- Box3 End -->
</div>

</div>

@endsection