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
                      <strong class="card-title">Pais</strong>
                    </div>
                      <div class="col-md-3" style="margin-left:50%">
                            <a href="{{route('pais_create')}}" class="btn btn-block btn-primary">
                                    <i class="fa fa-fw fa-plus-circle"></i> Crear pais
                            </a>
                          </div>
                  </div>
                  <div class="card-body">
                      <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                          <thead>
                              <tr>
                                  <th>Id pais</th>
                                  <th>Nombre</th>
                                  <th>Nacionalidad </th>
                                  <th>Acciones</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($pais as $item)
                              <tr>
                              <td>{{$item->idpais}}</td>    
                              <td>{{$item->nombre}}</td>
                              <td>{{$item->nacionalidad}}</td>
                              <td>
                                <a href="/Pais/{{$item->idpais}}/edit" class="btn btn-success">
                                    <i class="fa fa-pencil"></i></a>
                                <form action="{{route('pais_delete', ['Pais' => $item->idpais])}}" method="POST">
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