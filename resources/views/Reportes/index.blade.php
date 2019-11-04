@extends('Tema.layout')
@section('content')
<a href="{{route('reporte1')}}" class="btn btn-block btn-primary btn-sm" target="_blank">
    <i class="fa fa-fw fa-plus-circle"></i> Crear Actuacion poblacion
</a>

<a href="{{route('reporte2')}}" class="btn btn-block btn-primary btn-sm" target="_blank">
    <i class="fa fa-fw fa-plus-circle"></i> Crear maximo Presupuesto
</a>
<a href="{{route('reporte3')}}" class="btn btn-block btn-primary btn-sm" target="_blank">
    <i class="fa fa-fw fa-plus-circle"></i> Crear minimo Presupuesto
</a>
<a href="{{route('reporte4')}}" class="btn btn-block btn-primary btn-sm" target="_blank">
    <i class="fa fa-fw fa-plus-circle"></i> Crear Max Inversion
</a>
<a href="{{route('reporte5')}}" class="btn btn-block btn-primary btn-sm" target="_blank">
    <i class="fa fa-fw fa-plus-circle"></i> Crear Min Inversion
</a>
<a href="{{route('reporte6')}}" class="btn btn-block btn-primary btn-sm" target="_blank">
    <i class="fa fa-fw fa-plus-circle"></i> Proyectos por Sede
</a>
<a href="{{route('reporte7')}}" class="btn btn-block btn-primary btn-sm" target="_blank">
    <i class="fa fa-fw fa-plus-circle"></i> Sede por Ciudad
</a>
@endsection