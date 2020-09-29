@extends('layouts.app')

@include('layouts.btn_return_map')

@section('title', 'Modulos')

@section('content')
<div class="container-fluid h_header bg_grad_h pt-5">
  <div class="row">
    <div class="col">
      <div class="d-flex flex-column align-items-center">
        <h4 class="title text-center mt-2 mb-5">MODULOS</h4>
        <div class="col-lg-10">
          <div class="row">
            <div class="col-sm-6 col-lg-4 mb-4">
              <div class="card shadow rounded_1">
                <i class="fas fa-map-marked-alt fa-3x text-center mt-4 text_p"></i>
                <div class="card-body text-center">
                  <p class="card-title font-weight-bold text-secondary text-uppercase mh_5">PUNTOS DE EVACUACION</p>
                  <a name="" id="" class="btn btn_outl_p rounded-pill py-2 w-75" href="{{route('points')}}"
                    role="button">
                    <i class="fas fa-chevron-right"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4">
              <div class="card shadow rounded_1">
                <i class="fas fa-home fa-3x text-center mt-4 text_p"></i>
                <div class="card-body text-center">
                  <p class="card-title font-weight-bold text-secondary text-uppercase mh_5">INSTITUCIONES PÚBLICAS</p>
                  <a name="" id="" class="btn btn_outl_p rounded-pill py-2 w-75" href="{{route('institutes')}}"
                    role="button">
                    <i class="fas fa-chevron-right"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4">
              <div class="card shadow rounded_1">
                <i class="fas fa-shopping-cart fa-3x text-center mt-4 text_p"></i>
                <div class="card-body text-center">
                  <p class="card-title font-weight-bold text-secondary text-uppercase mh_5">NEGOCIO</p>
                  <a name="" id="" class="btn btn_outl_p rounded-pill py-2 w-75" href="{{route('places')}}"
                    role="button">
                    <i class="fas fa-chevron-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection