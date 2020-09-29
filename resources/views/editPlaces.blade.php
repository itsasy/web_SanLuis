@extends('layouts.app')

@include('layouts.btn_return_places')

@section('title', 'Edición de negocios')

@section('content')
<div class="container-fluid h_header bg_grad_h pt-5">
   <div class="row">
      <div class="col">
         <div class="d-flex flex-column align-items-center">
            <h4 class="title text-center mt-2 mb-5">ACTUALIZAR NEGOCIO</h4>
            <div class="col-lg-10 bg-white p-3 p-sm-4 mb-3 rounded_1 shadow">
               <form action="{{route('editPlaces')}}" method="POST" class="form_custom" enctype="multipart/form-data">
                  {{csrf_field()}}
                  <div class="form-row">
                     <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                           <label for="name_place">Nombre</label>
                           <input type="text" class="form-control" name="name_place" id="name_place" aria-describedby="helpId"
                              placeholder="" value="{{$place[0]->name_place}}">
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                           <label for="type_place">Tipo de Lugar</label>
                           <select class="form-control" name="type_place" id="type_place">
                              <option <?php if($place[0]->type_place =='Restaurant') echo "selected";  ?>
                                 value="Restaurant">
                                 Restaurant</option>
                              <option <?php if($place[0]->type_place =='Mercados') echo "selected"; ?> value="Parques">
                                 Mercados
                              </option>
                              <option <?php if($place[0]->type_place =='Comercios') echo "selected"; ?> value="Parques">
                                 Comercios
                              </option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                           <label for="RUC">RUC</label>
                           <input type="text" class="form-control" name="RUC" id="" aria-describedby="helpId"
                              placeholder="" value="{{$place[0]->RUC}}">
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                           <label for="website">Sitio Web</label>
                           <input type="text" class="form-control" name="website" id="website" value="{{$place[0]->website}}">
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                           <label for="address_place">Dirección</label>
                           <input type="text" class="form-control" name="address_place" id="" aria-describedby="helpId"
                              placeholder="" value="{{$place[0]->address_place}}">
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                           <label for="ubication_maps">Url del mapa</label>
                           <input type="text" class="form-control" name="ubication_maps" id="ubication_maps" value="{{$place[0]->ubication_maps}}">
                        </div>
                     </div>
                     <div class="form-group col-lg-6">
                       <label for="img">Imagen</label>
                       <input type="file" class="form-control-file" name="img" id="img" required>
                       <div class="invalid-feedback">Seleccione imagen</div>
                       <div class="valid-feedback">Imagen seleccionada</div>
                        <div class="d-flex justify-content-center pt-3">
                           <img src="http://3.230.42.32:8080/ApiSanLuis/public/api/blogImg/{{$place[0]->img}}"
                              class="img-fluid rounded_1 img_reg shadow_light" id="img_output_01" alt="">
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
                  <div class="d-none">
                     <input type="text" id="id" name='id' value="{{request()->route('id')}}">
                  </div>
                  <div class="form-row mt-4 d-flex justify-content-center">
                     <div class="col-md-6 col-lg-3">
                        <button type="submit" class="col btn btn_grad_reg rounded-pill py-2">
                           ACTUALIZAR<i class="fas fa-sync-alt ml-2"></i>
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
<script type="text/javascript" src="{{asset('js/editPlacesMap.js')}}"></script>

<script async defer
   src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMpejtLKPvpLv1KbtzGXpRC0yvPqm-w8o&callback=iniciarMap">
</script>


@endsection