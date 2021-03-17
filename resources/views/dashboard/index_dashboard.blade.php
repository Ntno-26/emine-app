@extends ('layout.master')
<!--<li class="active">Dashboard v2</li>-->
@section('content') 

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">

            <h1 class="page-header">BIENVENIDO <?php //echo Session::get('name');?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>


<!-- Example DataTables Card-->
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Inicio</div>
    <div class="card-body">
        <img src="imagenes_EPICentro/gal_8.jpg" width="1000" height="400" alt="GALERIA"/>
    </div>
    <div class="card-footer small text-muted">EPICENTRO</div>
</div>

@endsection

@section('content_script') 


@endsection