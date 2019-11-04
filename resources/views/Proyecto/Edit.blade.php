@extends("Tema/layout")
@section('content')
<div class="animated fadeIn">
      <div class="row">
                  <div class="col-lg-6">
                              <div class="card">
                                  <div class="card-header">
                                      <strong>Editar proyecto</strong>
                                  </div>
                                  <div class="card-body card-block">
                                    <form class="form-horizontal" method="POST" action="/Proyecto/{{$pro->codigo}}" class="form-horizontal">
                                        @method('PUT')
                                        @csrf
                                        <div class="row form-group">
                                          <div class="col col-md-3"><label for="Codigo" class=" form-control-label">Codigo del proyecto</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="codigo" name="codigo" class="form-control" value="{{old('codigo', $pro->codigo ?? '')}}" readonly></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="Titulo" class=" form-control-label">Titulo </label></div>
                                          <div class="col-12 col-md-9"><input type="text" id="titulo" name="titulo" class="form-control" value="{{old('codigo', $pro->titulo ?? '')}}"></div>
                                          </div>
                                      <div class="row form-group">
                                        <div class="col col-md-3"><label for="Fechainicio" class=" form-control-label">Fecha de inicio </label></div>
                                      <div class="col-12 col-md-9"><input type="date" id="fechainicio" name="fechainicio" class="form-control" value="{{old('codigo', $pro->fechainicio ?? '')}}"></div>
                                      </div>
                                          <div class="row form-group">
                                                <div class="col col-md-3"><label for="Fechafinalizacion" class=" form-control-label">Fecha de finalizacion</label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="fechafinalizacion" name="fechafinalizacion" class="form-control" value="{{old('codigo', $pro->fechafinalizacions ?? '')}}"></div>
                                          </div>
                                          <div class="row form-group">
                                                      <div class="col col-md-3"><label for="Presupuesto" class=" form-control-label">Presupuesto del proyecto</label></div>
                                                    <div class="col-12 col-md-9"><input type="text" id="presupuesto" name="presupuesto" class="form-control" value="{{old('codigo', $pro->presupuesto ?? '')}}"></div>
                                          </div>

                                          <div class="row form-group">
                                            <div class="col col-md-3"><label for="Idsede" class=" form-control-label">Id sede </label></div>
                                          <div class="col-12 col-md-9"><input type="text" id="idsede" name="idsede" class="form-control" value="{{old('codigo', $pro->idsede ?? '')}}"></div>
                                          </div>

                                          <div class="row form-group">
                                            <div class="col col-md-3"><label for="Identificacionr" class=" form-control-label">Identificación del responsable</label></div>
                                          <div class="col-12 col-md-9"><input type="text" id="identificacionr" name="identificacionr" class="form-control" value="{{old('codigo', $pro->identificacionr ?? '')}}"></div>
                                          </div>

                                           {{-- <div class="row form-group">
                                                      <div class="col col-md-3"><label for="Estado" class=" form-control-label">Estado</label></div>
                                                    <div class="col-12 col-md-9"><input type="text" id="estado" name="estado" class="form-control" value="{{old('codigo', $pro->estado ?? '')}}"></div>
                                         </div> --}}
                                        -

                                        <div class="form-group">
                                            <div class="col col-md-3"><label for="Estado" class=" form-control-label">Estado</label></div>
                                            <div class="col-12 col-md-9">
                                           <input type="radio" id="estado" name="estado"  value="A">A  
                                           <input type="radio"  id="estado" name="estado"   value="I" > I
                                           <input type="radio"  id="estado" name="estado"   value="C" > C
                                          
                                        </div>
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