@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                            <div class="card-deck mb-3 text-center">
                                <div class="card mb-4 shadow-sm">
                                    <div class="card-header">
                                        <h4 class="my-0 font-weight-normal">Padrón de Establecimientos</h4>
                                    </div>
                                    <div class="card-body">
                                        <h1 class="card-title pricing-card-title"><small class="text-muted">texto1</small></h1>
                                        <ul class="list-unstyled mt-3 mb-4">
                                            <li>Único</li>
                                            <li>Actualizar datos</li>
                                            <li>Revizar padrón</li>
                                            <li>Ayuda sopbre el registro</li>
                                        </ul>
                                        <a href="{{ url('/formularioPadron') }}">
                                            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Iniciar Registro</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="card mb-4 shadow-sm">
                                    <div class="card-header">
                                        <h4 class="my-0 font-weight-normal">Informe Mensual</h4>
                                    </div>
                                    <div class="card-body">
                                        <h1 class="card-title pricing-card-title"><small class="text-muted">texto1</small></h1>
                                        <ul class="list-unstyled mt-3 mb-4">
                                            <li>mensual</li>
                                            <li>opcion 2</li>
                                            <li>opcion 3</li>
                                            <li>opcion 4</li>
                                        </ul>
                                        <button type="button" class="btn btn-lg btn-block btn-primary">Iniciar Informe</button>
                                    </div>
                                </div>
                                <div class="card mb-4 shadow-sm">
                                    <div class="card-header">
                                        <h4 class="my-0 font-weight-normal">Otra cosa</h4>
                                    </div>
                                    <div class="card-body">
                                        <h1 class="card-title pricing-card-title"><small class="text-muted">texto1</small></h1>
                                        <ul class="list-unstyled mt-3 mb-4">
                                            <li>example 1</li>
                                            <li>example 1</li>
                                            <li>example 1</li>
                                            <li>example 1</li>
                                        </ul>
                                        <button type="button" class="btn btn-lg btn-block btn-primary">Link</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
