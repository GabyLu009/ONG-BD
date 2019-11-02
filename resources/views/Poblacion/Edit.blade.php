@extends("Tema/layout")
@section('content')
<div class="animated fadeIn">
      <div class="row">
                  <div class="col-lg-6">
                              <div class="card">
                                  <div class="card-header">
                                      <strong>Editar poblacion</strong>
                                  </div>
                                  <div class="card-body card-block">
                                    <form class="form-horizontal" method="POST" action="/Poblacion/{{$pob->idpoblacion}}" class="form-horizontal">
                                        @method('PUT')
                                        @csrf

                                      <div class="row form-group">
                                        <div class="col col-md-3"><label for="Idpoblacion" class=" form-control-label">Id poblacion </label></div>
                                      <div class="col-12 col-md-9"><input type="text" id="idpoblacion" name="idpoblacion" class="form-control" value="{{old('idpoblacion', $pob->idpoblacion ?? '')}}" readonly></div>
                                      </div>
                                          <div class="row form-group">
                                                <div class="col col-md-3"><label for="Numerohabitantes" class=" form-control-label">Numero de habitantes</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="numerohabitantes" name="numerohabitantes" class="form-control" value="{{old('idpoblacion', $pob->numerohabitantes?? '')}}"></div>
                                          </div>
                                          <div class="row form-group">
                                                      <div class="col col-md-3"><label for="Nombre" class=" form-control-label">Nombre</label></div>
                                                    <div class="col-12 col-md-9"><input type="text" id="nombre" name="nombre" class="form-control" value="{{old('idpoblacion', $pob->nombre ?? '')}}"></div>
                                          </div>
                                          <div class="row form-group">
                                                      <div class="col col-md-3"><label for="Idpais" class=" form-control-label">Id pais</label></div>
                                                    <div class="col-12 col-md-9"><input type="text" id="idpais" name="idpais" class="form-control" value="{{old('idpoblacion', $pob->idpais ?? '')}}"></div>
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