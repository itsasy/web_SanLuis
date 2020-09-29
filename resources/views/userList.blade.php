@extends('layouts.app')

@include('layouts.btn_return_map')

@section('title', 'Usuarios')

@section('content')
<div class="container-fluid h_header bg_grad_h pt-5">
  <div class="row">
    <div class="col">
      <div class="d-flex flex-column align-items-center">
        <h4 class="title text-center mt-2 mb-5">LISTA DE USUARIOS</h4>
        <div class="col-lg-11 bg-white p-3 p-sm-4 mb-3 rounded_1 shadow">
          <table class="table table-responsive-sm table-responsive-md table-responsive-lg text_list shadow"
            id="table_person">
            <thead class="bg_grad_h text-center text-uppercase text-white">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">USUARIO</th>
                {{--  <th scope="col">NOMBRE<span class="invisible">_</span>DE<span class="invisible">_</span>ALERTA</th> --}}
                <th scope="col">NOMBRE</th>
                <th scope="col">APELLIDOS</th>
                <th scope="col">E-MAIL</th>
                <th scope="col">DNI</th>
                <th scope="col">TELÉFONO</th>
                <th scope="col">ACCIONES</th>
              </tr>
            </thead>
            <tbody class="text-secondary">
              @foreach ($list as $person)
              <tr>
                <td class="bg-light">{{$loop->iteration}}</td>
                <td>{{$person->code_pers}}</td>
                <td>{{$person->name_pers}}</td>
                <td>{{$person->patname_pers . ' ' . $person->matname_pers }}</td>
                <td>{{$person->email}}</td>
                <td>{{$person->dni_pers}}</td>
                <td>{{$person->phone_pers}}</td>
                <td class="d-flex justify-content-center align-items-center">
                  <a name="" id="" class="btn_circl_outl_p mr-1" href="{{route('editUser', $person->id)}}"
                    role="button">
                    <i class="fas fa-pen"></i>
                  </a>
                  <a name="" id="" class="btn_circl_outl_p ml-1" href="{{route('deleteUser', $person->id)}}"
                    role="button">
                    <i class="fas fa-times"></i>
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection