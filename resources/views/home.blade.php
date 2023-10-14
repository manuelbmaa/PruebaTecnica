@extends('layouts.app')

@section('content')
    <section class="hero-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center">
                    <div class="d-flex flex-column align-items-center">
                        <h1>Bienvenido/a</h1>
                        <p>Este es un proyecto hecho en Laravel versión 10 para prueba técnica.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/col-banner.svg') }}" alt="Imagen de Banner">
                </div>
            </div>
        </div>
    </section>
@endsection
