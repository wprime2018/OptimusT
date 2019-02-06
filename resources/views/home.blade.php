@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Cargas</h1>
@stop

@section('css')
    <!--<link rel="stylesheet" href="{{ asset('css/styleFormLogin.css') }}">-->
    <!--<link rel="stylesheet" href="{{ asset('css/style.css') }}">-->
    <link rel="stylesheet" href="{{ asset('vendor/fonts/material-icon/css/material-design-iconic-font.min.css') }}">
@stop

@section('content')
    @include('painel.includes.alerts')
    <div class="row">
        <div class="col-sm-6">
            @include('painel.rotas.cadRotas')
        </div>
        <div class="col-sm-6">
            <div id="map" style="width: 500px; height: 500px;">
                {!! Mapper::render() !!}
            </div>
        </div>
    </div>
@stop
