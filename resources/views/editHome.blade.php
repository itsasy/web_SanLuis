@extends('layouts.app')
@include('layouts.toggle_menu')
@section('content')
<div class="container-fluid pt-5 bg_grad_h h_header">
  <div class="row">
    <div class="col d-flex flex-column align-items-center">
      <h4 class="text-center text-white text-uppercase mt-2 mb-4 add-ff-saira-stencil-one">REGISTRO NOSOTROS
      </h4>
      <form action="{{route('editHome')}}" method="POST"
        class="col-lg-8 px-3 px-sm-4 pt-3 pt-sm-4 pb-1 mb-4 form_reg bg-white rounded_1 shadow needs-validation"
        novalidate>
        {{ csrf_field() }}
        <div class="py-3">
          <div class="d-flex justify-content-center mb-2">
            <p
              class="subarea_reg font-weight-bold text-secondary text-center py-2 px-3 position-absolute mt-n3 bg-white rounded_1">
              Descripciones</p>
          </div>
          <div class="subarea_reg rounded_1 pt-4 px-2 px-sm-3 pb-2 pb-sm-3">
            <div class="form-group">
              <label for="description">Descripción</label>
              <textarea class="form-control form-control_textarea_lg rounded_1" name="description" id="description"
                maxlength="500" placeholder="Ingrese descripción" required>{{$nosotros[0]->description}}</textarea>
              <div class="invalid-feedback">Ingrese descripción</div>
              <div class="valid-feedback">Descripción ingresada</div>
            </div>
            <div class="form-group">
              <label for="mission">Misión</label>
              <textarea class="form-control form-control_textarea_lg rounded_1" name="mission" id="mission"
                maxlength="500" placeholder="Ingrese misión" required>{{$nosotros[0]->mission}}</textarea>
              <div class="invalid-feedback">Ingrese misión</div>
              <div class="valid-feedback">Misión ingresada</div>
            </div>
            <div class="form-group">
              <label for="vision">Visión</label>
              <textarea class="form-control form-control_textarea_lg rounded_1" name="vision" id="vision"
                maxlength="500" placeholder="Ingrese visión" required>{{$nosotros[0]->vision}}</textarea>
              <div class="invalid-feedback">Ingrese visión</div>
              <div class="valid-feedback">Visión ingresada</div>
            </div>
            <div class="form-group">
              <label for="our_group">Nuestro Grupo</label>
              <textarea class="form-control form-control_textarea_lg rounded_1" name="our_group" id="our_group"
                maxlength="500" placeholder="Ingrese descripción de nuestro grupo"
                required>{{$nosotros[0]->our_group}}</textarea>
              <div class="invalid-feedback">Ingrese descripción de nuestro grupo</div>
              <div class="valid-feedback">Descripción de nuestro grupo ingresado</div>
            </div>
          </div>
        </div>
        <div class="py-3">
          <div class="d-flex justify-content-center mb-2">
            <p class="subarea_reg font-weight-bold text-secondary text-center py-2 px-3 position-absolute mt-n3 bg-white rounded_1">
              Datos de ubicación</p>
          </div>
          <div class="subarea_reg rounded_1 pt-4 px-2 px-sm-3 pb-2 pb-sm-3">
            <div class="form-group">
              <label for="address">Dirección</label>
              <input type="text" name="address" id="address" class="form-control rounded_1"
                placeholder="Ingrese dirección" value="{{$nosotros[0]->address}}" required>
              <div class="invalid-feedback">Ingrese dirección</div>
              <div class="valid-feedback">Dirección ingresada</div>
            </div>
            <div class="form-group">
              <label for="ubication_maps">Enlace del mapa</label>
              <textarea class="form-control form-control_textarea_lg rounded_1" name="ubication_maps" id="ubication_maps" maxlength="500" placeholder="Ingrese enlace del mapa"
              required>{{$nosotros[0]->ubication_maps}}</textarea>
              <div class="invalid-feedback">Ingrese enlace</div>
              <div class="valid-feedback">Enlace ingresado</div>
            </div>
          </div>
        </div>
        <div class="py-3">
          <div class="d-flex justify-content-center mb-2">
            <p
              class="subarea_reg font-weight-bold text-secondary text-center py-2 px-3 position-absolute mt-n3 bg-white rounded_1">
              Datos de contacto</p>
          </div>
          <div class="subarea_reg rounded_1 pt-4 px-2 px-sm-3 pb-2 pb-sm-3">
            <div class="form-group">
              <label for="email">Correo electrónico</label>
              <input type="email" name="email" id="email" class="form-control rounded_1"
                placeholder="Ingrese correo electrónico" value="{{$nosotros[0]->email}}" required>
              <div class="invalid-feedback">Ingrese correo electrónico</div>
              <div class="valid-feedback">Correo electrónico ingresado</div>
            </div>
          </div>
        </div>
        <div class="py-3">
          <div class="d-flex justify-content-center mb-2">
            <p
              class="subarea_reg font-weight-bold text-secondary text-center py-2 px-3 position-absolute mt-n3 bg-white rounded_1">
              Teléfonos</p>
          </div>
          <div class="subarea_reg rounded_1 pt-4 px-2 px-sm-3 pb-2 pb-sm-3">
            <div class="form-row">
              <div class="form-group col-lg-6">
                <label for="phone_1">Teléfono 1</label>
                <input type="number" name="phone_1" id="phone_1" min="0" class="form-control rounded_1"
                  placeholder="Ingrese número de teléfono" maxlength="9"
                  oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                  value="{{$nosotros[0]->phone_1}}" required>
                <div class="invalid-feedback">Ingrese número de teléfono</div>
                <div class="valid-feedback">Número de teléfono ingresado</div>
              </div>
              <div class="form-group col-lg-6">
                <label for="phone_2">Teléfono 2</label>
                <input type="number" name="phone_2" id="phone_2" min="0" class="form-control rounded_1"
                  placeholder="Ingrese número de teléfono" maxlength="9"
                  oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                  value="{{$nosotros[0]->phone_2}}">
                <div class="invalid-feedback">Ingrese número de teléfono</div>
                <div class="valid-feedback">Opcional</div>
              </div>
            </div>
          </div>
        </div>
        <div class="py-3">
          <div class="d-flex justify-content-center mb-2">
            <p
              class="subarea_reg font-weight-bold text-secondary text-center py-2 px-3 position-absolute mt-n3 bg-white rounded_1">
              Horario de atención</p>
          </div>
          <div class="subarea_reg rounded_1 pt-4 px-2 px-sm-3 pb-2 pb-sm-3">
            <div class="form-row">
              <div class="form-group col-lg-6">
                <label for="time_start">Hora inicio</label>
                <input type="time" name="time_start" id="time_start" class="form-control rounded_1" placeholder=""
                  value="{{$nosotros[0]->time_start}}" required>
                <div class="invalid-feedback">Seleccione hora inicio</div>
                <div class="valid-feedback">Hora inicio seleccionada</div>
              </div>
              <div class="form-group col-lg-6">
                <label for="time_end">Hora fin</label>
                <input type="time" name="time_end" id="time_end" class="form-control rounded_1" placeholder=""
                  value="{{$nosotros[0]->time_end}}" required>
                <div class="invalid-feedback">Seleccione hora fin</div>
                <div class="valid-feedback">Hora fin seleccionada</div>
              </div>
            </div>
          </div>
        </div>
        <div class="py-3">
          <div class="d-flex justify-content-center mb-2">
            <p
              class="subarea_reg font-weight-bold text-secondary text-center py-2 px-3 position-absolute mt-n3 bg-white rounded_1">
              Ubicación web</p>
          </div>
          <div class="subarea_reg rounded_1 pt-4 px-2 px-sm-3 pb-2 pb-sm-3">
            <div class="form-group">
              <label for="url">Dirección web</label>
              <input type="url" name="url" id="url" maxlength="200" class="form-control rounded_1"
                placeholder="Ingrese dirección web" value="{{$nosotros[0]->url}}" required>
              <div class="invalid-feedback">Ingrese dirección web</div>
              <div class="valid-feedback">Dirección web ingresada</div>
            </div>
          </div>
        </div>
        <div class="d-none">
          <input type="text" id="id" name='id' value="{{$nosotros[0]->id}}">
        </div>
        <div class="form-row justify-content-center">
          <div class="form-group col-lg-4 d-flex">
            <a name="" id="" class="btn btn_circl_outl_p rounded-circle mr-2" href="{{route('Blog')}}" role="button"><i
                class="fas fa-times"></i></a>
            <button class="btn btn_grad_reg col rounded-pill" type="submit">ACTUALIZAR<i
                class="fas fa-angle-double-right ml-2"></i></button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection