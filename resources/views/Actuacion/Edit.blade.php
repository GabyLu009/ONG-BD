@extends("Tema/layout")
@section('content')
<div class="animated fadeIn">
      <div class="row">
                  <div class="col-lg-6">
                              <div class="card">
                                  <div class="card-header">
                                      <strong>Editar actuación</strong>
                                  </div>
                                  <div class="card-body card-block">
                                    <form class="form-horizontal" method="POST" action="/Actuacion/{{$act->idactuacion}}" class="form-horizontal">
                                        @method('PUT')
                                        @csrf

                                      <div class="row form-group">
                                        <div class="col col-md-3"><label for="Idactuacion" class=" form-control-label">Id  de la actuación </label></div>
                                      <div class="col-12 col-md-9"><input type="text" id="idactuacion" name="idactuacion" class="form-control" value="{{old('idactuacion', $act->idactuacion ?? '')}}" readonly></div>
                                      </div>
                                          <div class="row form-group">
                                                <div class="col col-md-3"><label for="Inversion" class=" form-control-label">Inversión del proyecto</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="inversion" name="inversion" class="form-control" value="{{old('idactuacion', $act->inversion?? '')}}"></div>
                                          </div>
                                          <div class="row form-group">
                                                      <div class="col col-md-3"><label for="Descripcion" class=" form-control-label">Descripción de la actuación</label></div>
                                                    <div class="col-12 col-md-9"><input type="text" id="descripcion" name="descripcion" class="form-control" value="{{old('idactuacion', $act->descripcion ?? '')}}"></div>
                                          </div>
                                          <div class="row form-group">
                                                      <div class="col col-md-3"><label for="Idpoblacion" class=" form-control-label">Id de la poblacion</label></div>
                                                    <div class="col-12 col-md-9"><input type="text" id="idpoblacion" name="idpoblacion" class="form-control" value="{{old('idactuacion', $act->idpoblacion ?? '')}}"></div>
                                         </div>
                                        </div>
                                        <div class="row form-group">
                                                    <div class="col col-md-3"><label for="Codigop" class=" form-control-label">Código del proyecto</label></div>
                                                  <div class="col-12 col-md-9"><input type="text" id="codigop" name="codigop" class="form-control" value="{{old('idactuacion', $act->codigop ?? '')}}"></div>
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
@endsection