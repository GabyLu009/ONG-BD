@extends("Tema/layout")
@section('content')
<div class="animated fadeIn">
      <div class="row">
                  <div class="col-lg-6">
                              <div class="card">
                                  <div class="card-header">
                                      <strong>Crear pais</strong>
                                  </div>
                                  <div class="card-body card-block">
                                    <form class="form-horizontal" method="POST" action="/Pais/store" class="form-horizontal">
                                      @csrf

                                      {{-- <div class="row form-group">
                                        <div class="col col-md-3"><label for="Idpais" class=" form-control-label">Id pais </label></div>
                                      <div class="col-12 col-md-9"><input type="text" id="idpais" name="idpais" class="form-control"></div>
                                      </div> --}}
                                          <div class="row form-group">
                                                <div class="col col-md-3"><label for="Nombre" class=" form-control-label">Nombre</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="nombre" name="nombre" class="form-control"></div>
                                          </div>
                                          <div class="row form-group">
                                                      <div class="col col-md-3"><label for="Nacionalidad" class=" form-control-label">Nacionalidad</label></div>
                                                    <div class="col-12 col-md-9"><input type="text" id="nacionalidad" name="nacionalidad" class="form-control"></div>
                                          </div>

                                  </div>
                                  <div class="card-footer">
                                      <button type="reset" class="btn btn-danger btn-sm">
                                          <i class="fa fa-ban"></i> Borrar
                                      </button>
                                      <button type="submit" class="btn btn-primary btn-sm">
                                          <i class="fa fa-dot-circle-o"></i> Guardar
                                      </button>
                                  </div>
                              </form>
                              </div>
                          </div>
      </div> 
</div>
@endsection