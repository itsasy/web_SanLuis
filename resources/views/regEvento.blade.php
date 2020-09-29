@extends('layouts.app')
@include('layouts.toggle_menu')

@section('content')
<div class="container-fluid pt-5 bg_grad_h h_header">
    <div class="row">
        <div class="col d-flex flex-column align-items-center">
            <h4 class="text-center text-white text-uppercase mt-2 mb-4 ff_saira">REGISTRO DE EVENTOS
            </h4>
            <form action="{{route('saveEvents')}}" method="POST" enctype="multipart/form-data"
                class="col-lg-8 px-3 px-sm-4 pt-3 pt-sm-4 pb-1 mb-4 form_reg bg-white rounded_1 shadow needs-validation"
                novalidate>
                @csrf
                <div class="py-3">
                    <div class="d-flex justify-content-center mb-2">
                        <p class="subarea_reg font-weight-bold text-secondary text-center py-2 px-3 position-absolute mt-n3
                        bg-white rounded_1">
                            Datos del evento</p>
                    </div>
                    <div class="subarea_reg rounded_1 pt-4 px-2 px-sm-3 pb-2 pb-sm-3">
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" id="name" maxlength="200" class="form-control rounded_1"
                                placeholder="Ingrese nombre del evento" required>
                            <div class="invalid-feedback">Ingrese nombre del evento</div>
                            <div class="valid-feedback">Nombre del evento ingresado</div>
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea class="form-control form-control_textarea_lg rounded_1" name="description"
                                id="description" maxlength="500" placeholder="Ingrese descripción" required></textarea>
                            <div class="invalid-feedback">Ingrese descripción</div>
                            <div class="valid-feedback">Descripción del evento ingresado</div>
                        </div>
                    </div>
                </div>
                <div class="py-3">
                    <div class="d-flex justify-content-center mb-2">
                        <p class="subarea_reg font-weight-bold text-secondary text-center py-2 px-3
                        position-absolute mt-n3 bg-white rounded_1">
                            Galería del evento</p>
                    </div>
                    <div class="subarea_reg rounded_1 pt-4 px-2 px-sm-3 pb-2 pb-sm-3">
                        <div class="form-row d-flex justify-content-center">
                            <div class="form-group col-lg-6">
                                <label for="img_1">Imagen 01</label>
                                <input type="file" class="form-control-file" name="img_1" id="img_1" required>
                                <div class="invalid-feedback">Seleccione imagen</div>
                                <div class="valid-feedback">Imagen seleccionada</div>
                                <div class="d-flex justify-content-center pt-3">
                                    <img src="{{asset('Image/img_default.png')}}" class="img-fluid rounded_1 img_reg"
                                        id="img_output_01" alt="">
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="img_2">Imagen 02</label>
                                <input type="file" class="form-control-file" name="img_2" id="img_2" required>
                                <div class="invalid-feedback">Seleccione imagen</div>
                                <div class="valid-feedback">Imagen seleccionada</div>
                                <div class="d-flex justify-content-center pt-3">
                                    <img src="{{asset('Image/img_default.png')}}" class="img-fluid rounded_1 img_reg"
                                        id="img_output_02" alt="">
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="img_3">Imagen 03</label>
                                <input type="file" class="form-control-file" name="img_3" id="img_3" required>
                                <div class="invalid-feedback">Seleccione imagen</div>
                                <div class="valid-feedback">Imagen seleccionada</div>
                                <div class="d-flex justify-content-center pt-3">
                                    <img src="{{asset('Image/img_default.png')}}" class="img-fluid rounded_1 img_reg"
                                        id="img_output_03" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-3">
                    <div class="d-flex justify-content-center mb-2">
                        <p class="subarea_reg font-weight-bold text-secondary text-center py-2 px-3 position-absolute mt-n3
                        bg-white rounded_1">
                            Datos de publicación</p>
                    </div>
                    <div class="subarea_reg rounded_1 pt-4 px-2 px-sm-3 pb-2 pb-sm-3">
                        <div class="d-flex justify-content-center">
                            <div class="form-group col-lg-6 p-0">
                                <label for="date_event">Fecha</label>
                                <input type="date" name="date_event" id="date_event" class="form-control rounded_1"
                                    placeholder="" required>
                                <div class="invalid-feedback">Seleccione fecha</div>
                                <div class="valid-feedback">Fecha seleccionada</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-lg-4 d-flex">
                        <a name="" id="" class="btn btn_circl_outl_p rounded-circle mr-2" href="{{route('Blog')}}"
                            role="button"><i class="fas fa-times"></i></a>
                        <button class="btn btn_grad_reg col rounded-pill" type="submit">Registrar<i
                                class="fas fa-angle-double-right ml-2"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection