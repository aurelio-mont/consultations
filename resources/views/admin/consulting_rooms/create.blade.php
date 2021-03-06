@extends('admin.layouts.admin')

@section('styles')
    {!! Html::style('css/formValidation.min.css') !!}
    <style>
        #map {
            height: 300px;
        }
    </style>
@endsection

@section('head')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Consultorios <small>Agregar Consultorio</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i> <a href="{{ url('/admin') }}">Inicio</a>
                </li>
                <li>
                    <i class="fa fa-map"></i> <a href="{{ url('/admin/consulting-room') }}">Consultorios</a>
                </li>
                <li class="active">
                    <i class="fa fa-map-marker"></i> Agregar Consultorio
                </li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Agregar Consultorio</div>
                <div class="panel-body">
                    {!! Form::open(['route'=>'admin.consulting-room.store','method'=>'POST','role'=>'form','class'=>'form-horizontal','id'=>'commentForm','files'=>true]) !!}
                        {{ csrf_field() }}

                        @include('admin.consulting_rooms.forms.consulting-room')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {!! Html::script('assets/js/add-consulting-room.js') !!}

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfkOiNa7u0lm3IZkPIACogMIb5E8FgcOY&libraries=places&callback=initAutocomplete" async defer></script>
@endsection
