@extends("theme.$theme.template")

@section('titulo')
Inicio
@endsection

@section('contenido')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-8">
                <h1 class="m-0 text-dark">Colegio de Profesores de Educación Media de Honduras <small>COPEMH</small>
                </h1>
            </div><!-- /.col -->
            <div class="col-sm-4">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('inicio')}}">Inicio</a></li>
                    <li class="breadcrumb-item active">Quienes Somos</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Misión</h5>
                        <p class="card-text">
                            Somos una organización gremial con alto de compromiso con nuestros afiliados y afiliadas,
                            garantizamos el fiel cumplimiento de las leyes educativas y conexas, propiciamos el goce de
                            sus derechos; proporcionando servicios personalizados que se fundamentan en la dignificación
                            de la carrera docente y la defensa de una escuela pública de calidad.
                        </p>
                    </div>
                </div>

                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <h5 class="card-title">Visión</h5>
                        <p class="card-text">
                            Ser una organización gremial, líder en defensa de los docentes, con solvencia financiera,
                            solidaridad en las luchas de otros sectores de la sociedad hondureña y compromiso con la
                            educación pública de la calidad.
                        </p>
                    </div>
                </div><!-- /.card -->
            </div>
            <!-- /.col-md-6 -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title m-0">Organismos del COPEMH</h5>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Asamblea</li>
                            <li>Junta Directiva Central</li>
                            <li>Fondo del Auto Seguro</li>
                            <li>Consejo Consultivo</li>
                            <li>Tribunal de Honor</li>
                            <li>Filiales Municipales</li>
                            <li>Filiales de Institutos.</li>
                        </ul>


                    </div>
                </div>
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <!-- /.col-md-6 -->
            <div class="col-lg-6">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5 class="card-title m-0">Creación</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Con la fundación de la Escuela Superior del Profesorado “Francisco
                            Morazán” en 1957 y por ende la primera promoción de profesores de educación media se vio la
                            necesidad de crear una organización que los aglutinara. Es así que en 1959 surgen la
                            Asociación Hondureña profesores Graduados de Educación Media (AHPEGEM) la cual obtiene su
                            personería jurídica en 1960.</h6>

                        <p class="card-text">En 1962 se emite la ley de colegiación Profesional Obligatoria la cual
                            determina que todos los maestros en servicio deberán estar colegiados (Art.177 de la
                            Constitución de la República). Esta medida de carácter cultural indujo, inicialmente, a los
                            profesionales a alejarse del resto de los trabajadores asalariados y olvidarse de su
                            obligación histórica de luchar junto a ellos en la real democratización de honduras.</p>
                        <p class="card-text">
                            En diciembre de 1969, 200 educadores en su mayoría integrantes de la AHPGEM, celebraron una
                            reunión en la que se aprobó convertir esta asociación en el Colegio de Profesores de
                            Educación Media de Honduras (COPEMH) y fue hasta el 12 de febrero de 1971 que logró su
                            personalidad jurídica.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5 class="card-title m-0">Fines de COPEMH</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">ARTÍCULO 2. El Colegio de Profesores de Educación Media de Honduras,
                            persigue las siguientes finalidades:</h6>

                        <p class="card-text">
                            <ol>
                                <li>Contribuir como cuerpo colegiado a la defensa de la soberanía nacional y de la
                                    integridad de la República.
                                </li>
                                <li>Proteger el ejercicio de la carrera de magisterio.</li>
                                <li>Velar por la aplicación correcta de las leyes que regulan la educación.</li>
                                <li>Proteger la libertad de cátedra.</li>
                                <li>Colaborar con el Estado en el estudio y solución de los problemas nacionales,
                                    preferentemente en los de carácter educativo.</li>
                                <li>Colaborar con el Estado en la emisión de leyes que beneficien la cultura y educación
                                    nacionales.</li>
                                <li>Participar en la elaboración de los planes y programas de estudio de los diferentes
                                    niveles de la educación nacional.</li>
                                <li>Luchar porque en nuestro sistema educativo se mantenga la primacía de los valores
                                    nacionales.</li>
                                <li>Propugnar la unidad del Magisterio hondureño.</li>
                                <li>Propiciar el acercamiento con las demás organizaciones magisteriales de Centro
                                    América y del mundo.</li>
                                <li>Defender los derechos de los colegiados y velar porque éstos cumplan con sus deberes
                                    en el ejercicio profesional.</li>
                                <li>Vigilar y sancionar la conducta profesional de los colegiados.</li>
                                <li>Procurar el perfeccionamiento profesional de los colegiados y el mejoramiento de sus
                                    condiciones de vida y de trabajo.</li>
                                <li>Lograr un plan de becas para el colegio, con el objeto de que sus afiliados tengan
                                    la oportunidad de realizar estudios superiores, en el país o en el extranjero.</li>
                                <li>Fomentar la solidaridad y ayuda mutua entre los colegiados.</li>
                                <li>Cooperar y mantener relaciones con las organizaciones profesionales, obreras y
                                    campesinas del país.</li>
                                <li>Editar y sostener órganos de divulgación profesional y cultural; y,</li>
                                <li>Estimular las aptitudes y la capacidad creadora de los colegiados, en los diferentes
                                    aspectos de la cultura.</li>
                            </ol>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

@endsection
