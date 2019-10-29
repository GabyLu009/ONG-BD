@extends("Tema/layout")
@section('content')

<table >
    <thead>
    <tr>
      <th>Id Director</th>
      <th>Nombre</th>
      <th>Apellido </th>
      <th>Apellido2 </th>
      <th>Cedula </th>
    </tr>
  </thead>
        @foreach ($director as $item)
          <tr>
          <td>{{$item->iddirector}}</td>    
          <td>{{$item->nombre}}</td>
          <td>{{$item->apellido1}}</td>
          <td>{{$item->apellido2}}</td>
          <td>{{$item->cedula}}</td>
          </tr>
        @endforeach
  </table>  
  @endsection