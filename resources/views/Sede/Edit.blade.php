@extends("Tema/layout")
@section('content')
<div class="animated fadeIn">
      <div class="row">
                  <div class="col-lg-6">
                              <div class="card">
                                  <div class="card-header">
                                      <strong>Editar sede</strong>
                                  </div>
                                  <div class="card-body card-block">
                                    <form class="form-horizontal" method="POST" action="/Sede/{{$sed->idsede}}" class="form-horizontal">
                                        @method('PUT')
                                        @csrf
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="Idsede" class=" form-control-label">Id sede </label></div>
                                          <div class="col-12 col-md-9"><input type="text" id="idsede" name="idsede" class="form-control" value="{{old('idsede', $sed->idsede ?? '')}}" readonly></div>
                                          </div>
                                      <div class="row form-group">
                                        <div class="col col-md-3"><label for="Identificaciond" class=" form-control-label">Identificación del director </label></div>
                                      <div class="col-12 col-md-9"><input type="text" id="identificaciond" name="identificaciond" class="form-control" value="{{old('idsede', $sed->identificaciond ?? '')}}" readonly></div>
                                      </div>
                                          <div class="row form-group">
                                                <div class="col col-md-3"><label for="Idpais" class=" form-control-label">Id del país</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="idpais" name="idpais" class="form-control" value="{{old('idsede', $sed->idpais ?? '')}}"></div>
                                          </div>
                                          <div class="row form-group">
                                                      <div class="col col-md-3"><label for="Ciudad" class=" form-control-label">Ciudad</label></div>
                                                    <div class="col-12 col-md-9"><input type="text" id="ciudad" name="ciudad" class="form-control" value="{{old('idsede', $sed->ciudad ?? '')}}"></div>
                                          </div>
                                          <div class="row form-group">
                                                      <div class="col col-md-3"><label for="Direccion" class=" form-control-label">Dirección</label></div>
                                                    <div class="col-12 col-md-9"><input type="text" id="direccion" name="direccion" class="form-control" value="{{old('idsede', $sed->direccion ?? '')}}"></div>
                                         </div>
                                         <div class="row form-group">
                                            <div class="col col-md-3"><label for="Telefono" class=" form-control-label">Teléfono</label></div>
                                          <div class="col-12 col-md-9"><input type="text" id="telefono" name="telefono" class="form-control" value="{{old('idsede', $sed->telefono ?? '')}}"></div>
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