@extends('index')


@section('page_title')
<section class="content-header">
                <h1>
                    <h1><i class="fa fa-folder-open"></i>    My Projects</h1>
               </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">My Projects</li>
                </ol>
            </section>
@endsection
@section('content')

<div class="container">
            <a href="{{ route('create_project') }}" class="btn btn-md btn-primary" id="create_project_btn" style="margin-top:30px;margin-bottom:50px;"><i class="fa fa-plus"></i>   Create New </a>
        </div>
    
<!-- <div class="container">
<div class="row">
<div class="col-md-4">
        <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Project 1</h3>
            <div class="box-tools pull-right"> -->
            <!-- Buttons, labels, and many other things can be placed here! -->
            <!-- Here is a label for example -->
            <!-- <span class="label label-primary">Monitoring</span>
            </div> -->
            <!-- /.box-tools -->
        <!-- </div> -->
        <!-- /.box-header -->
        <!-- <div class="box-body">
           <img src="{{ asset('images/sb-admin-2.jpg') }}   " style="width:100%;height:100%"/>
        </div> -->
        <!-- /.box-body -->
        <!-- <div class="box-footer">
            <a href="sb-admin-2/index.html">Edit this Page <i class="fa fa-arrow-right"></i></a>
 </div>

 </div>

</div>
</div> -->

@endsection