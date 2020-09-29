@extends('layouts.app')

@include('layouts.btn_return_map')

@section('title', 'Gráfico de incidencia')

@section('content')
<div class="container-fluid h_header bg_grad_h pt-5">
   <div class="row">
      <div class="col">
         <div class="d-flex flex-column align-items-center">
            <h4 class="title text-center mt-2 mb-5">ESTADÍSTICAS</h4>
            <div class="col-lg-11 bg-white rounded_1 p-3 p-sm-4 mb-3 shadow">
               <div class="graphic" id="contenedor">
                  <canvas id="grafico"></canvas>
               </div>
               <div class="text-right mt-3">
                  <button type="button" name="" id="pdf" class="btn btn_outl_p" onclick="savePDF();">
                     Descargar<i class="fas fa-download ml-2"></i>
                  </button>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection


@section('script')
<script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<script src="{{asset('/js/grafico.js')}}"></script>
@endsection