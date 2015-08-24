@extends('skeleton')

@section('title')
    Crea un paseo!
@endsection

@section('content')
    <div class="container">
        <p class="text-warning"><strong>TODO:</strong> añadir una lista de las actividades de este paseo, con la opción de gestionarlas: cambiar de orden, poner descripción, poner hora, orden automático? y quitar?</p>
        <p class="text-danger">
            <strong>TODO:</strong> Pero primero tal vez deberías jugar con el post, y conseguir que lo que ya tienes se almacene en la base de datos ;) ah! y no olvides añadir las migraciones para guardar el latlng del destino, y el de las actividades... pero el de las actividades creo que deberías hacerlo cuando termines el primer issue... uff!!! un gran trabajo por delante con este issue y el anterior!!! choose wiselly... <code>X3 button pressed. The system is going halt</code>
        </p>

        <h1 class="text-center">Crea un paseo!</h1>

        <div class="container">
            <div class="row">
                <p id="page-status" class="text-center">
                    Por favor espera mientras la página se carga...
                </p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <!-- markers place... -->
                <div class="col-sm-3">
                    <div class="btn-group-vertical right-block pull-right" role="group">
                        <button type="button" class="btn btn-default mark-placer"
                                id="mark-destination">
                            <img src="/img/destination.png" />
                            Poner punto de destino
                        </button>

                        <button type="button" class="btn btn-default mark-placer"
                                id="mark-origin">
                            <img src="/img/origin.png" />
                            Poner punto de origen
                        </button>

                        <button type="button" class="btn btn-default mark-placer"
                                id="mark-activity">
                            <img src="/img/activity.png" />
                            Añadir actividad
                        </button>

                        <button type="button" class="btn btn-default mark-placer"
                                id="remove-activity">
                            <img src="/img/remove-activity.png" />
                            Eliminar actividad
                        </button>

                        <button type="button" class="btn btn-default mark-placer"
                                id="analize">
                            <img src="/img/analize.png" />
                            Analizar punto
                        </button>
                    </div>
                </div>

                <!-- THE MAP! -->
                <div class="col-sm-9">
                    <div id="adventure-map" class="map center-block"></div>
                </div>
            </div>
        </div>

        <div class="container">
            {!! Form::open(['route' => 'wasd',
                            'class' => 'form',
                            'method' => 'post']) !!}

            <div class="form-group">
                <label for="destination"> Destino </label>
                <input type="text" class="form-control" name="destination" placeholder="El nombre del lugar al que se dirigirán los aventureros" />
            </div>

            <input type="hidden" name="destination-lat-lng" />
            <input type="hidden" name="origin-lat-lng" />
            <input type="hidden" name="map-zoom" />
            <input type="hidden" name="activities" />

            <p>
                <button type="submit" class="btn btn-success btn-lg btn-block center-block">
                    CREAR!
                </button>
            </p>

            {!! Form::close() !!}
        </div>

    </div>

@endsection

@section('styles');
    <link rel="stylesheet" href="google-maps.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="create-travel.css" type="text/css" media="screen" />
@endsection

@section('scripts')
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="create-travel.js"></script>
@endsection
