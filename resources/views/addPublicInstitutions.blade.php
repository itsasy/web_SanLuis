@extends('layouts.app')

@include('layouts.btn_return_institutes')

@section('title', 'Registro de puntos de evacuación')

@section('content')
<div class="container-fluid h_header bg_grad_h pt-5">
   <div class="row">
      <div class="col">
         <div class="d-flex flex-column align-items-center">
            <h4 class="title text-center mt-2 mb-5">REGISTRAR INSTITUCIÓN PÚBLICA</h4>
            <div class="col-lg-10 bg-white p-3 p-sm-4 mb-3 rounded_1 shadow">
               <form action="{{route('addInstitution')}}" method="POST" class="form_custom" enctype="multipart/form-data">
                  {{csrf_field()}}
                  <div class="form-row">
                     <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                           <label for="name_place">Nombre</label>
                           <input type="text" class="form-control" name="name_place" id="name_place" aria-describedby="helpId"
                              placeholder="">
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                           <label for="address_place">Dirección</label>
                           <input type="text" class="form-control" name="address_place" id="address_place" aria-describedby="helpId"
                              placeholder="">
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                           <label for="type_place">Tipo de Entidad</label>
                           <select class="form-control" name="type_place" id="type_place">
                              <option value="">Seleccionar</option>
                              <option value="Comisaría">Comisaría</option>
                              <option value="Hospital">Hospital</option>
                              <option value="Posta">Posta</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                           <label for="address_place">Sitio Web</label>
                           <input type="text" class="form-control" name="website" id="website">
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                           <label for="type_place">Estado</label>
                           <select class="form-control" name="state" id="state">
                              <option value="">Seleccionar</option>
                              <option value="1">Aprobado</option>
                              <option value="0">Desaprobado</option>
                           </select>
                        </div>
                     </div>
                    <div class="form-group col-lg-6">
                       <label for="img">Imagen</label>
                       <input type="file" class="form-control-file" name="img" id="img" required>
                       <div class="invalid-feedback">Seleccione imagen</div>
                       <div class="valid-feedback">Imagen seleccionada</div>
                       <div class="d-flex justify-content-center pt-3">
                          <img src="{{asset('Image/img_default.png')}}" class="img-fluid rounded_1 img_reg shadow_light" id="img_output_01" alt="">
                        </div>
                     </div>
                     <div class="d-none">
                        <input type="text" name="latitude_place" id="latitude_place">
                        <input type="text" name="length_place" id="length_place">
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="col">
                        <p class="text-center">Seleccione ubicación en el mapa</p>
                        <div id="map" class="map_reg rounded_1 shadow"></div>
                     </div>
                  </div>
                  <div class="form-row mt-4 d-flex justify-content-center">
                     <div class="col-md-6 col-lg-3">
                        <button type="submit" class="col btn btn_grad_reg rounded-pill py-2">
                           REGISTRAR<i class="fas fa-plus ml-2"></i>
                        </button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')
<script type="text/javascript" src="{{asset('js/placesMap.js')}}"></script>

<script async defer
   src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMpejtLKPvpLv1KbtzGXpRC0yvPqm-w8o&callback=iniciarMap">
</script>


@endsection