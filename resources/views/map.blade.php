@extends('layouts.app')
@section('sound')
<audio id="sonido" src="{{asset('js/alarma.mp3')}}" controls loop preload="auto" hidden></audio>

@endsection
@include('layouts.toggle_menu')

@section('title', 'Login')

@section('content')

<div class="h_header bg_grad_h d-flex justify-content-center align-items-center">
    <h2 class="title text-center">MAPA DE INCIDENCIAS</h2>
</div>
<div class="container-fluid barra">
    <div class="row">
        <div id="map" class="map"></div>
    </div>
    <!-- ************************************* -->

    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <h5 id=titulo class="text-primary font-weight-bold"></h5>
                </div>
                <div class="modal-body">
                    <h5>Nombre:</h5>
                    <p id="nombre" class="text-secondary"></p>
                    <h5>Ubicación:</h5>
                    <p id="lugar" class="text-secondary"></p>
                    <h5>DNI:</h5>
                    <p id="dni" class="text-secondary"></p>
                    <h5>Contacto:</h5>
                    <p id="contacto" class="text-secondary"></p>
                    <p id="date_alert" class="text-secondary text-right"></p>
                    <!--<div id="img"></div>-->
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="atendido"><i id='loadCircle' class='fa fa-circle-o-notch fa-spin'></i>&nbsp;Atendida</button>
                    <button type="button" class="btn btn-secondary" id="dismissButton">Cancelar</button>
                </div>
            </div>
        </div>
    </div>


    <!-- ************************************* -->

</div>

@endsection


@section('script')

@if(session('autenticacion')->type_id == 1)
<script type="text/javascript" src="{{asset('js/maps.js')}}"></script>
@elseif (session('autenticacion')->type_id == 2)
<script type="text/javascript" src="{{asset('js/maps_1.js')}}"></script>
@elseif(session('autenticacion')->type_id == 3)
<script type="text/javascript" src="{{asset('js/maps_2.js')}}"></script>
@elseif(session('autenticacion')->type_id == 4)
<script type="text/javascript" src="{{asset('js/maps_3.js')}}"></script>
@endif
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMpejtLKPvpLv1KbtzGXpRC0yvPqm-w8o&callback=iniciarMap">
</script>

@endsection

@section('websockets')
<script>
   
</script>

@endsection