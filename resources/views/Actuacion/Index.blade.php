@extends("Tema/layout")
@section('styles')
<link rel="stylesheet" href="{{asset("Plantilla/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css")}}">
<link rel="stylesheet" href="{{asset("Plantilla/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css")}}">    
@endsection
@section('content')

<table >
    <thead>
    <tr>
      
    </tr>
  </thead>
        
  </table>  
  <div class="animated fadeIn">
      <div class="row">        
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                    <div class="col-md-3 pull-right">
                      <strong class="card-title">Actuación</strong>
                    </div>
                      <div class="col-md-3" style="margin-left:50%">
                            <a href="{{route('actuacion_create')}}" class="btn btn-block btn-primary">
                                    <i class="fa fa-fw fa-plus-circle"></i> Crear actuación
                            </a>
                          </div>
                  </div>
                  <div class="card-body">
                      <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                          <thead>
                              <tr>
                                <th>Id de la actuación</th>
                                  <th>Inversión del proyecto</th>
                                  <th>Descripción de la actuación</th>
                                  <th>Id de la población </th>
                                  <th>Código del proyecto</th>
                                  <th>Acciones</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($actuacion as $item)
                              <tr>
                             <td>{{$item->idactuacion}}</td>
                              <td>{{$item->inversion}}</td>    
                              <td>{{$item->descripcion}}</td>
                              <td>{{$item->idpoblacion}}</td>
                              <td>{{$item->codigop}}</td>
                              <td>
                                <a href="/Actuacion/{{$item->idactuacion}}/edit" class="btn btn-success">
                                    <i class="fa fa-pencil"></i></a>
                                <form action="{{route('actuacion_delete', ['Actuacion' => $item->idactuacion])}}" method="POST">
                                  @csrf <input name="_method" type="hidden" value="DELETE">
                                  <button type="submit" class="btn btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </button>
                                </form>
                              </td>
                              </tr>
                              @endforeach
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>


      </div>
  </div><!-- .animated -->

  @endsection
  
@section('scripts')
  <script src="{{asset("Plantilla/vendors/datatables.net/js/jquery.dataTables.min.js")}}"></script>
  <script src="{{asset("Plantilla/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
  <script src="{{asset("Plantilla/vendors/datatables.net-buttons/js/dataTables.buttons.min.js")}}"></script>
  <script src="{{asset("Plantilla/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js")}}"></script>
  <script src="{{asset("Plantilla/vendors/jszip/dist/jszip.min.js")}}"></script>
  <script src="{{asset("Plantilla/vendors/pdfmake/build/pdfmake.min.js")}}"></script>
  <script src="{{asset("Plantilla/vendors/pdfmake/build/vfs_fonts.js")}}"></script>
  <script src="{{asset("Plantilla/vendors/datatables.net-buttons/js/buttons.html5.min.js")}}"></script>
  <script src="{{asset("Plantilla/vendors/datatables.net-buttons/js/buttons.print.min.js")}}"></script>
  <script src="{{asset("Plantilla/vendors/datatables.net-buttons/js/buttons.colVis.min.js")}}"></script>
  <script src="{{asset("Plantilla/assets/js/init-scripts/data-table/datatables-init.js")}}"></script>
  @endsection