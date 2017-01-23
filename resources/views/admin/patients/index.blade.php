@extends('admin.layouts.admin')

@section('head')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Pacientes <small>Lista de Pacientes</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i> <a href="{{ url('/admin') }}">Inicio</a>
                </li>
                <li>
                    <i class="fa fa-user"></i> Pacientes
                </li>
                <li class="active">
                    <i class="fa fa-users"></i> Lista de Pacientes
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
                <div class="panel-heading">Lista de Pacientes</div>
                <div class="panel-body">
                    <table class="table table-hover table-striped" id="tablepatients">
                        <thead>
                            <tr>
                                <th>Apellidos</th>
                                <th>Nombre(s)</th>
                                <th>Teléfono</th>
                                <th>Celular</th>
                                <th>Correo Electrónico</th>
                                <th>Antigüedad</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {!!Html::script('js/delete-reg.js')!!}
    <script>
        $(document).ready(function(){
            $('#tablepatients').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "/admin/api/patients",
                "columns":[
                    {data: 'last_name'},
                    {data: 'name'},
                    {data: 'phone'},
                    {data: 'mobile'},
                    {data: 'email'},
                    {data: 'created_at', searchable: false},
                    {data: 'actions', searchable: false},
                ],
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json",
                }
            });
        });
    </script>
@endsection
