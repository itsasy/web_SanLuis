@extends('layouts.app')

@include('layouts.btn_return_places')

@section('title', 'Edición de usuarios')

@section('content')
<div class="container-fluid h_header bg_grad_h pt-5">
   <div class="row">
      <div class="col">
         <div class="d-flex flex-column align-items-center">
            <h4 class="title text-center mt-2 mb-5">ACTUALIZAR USUARIO</h4>
            <div class="col-lg-10 bg-white p-3 p-sm-4 mb-3 rounded_1 shadow">
               <form action="{{route('editUsers')}}" method="POST" class="form_custom">
                  <input type="hidden" name="_method" value="PUT">
                  {{csrf_field()}}
                  <div class="form-row">
                     <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                           <label for="name_pers">Nombre</label>
                           <input type="text" class="form-control" name="name_pers" id="" placeholder=""
                              value="{{$user[0]->name_pers}}">
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                           <label for="patname_pers">Apellido Paterno</label>
                           <input type="text" class="form-control" name="patname_pers" id="" placeholder=""
                              value="{{$user[0]->patname_pers}}">
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                           <label for="matname_pers">Apellido Materno</label>
                           <input type="text" class="form-control" name="matname_pers" id="" placeholder=""
                              value="{{$user[0]->matname_pers}}">
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                           <label for="email">E-mail</label>
                           <input type="email" class="form-control" name="email" id="" placeholder=""
                              value="{{$user[0]->email}}">
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                           <label for="password_user">Password</label>
                        <input type="password" class="form-control" name="password_user" value="" id=""
                              placeholder="Ingrese su nueva contraseña si en caso desea cambiarla">
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                           <label for="gender_id">Sexo</label>
                           <select class="form-control" name="gender_id" id="">
                              <option <?php if($user[0]->gender_id =='1') echo "selected";  ?> value="1">
                                 Femenino</option>
                              <option <?php if($user[0]->gender_id =='2') echo "selected"; ?> value="2">
                                 Masculino
                              </option>
                           </select>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <label for="birthdate">Cumpleaños</label>
                        <input type="date" name="birthdate" id="birthdate" class="form-control rounded_1" placeholder=""
                           value="{{$user[0]->birthdate}}" required>
                        <div class="invalid-feedback">Seleccione fecha</div>
                        <div class="valid-feedback">Fecha seleccionada</div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                           <label for="address_persons">Dirección</label>
                           <input type="text" class="form-control" name="address_persons" id="" placeholder=""
                              value="{{$user[0]->address_persons}}">
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                           <label for="phone_pers">Teléfono</label>
                           <input type="text" class="form-control" name="phone_pers" id="" placeholder=""
                              value="{{$user[0]->phone_pers}}">
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                           <label for="phoneTwo_pers">Teléfono 2</label>
                           <input type="text" class="form-control" name="phoneTwo_pers" id="" placeholder=""
                              value="{{$user[0]->phoneTwo_pers}}">
                        </div>
                     </div>
                     <div class="d-none">
                        <input type="text" id="id" name='id' value="{{request()->route('id')}}">
                     </div>
                     <div class="col-md-6 col-lg-3 text-center">
                        <button type="submit" class="col btn btn_grad_reg rounded-pill py-2">
                           ACTUALIZAR<i class="fas fa-sync-alt ml-2"></i>
                        </button>
                     </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection