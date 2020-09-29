@extends('layouts.app')

@include('layouts.btn_return_module')

@section('title', 'Incidencias')

@section('content')
<div class="container-fluid h_header bg_grad_h pt-5">
  <div class="row">
    <div class="col">
      <div class="d-flex flex-column align-items-center">
        <h4 class="title text-center mt-2 mb-5">LISTA DE NEGOCIOS</h4>
        <div class="col-lg-11 bg-white p-3 p-sm-4 mb-3 rounded_1 shadow">
          <div class="text-center text-md-left">
            <a name="" id="" class="btn btn_outl_p mr-1 mb-3" href="{{route('addPlace')}}" role="button">
              Añadir negocio<i class="fas fa-plus ml-2"></i>
            </a>
          </div>
          <table class="table table-responsive-sm table-responsive-md table-responsive-lg text_list shadow"
            id="table_alerts">
            <thead class="bg_grad_h text-center text-uppercase text-white">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">TIPO<span class="invisible">_</span>DE<span class="invisible">_</span>NEGOCIO</th>
                <th scope="col">RUC</th>
                <th scope="col">DIRECCIÓN</th>
                <th scope="col">ACCIONES</th>
              </tr>
            </thead>
            <tbody class="text-secondary">
              @foreach ($list as $places)
              <tr>
                <td class="bg-light">{{$loop->iteration}}</td>
                <td>{{$places->name_place}}</td>
                <td>{{$places->type_place}}</td>
                <td>{{$places->RUC}}</td>
                <td>{{$places->address_place}}</td>
                <td class="d-flex justify-content-center align-items-center">
                @if($places->img!=null)
                  <a name="" id="" class="btn_circl_outl_p mr-1" href="#" role="button" aria-pressed="true"
                    data-toggle="modal" data-target="#modal_image{{$places->id}}">
                    <i class="fas fa-image"></i>
                  </a>
                  @endif
                  <a name="" id="" class="btn_circl_outl_p mr-1" href="{{route('editPlace', $places->id)}}"
                    role="button">
                    <i class="fas fa-pen"></i>
                  </a>
                  <a name="" id="" class="btn_circl_outl_p ml-1" href="{{route('deletePlace', $places->id)}}"
                    role="button">
                    <i class="fas fa-times"></i>
                  </a>
                </td>
              </tr>
              <div class="modal fade" id="modal_image{{$places->id}}" role="dialog" aria-labelledby="modal_image"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header justify-content-center">
                      <h5 id=titulo>Punto de evacuación N° {{$places->id}}</h5>
                    </div>
                    <div class="modal-body text-center">
                      @if($places->img != null)
                      <div id="img">
                        <img src="http://3.230.42.32:8080/ApiSanLuis/public/api/blogImg/{{$places->img}}"
                          class="card-img-top rounded-custom__t_1 img-custom__reg" alt="img">
                      </div>
                      @endif
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection