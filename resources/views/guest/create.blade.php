@extends('layouts.app')

@section('content')
    <style>
        #carousel .carousel-item.slide1 {
            background-image: url("{{ asset('images/slider1.svg') }}");
        }

        #carousel .carousel-item.slide2 {
            background-image: url("{{ asset('images/slider2.svg') }}");
        }

        #carousel .carousel-item.slide3 {
            background-image: url("{{ asset('images/slider3.svg') }}");
        }

        #carousel .carousel-item {
            height: 50vh;
            width: 100%;
            min-height: 350px;
            background: no-repeat center center scroll;
            background-size: cover;
        }

        #carousel .carousel-inner .carousel-item {
            transition: -webkit-transform 2s ease;
            transition: transform 2s ease;
            transition: transform 2s ease, -webkit-transform 2s ease;
        }

        #carousel .carousel-item .caption {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 40px;
            color: white;
            animation-duration: 1s;
            animation-delay: 2s;
        }

        #carousel .caption h2 {
            animation-duration: 1s;
            animation-delay: 2s;
        }

        #carousel .caption p {
            animation-duration: 1s;
            animation-delay: 2.2s;
        }

        #carousel .caption a {
            animation-duration: 1s;
            animation-delay: 2.4s;
        }

        .modern-form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f8f9fa;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-control {
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
            font-size: 16px;
        }

        label {
            font-weight: bold;
            color: #333;
        }
    </style>
    <div class="container-fluid">
        <div id="carousel" class="carousel slide hero-slides" data-ride="carousel">
            <ol class="carousel-indicators">
                <li class="active" data-target="#carousel" data-slide-to="0"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active slide1">
                    <div class="container h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                                <div class="caption animated fadeIn">
                                    <h3 class="animated fadeInLeft">Slider 1</h3>
                                    <p class="animated fadeInRight">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Cras tristique nisl vitae luctus sollicitudin. Fusce consectetur sem eget dui
                                        tristique, ac posuere arcu varius.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item slide2">
                    <div class="container h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                                <div class="caption animated fadeIn">
                                    <h3 class="animated fadeInLeft">Slider 2</h3>
                                    <p class="animated fadeInRight">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Cras tristique nisl vitae luctus sollicitudin. Fusce consectetur sem eget dui
                                        tristique, ac posuere arcu varius.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item slide3">
                    <div class="container h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                                <div class="caption animated fadeIn">
                                    <h3 class="animated fadeInLeft">Slide 3</h3>
                                    <p class="animated fadeInRight">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Cras tristique nisl vitae luctus sollicitudin. Fusce consectetur sem eget dui
                                        tristique, ac posuere arcu varius.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/col1.svg') }}" height="200" width="400" class="card-img-top"
                        alt="Imagen 1">
                    <div class="card-body">
                        <h3 class="card-title">HomePage</h3>
                        <p class="card-text">Navega por el inicio del sitio web.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/col2.svg') }}" height="200" width="400" class="card-img-top"
                        alt="Imagen 5">
                    <div class="card-body">
                        <h3 class="card-title">Lista de usuarios</h3>
                        <p class="card-text">Visualiza una lista de usuarios registrados.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/col3.svg') }}" height="200" width="400" class="card-img-top"
                        alt="Imagen 6">
                    <div class="card-body">
                        <h3 class="card-title">Crea usuarios</h3>
                        <p class="card-text">Crea usuarios a partir del formulario.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <div class="jumbotron">
                <h1 class="display-4 mb-4">Despliega el modal</h1>
                <button type="button" class="btn btn-primary" id="openModalButton">Abrir
                    Modal</button>
            </div>
        </div>

        <div class="mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="instruction">
                            <h2>Por favor, completa el formulario:</h2>
                            <p>Proporciona la siguiente información:</p>
                            <ul>
                                <li>Nombre</li>
                                <li>Apellido</li>
                                <li>Edad</li>
                                <li>Email</li>
                                <li>Habilidades</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form class="modern-form" id="form-main" action="{{ route('somos-emkt.store') }}" method="POST">
                            @csrf
                            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                <label for="name">Nombre</label>
                                <input type="text" name="first_name" id="first_name" class="form-control"
                                    placeholder="Escribe tu nombre">

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                <label for="apellido">Apellido</label>
                                <input type="text" class="form-control" id="last_name" name="last_name"
                                    placeholder="Escribe tu apellido">
                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                                <label for="edad">Edad</label>
                                <input type="number" class="form-control" id="age" name="age"
                                    placeholder="Escribe tu edad">
                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Escribe tu correo electrónico">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="habilidades">Habilidades</label>
                                <div class="form-group">
                                    <label for="habilidades">(selecciona múltiples opciones)</label>
                                    <div class="checkbox-select">
                                        <label><input type="checkbox" name="hability[]" value="php"> PHP</label>
                                        <label><input type="checkbox" name="hability[]" value="html"> HTML</label>
                                        <label><input type="checkbox" name="hability[]" value="css"> CSS</label>
                                        <label><input type="checkbox" name="hability[]" value="laravel">
                                            Laravel</label>
                                        <label><input type="checkbox" name="hability[]" value="java"> Java</label>
                                        <label><input type="checkbox" name="hability[]" value="js">
                                            JavaScript</label>
                                        <label><input type="checkbox" name="hability[]" value="angular">
                                            Angular</label>
                                        <label><input type="checkbox" name="hability[]" value="node">
                                            Node.js</label>
                                        <label><input type="checkbox" name="hability[]" value="linux"> Linux</label>
                                        <label><input type="checkbox" name="hability[]" value="servidores">
                                            Servidores</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const openModalButton = document.getElementById("openModalButton");

            openModalButton.addEventListener("click", function() {
                Swal.fire({
                    title: "Título de la Alerta",
                    text: "Contenido de la alerta",
                    icon: "info"
                });
            });
        });
    </script>
@endsection
