@extends('layouts.app')

@include('layouts.btn_return_map')

@section('title', 'Incidencias')

@section('content')
<div class="container-fluid h_header bg_grad_h pt-5">
  <div class="row">
    <div class="col">
      <div class="d-flex flex-column align-items-center">
        <h4 class="title text-center mt-2 mb-5">LISTA DE INCIDENCIAS</h4>
        <div class="col-lg-11 bg-white p-3 p-sm-4 mb-3 rounded_1 shadow">
          {{-- Botón para excel --}}
          <div class="col text-center">
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#excel" style="background-color:#00B4DB; border:none">Exportar a Excel</button>
          </div>
          <br>
          <table class="table table-responsive-sm table-responsive-md table-responsive-lg text_list shadow" id="table_alerts">
            <thead class="bg_grad_h text-center text-uppercase text-white">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">FECHA</th>
                <th scope="col">TIPO<span class="invisible">_</span>DE<span class="invisible">_</span>ALERTA</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">APELLIDO</th>
                <th scope="col">DNI</th>
                <th scope="col">DIRECCIÓN<span class="invisible">_</span>DE<span class="invisible">_</span>ALERTA</th>
                <th scope="col">ACCIONES</th>
              </tr>
            </thead>
            <tbody class="text-secondary">
              @foreach ($list as $alerts)
              @if(session('autenticacion')->type_id == 1)
              <tr>
                <td class="bg-light">{{$loop->iteration}}</td>
                <td>{{$alerts->date_alert}}</td>

                @switch($alerts->type_alert)
                @case('MUNSER001')
                <td>Serenazgo</td>
                @break
                @case('MUNSER002')
                <td>Ambulancia</td>
                @break
                @case('MUNSER003')
                <td>Bombero</td>
                @break
                @case('MUNSER004')
                <td>Saneamiento</td>
                @break
                @case('MUNSER005')
                <td>Fiscalización</td>
                @break
                @case('MUNSER007')
                <td>CEM</td>
                @break
                @endswitch

                <td>{{$alerts->info_user->name_pers}}</td>
                <td>{{$alerts->info_user->patname_pers . ' ' . $alerts->info_user->matname_pers}}</td>
                <td>{{$alerts->info_user->dni_pers}}</td>
                <td>{{$alerts->address_alert}}</td>
                <td class="d-flex justify-content-center align-items-center">
                  @if($alerts->image!=null)
                  <a name="" id="" class="btn_circl_outl_p mr-1" href="#" role="button" aria-pressed="true"
                    data-toggle="modal" data-target="#modal_image{{$alerts->id}}">
                    <i class="fas fa-image"></i>
                  </a>
                  @endif
                  @if($alerts->comentary!=null)
                  <a name="" id="" class="btn_circl_outl_p mr-1" href="#" role="button" aria-pressed="true"
                    data-toggle="modal" data-target="#modal_comentary{{$alerts->id}}">
                    <i class="fa fa-comment"></i>
                  </a>
                  @endif
                  <a name="" id="" class="btn_circl_outl_p ml-1" href="{{route('deleteAlert', $alerts->id)}}"
                    role="button">
                    <i class="fas fa-times"></i>
                  </a>
                </td>
              </tr>
              @elseif(session('autenticacion')->type_id == 2)
              @if($alerts->type_alert == 'MUNSER001' || $alerts->type_alert == 'MUNSER002' || $alerts->type_alert ==
              'MUNSER003')
              <tr>
                <td class="bg-light">{{$loop->iteration}}</td>
                <td>{{$alerts->date_alert}}</td>

                @switch($alerts->type_alert)
                @case('MUNSER001')
                <td>Serenazgo</td>
                @break
                @case('MUNSER002')
                <td>Ambulancia</td>
                @break
                @case('MUNSER003')
                <td>Bombero</td>
                @break
                @endswitch

                <td>{{$alerts->info_user->name_pers}}</td>
                <td>{{$alerts->info_user->patname_pers . ' ' . $alerts->info_user->matname_pers}}</td>
                <td>{{$alerts->info_user->dni_pers}}</td>
                <td>{{$alerts->address_alert}}</td>
                <td class="d-flex justify-content-center align-items-center">
                  @if($alerts->image!=null)
                  <a name="" id="" class="btn_circl_outl_p mr-1" href="#" role="button" aria-pressed="true"
                    data-toggle="modal" data-target="#modal_image{{$alerts->id}}">
                    <i class="fas fa-image"></i>
                  </a>
                  @endif
                  @if($alerts->comentary!=null)
                  <a name="" id="" class="btn_circl_outl_p mr-1" href="#" role="button" aria-pressed="true"
                    data-toggle="modal" data-target="#modal_comentary{{$alerts->id}}">
                    <i class="fa fa-comment"></i>
                  </a>
                  @endif
                  <a name="" id="" class="btn_circl_outl_p ml-1" href="{{route('deleteAlert', $alerts->id)}}"
                    role="button">
                    <i class="fas fa-times"></i>
                  </a>
                </td>
              </tr>
              @endif
              @elseif(session('autenticacion')->type_id == 3)
              @if($alerts->type_alert == 'MUNSER004')
              <tr>
                <td class="bg-light">{{$loop->iteration}}</td>
                <td>{{$alerts->date_alert}}</td>
                <td>Saneamiento</td>
                <td>{{$alerts->info_user->name_pers}}</td>
                <td>{{$alerts->info_user->patname_pers . ' ' . $alerts->info_user->matname_pers}}</td>
                <td>{{$alerts->info_user->dni_pers}}</td>
                <td>{{$alerts->address_alert}}</td>
                <td class="d-flex justify-content-center align-items-center">
                  @if($alerts->image!=null)
                  <a name="" id="" class="btn_circl_outl_p mr-1" href="#" role="button" aria-pressed="true"
                    data-toggle="modal" data-target="#modal_image{{$alerts->id}}">
                    <i class="fas fa-image"></i>
                  </a>
                  @endif
                     @if($alerts->comentary!=null)
                  <a name="" id="" class="btn_circl_outl_p mr-1" href="#" role="button" aria-pressed="true"
                    data-toggle="modal" data-target="#modal_comentary{{$alerts->id}}">
                    <i class="fa fa-comment"></i>
                  </a>
                  @endif
                  <a name="" id="" class="btn_circl_outl_p ml-1" href="{{route('deleteAlert', $alerts->id)}}"
                    role="button">
                    <i class="fas fa-times"></i>
                  </a>
                </td>
              </tr>
              @endif
              @elseif(session('autenticacion')->type_id == 4)
              @if($alerts->type_alert == 'MUNSER005')
              <tr>
                <td class="bg-light">{{$loop->iteration}}</td>
                <td>{{$alerts->date_alert}}</td>
                <td>Fiscalización</td>
                <td>{{$alerts->info_user->name_pers}}</td>
                <td>{{$alerts->info_user->patname_pers . ' ' . $alerts->info_user->matname_pers}}</td>
                <td>{{$alerts->info_user->dni_pers}}</td>
                <td>{{$alerts->address_alert}}</td>
                <td class="d-flex justify-content-center align-items-center">
                  @if($alerts->image!=null)
                  <a name="" id="" class="btn_circl_outl_p mr-1" href="#" role="button" aria-pressed="true"
                    data-toggle="modal" data-target="#modal_image{{$alerts->id}}">
                    <i class="fas fa-image"></i>
                  </a>
                  @endif
                   @if($alerts->comentary!=null)
                  <a name="" id="" class="btn_circl_outl_p mr-1" href="#" role="button" aria-pressed="true"
                    data-toggle="modal" data-target="#modal_comentary{{$alerts->id}}">
                    <i class="fa fa-comment"></i>
                  </a>
                  @endif
                  <a name="" id="" class="btn_circl_outl_p ml-1" href="{{route('deleteAlert', $alerts->id)}}"
                    role="button">
                    <i class="fas fa-times"></i>
                  </a>
                </td>
              </tr>
              @endif
              @endif
              {{-- ********************************************************* --}}
              <div class="modal fade" id="modal_image{{$alerts->id}}" role="dialog" aria-labelledby="modal_image"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header justify-content-center">
                      <h5 id=titulo>Alerta {{$loop->iteration}}</h5>
                    </div>
                    <div class="modal-body text-center">
                      @if($alerts->image != null)
                      <div id="img">
                        <img src="http://3.230.42.32:8080/ApiSanLuis/public/api/alertImg/{{$alerts->image}}"
                          class="card-img-top rounded-custom__t_1 img-custom__reg" alt="img">
                      </div>
                      @endif
                    </div>
                    <div class="modal-footer">
                      <!--<button type="submit" class="btn btn-primary" id="aceptar">Aceptar</button>-->
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
                </div>
              </div>
              
              {{-- ************************************************************************* --}}
              <div class="modal fade" id="modal_comentary{{$alerts->id}}" role="dialog" aria-labelledby="modal_comentary"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header justify-content-center">
                      <h5 id=titulo>Alerta {{$loop->iteration}}</h5>
                    </div>
                    <div class="modal-body text-center">
                      @if($alerts->comentary != null)
                        <h2>
                          {{$alerts->comentary}}
                        </h2>
                      @endif
                    </div>
                    <div class="modal-footer">
                      <!--<button type="submit" class="btn btn-primary" id="aceptar">Aceptar</button>-->
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
                </div>
              </div>
              
              @endforeach
            </tbody>
          </table>
        </div>
        {{--  EXCEL --}}
        <div class="modal fade" id="excel" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header justify-content-center">
                <h5 class="modal-title text-secondary">Seleccione entre un rango de fechas para generar el reporte :</h5> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>



              <form action="{{route('excel')}}" method="get">
                <div class="modal-body text-center">
                  <div class="form-group" >
                    <label for="inicio" class="text-secondary">Fecha inicial</label>
                    <input type="date" class="form-control" name="inicio" id="inicio">
                  </div>
                  <div class="form-group">
                    <label for="fin"  class="text-secondary">Fecha final</label>
                    <input type="date" class="form-control" name="fin" id="fin">
                  </div>
                </div>
                <div class="modal-footer">
                      <button type="submit" class="btn btn-primary" id="atendido">Exportar</button>
                      
                      <!--<a name="" id="" class="btn shadow btn-outline-danger" 
                        href="{{route('DescargarExcelGeneral', ['nombreExcel' => 'ueba.xlsx', 'opcion' => 'excel'])}}" 
                        role="button">
                            <i class="fas fa-file-pdf fa-lg"></i>
                            </a>-->

                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        
        
        
      </div>
    </div>
  </div>
</div>
@endsection