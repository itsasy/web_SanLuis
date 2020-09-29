@extends('layouts.app')
@include('layouts.toggle_menu')
@section('content')
<div class="container-fluid pt-5 bg_grad_h h_header">
  <div class="row">
    <div class="col d-flex flex-column align-items-center">
      <h4 class="text-center text-white text-uppercase mt-2 mb-4 ff_saira">REGISTRO DE NOTICIAS
      </h4>
      <form action="{{route('saveNews')}}" method="POST" enctype="multipart/form-data"
        class="col-lg-8 col-md-10 px-3 px-sm-4 pt-3 pt-sm-4 pb-1 mb-4 form_reg bg-white rounded_1 shadow needs-validation"
        novalidate>
        {{ csrf_field() }}
        <div class="py-3">
          <div class="d-flex justify-content-center mb-2">
            <p
              class="subarea_reg font-weight-bold text-secondary text-center py-2 px-3 position-absolute mt-n3 bg-white rounded_1">
              Datos de autor</p>
          </div>
          <div class="subarea_reg rounded_1 pt-4 px-2 px-sm-3 pb-2 pb-sm-3">
            <div class="form-group">
              <label for="author">Nombre</label>
              <input type="text" name="author" id="author" class="form-control rounded_1" placeholder="Ingrese nombre"
                required>
              <div class="invalid-feedback">Ingrese nombre</div>
              <div class="valid-feedback">Nombre ingresado</div>
            </div>
          </div>
        </div>
        <div class="py-3">
          <div class="d-flex justify-content-center mb-2">
            <p
              class="subarea_reg font-weight-bold text-secondary text-center py-2 px-3 position-absolute mt-n3 bg-white rounded_1">
              Datos de noticia</p>
          </div>
          <div class="subarea_reg rounded_1 pt-4 px-2 px-sm-3 pb-2 pb-sm-3">
            <div class="form-row d-flex justify-content-center">
              <div class="form-group col-lg-12">
                <label for="title">Título</label>
                <input type="text" name="title" id="title" class="form-control rounded_1" placeholder="Ingrese Título"
                  required>
                <div class="invalid-feedback">Ingrese Título</div>
                <div class="valid-feedback">Título ingresado</div>
              </div>
              <div class="form-group col-lg-12">
                <label for="description">Descripción</label>
                <textarea class="form-control form-control_textarea_md rounded_1" name="description" id="description"
                  maxlength="200" placeholder="Ingrese descripción" required></textarea>
                <div class="invalid-feedback">Ingrese descripción</div>
                <div class="valid-feedback">Descripción ingresada</div>
              </div>
              <div class="form-group col-lg-6">
                <label for="image">Imagen</label>
                <input type="file" class="form-control-file" name="img" id="img_1" required>
                <div class="invalid-feedback">Seleccione imagen</div>
                <div class="valid-feedback">Imagen seleccionada</div>
                <div class="d-flex justify-content-center pt-3">
                  <img src="{{asset('Image/img_default.png')}}" class="img-fluid rounded_1 img_reg shadow_light"
                    id="img_output_01" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="py-3">
          <div class="d-flex justify-content-center mb-2">
            <p
              class="border border-secondary font-weight-bold text-secondary text-center py-2 px-3 position-absolute mt-n3 bg-white rounded-custom_1">
              Datos de publicación</p>
          </div>
          <div class="border border-secondary rounded-custom_1 pt-4 px-2 px-sm-3 pb-2 pb-sm-3 shadow">
            <div class="form-row">
              <div class="form-group col-lg-6">
                <label for="date_news">Fecha</label>
                <input type="date" name="date_news" id="date_news" class="form-control rounded-custom_1" placeholder=""
                  required>
                <div class="invalid-feedback">Seleccione fecha</div>
                <div class="valid-feedback">Fecha seleccionada</div>
              </div>
              <div class="form-group col-lg-6">
                <label for="time_news">Hora</label>
                <input type="time" name="time_news" id="time_news" class="form-control rounded-custom_1" placeholder=""
                  required>
                <div class="invalid-feedback">Seleccione hora</div>
                <div class="valid-feedback">Hora seleccionada</div>
              </div>
            </div>
          </div>
        </div>
        <div class="py-3">
          <div class="d-flex justify-content-center mb-2">
            <p
              class="subarea_reg font-weight-bold text-secondary text-center py-2 px-3 position-absolute mt-n3 bg-white rounded_1">
              Datos de fuente</p>
          </div>
          <div class="subarea_reg rounded_1 pt-4 px-2 px-sm-3 pb-2 pb-sm-3">
            <div class="form-row">
              <div class="form-group col-lg-6">
                <label for="source">Nombre</label>
                <input type="text" name="source" id="source" class="form-control rounded_1"
                  placeholder="Ingrese nombre de fuente" required>
                <div class="invalid-feedback">Ingrese nombre de fuente</div>
                <div class="valid-feedback">Nombre de fuente ingresado</div>
              </div>
              <div class="form-group col-lg-6">
                <label for="url">Dirección web</label>
                <input type="url" name="url" id="url" maxlength="200" class="form-control rounded_1"
                  placeholder="Ingrese dirección web" required>
                <div class="invalid-feedback">Ingrese dirección web</div>
                <div class="valid-feedback">Dirección web ingresada</div>
              </div>
            </div>
          </div>
        </div>
        <div class="form-row justify-content-center">
          <div class="form-group col-lg-4 d-flex">
            <a name="" id="" class="btn btn_circl_outl_p rounded-circle mr-2" href="{{route('Blog')}}" role="button"><i
                class="fas fa-times"></i></a>
            <button class="btn btn_grad_reg col rounded-pill" type="submit">Registrar<i
                class="fas fa-angle-double-right ml-2"></i></button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection