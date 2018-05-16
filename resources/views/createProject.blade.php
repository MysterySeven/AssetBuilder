@extends('index')


@section('page_title')
<section class="content-header">
                <h1>
                    <h1><i class="fa fa-folder-open"></i>    Categories</h1>
               </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i>My Projects</a></li>
                    
                    <li class="active">Categories</li>
                </ol>
            </section>
@endsection

@section('content')

<div class="container" style="margin-top:30px">
<div class="row">
<div class="col-md-3">
        <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Monitoring</h3>
            <div class="box-tools pull-right">
            <!-- Buttons, labels, and many other things can be placed here! -->
            <!-- Here is a label for example -->
            <span class="label label-primary">Monitoring</span>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
           <img src="{{ asset('images/sb-admin-2.jpg') }}   " style="width:100%;height:100%"/>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <a href="{{ route('microservices') }}">Select <i class="fa fa-arrow-right"></i></a>
        </div>

 </div>

 

</div> 
    <!-- Box1 End -->


<div class="col-md-3">
        <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Health Service</h3>
            <div class="box-tools pull-right">
            <!-- Buttons, labels, and many other things can be placed here! -->
            <!-- Here is a label for example -->
            <span class="label label-primary">Health Service</span>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
           <img src="{{ asset('images/sb-admin-2.jpg') }}   " style="width:100%;height:100%"/>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <a href="sb-admin-2/index.html">Select <i class="fa fa-arrow-right"></i></a>
        </div>

 </div>
</div>
<!-- Box2 End -->

<div class="col-md-3">
        <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">E-Commerce</h3>
            <div class="box-tools pull-right">
            <!-- Buttons, labels, and many other things can be placed here! -->
            <!-- Here is a label for example -->
            <span class="label label-primary">E-Commerce</span>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
           <img src="{{ asset('images/sb-admin-2.jpg') }}   " style="width:100%;height:100%"/>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <a href="sb-admin-2/index.html">Select <i class="fa fa-arrow-right"></i></a>
        </div>

 </div>

 

</div>
<!-- Box3 End -->
</div>

</div>

@endsection