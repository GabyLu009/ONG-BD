@extends("Tema/layout")
@section('content')
<div class="animated fadeIn">
      <div class="row">
                  <div class="col-lg-6">
                              <div class="card">
                                  <div class="card-header">
                                      <strong>Editar director</strong>
                                  </div>
                                  <div class="card-body card-block">
                                    <form class="form-horizontal" method="POST" action="/Director/{{$dir->identificacion}}" class="form-horizontal">
                                        @method('PUT')
                                        @csrf

                                      <div class="row form-group">
                                        <div class="col col-md-3"><label for="Identificacion" class=" form-control-label">Identificación del director</label></div>
                                      <div class="col-12 col-md-9"><input type="text" id="identificacion" name="identificacion" class="form-control" value="{{old('identificacion', $dir->identificacion ?? '')}}" readonly></div>
                                      </div>
                                          <div class="row form-group">
                                                <div class="col col-md-3"><label for="Nombre" class=" form-control-label">Nombre</label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="nombre" name="nombre" class="form-control" value="{{old('identificacion', $dir->nombre ?? '')}}"></div>
                                          </div>
                                          <div class="row form-group">
                                                      <div class="col col-md-3"><label for="Primer Apellido" class=" form-control-label">Primer Apellido</label></div>
                                                    <div class="col-12 col-md-9"><input type="text" id="apellido1" name="apellido1" class="form-control" value="{{old('identificacion', $dir->apellido1 ?? '')}}"></div>
                                          </div>
                                          <div class="row form-group">
                                                      <div class="col col-md-3"><label for="Segundo Apellido" class=" form-control-label">Segundo Apellido</label></div>
                                                    <div class="col-12 col-md-9"><input type="text" id="apellido2" name="apellido2" class="form-control" value="{{old('identificacion', $dir->apellido2 ?? '')}}"></div>
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