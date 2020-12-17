@extends("theme.$theme.template")

@section('titulo')
{{$post->titulo}}
@endsection

@section('contenido')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{$post->titulo}}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{'inicio'}}">Inicio</a></li>
                    <li class="breadcrumb-item active">{{$post->titulo}}</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<div class="content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{$post->created_at}}</h3>
                <div class="card-tools">
                    <a href="{{ route('inicio') }}" class="btn btn-block btn-outline-primary">
                        <i class="fas fa-reply-all"></i> Volver al inicio
                    </a>
                </div>
            </div>
            <div class="card-body">

            </div>
            <div class="card-footer">
            </div>
        </div>
    </div>
</div>

<!-- /.content -->
@endsection
