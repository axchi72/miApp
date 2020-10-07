@extends("theme.$theme.template")

@section('titulo')
Inicio
@endsection

@section('contenido')
<!-- Main content -->
<div class="row">
    <div class="col-lg-12">
        <!-- Nivo-Slider -->
        <div class="slider-wrapper theme-light">
            <div id="slider" class="nivoSlider">
                <img class="img-thumbnail" src="{{asset("assets/js/nivo-slider/img/copemh_1.jpg")}}" />
                <img class="img-thumbnail" src="{{asset("assets/js/nivo-slider/img/copemh_2.jpg")}}" />
                <img class="img-thumbnail" src="{{asset("assets/js/nivo-slider/img/copemh_3.jpg")}}" />
                <img class="img-thumbnail" src="{{asset("assets/js/nivo-slider/img/copemh_4.jpg")}}" />
            </div>
        </div>
        <!-- /.nivo-slider -->
    </div>
</div>
<br />
<div class="content">
    <div class="container">
        @foreach ($posts as $post)
        <div class="row">
            <!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <img class="img-fluid pad img-thumbnail mt-4" src="{{Storage::url("img/posts/$post->foto")}}"
                            alt="Photo">
                    </div>
                </div>
            </div>
            <!-- /.col-lg-4 -->
            <!-- /.col-lg-8 -->
            <div class="col-lg-8">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5 class="card-title m-0">{{ $post->titulo}}</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">{{ $post->created_at}}</h6>

                        <p class="card-text">{{ getShorterString($post->contenido, 100)}}</p>
                        <a href="{{ route('mostrar.post', ['id' => $post->id])}}" class="btn btn-primary"><i
                                class="fas fa-book-reader"></i> Ver más</a>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
        <hr />
        @endforeach
        <div class="card-footer">
            {{ $posts->links() }}
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

@endsection
