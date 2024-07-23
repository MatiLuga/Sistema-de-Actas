@extends('layouts.app')

@section('content')
<!-- Meta tags and other head elements -->
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Bienvenido {{ Auth::user()->name ?? '' }} al Sistema de Actas
                </div>
                <div class="panel-body">
                    <!-- Contenedor del carrusel con fondo gris -->
                    <div class="carousel-container">
                        <!-- Carrusel de novedades -->
                        <div id="novedadesCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#novedadesCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#novedadesCarousel" data-slide-to="1"></li>
                                <li data-target="#novedadesCarousel" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="{{ asset('images/imagen1.jpg') }}" alt="Novedad 1">
                                    <div class="carousel-caption">
                                        <h3>Novedad 1</h3>
                                        <p>Descripción de la novedad 1</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="{{ asset('images/imagen2.jpg') }}" alt="Novedad 2">
                                    <div class="carousel-caption">
                                        <h3>Novedad 2</h3>
                                        <p>Descripción de la novedad 2</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="{{ asset('images/imagen3.jpg') }}" alt="Novedad 3">
                                    <div class="carousel-caption">
                                        <h3>Novedad 3</h3>
                                        <p>Descripción de la novedad 3</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#novedadesCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#novedadesCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
