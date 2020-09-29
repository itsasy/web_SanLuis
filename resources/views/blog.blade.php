@extends('layouts.app')
@section('title', 'Blog San Luis')

@section('header')
<div class="">
    <nav class="navbar navbar-expand-lg navbar-dark bg_grad_h add-ff-nunito">
        <a class="navbar-brand d-lg-none" href="#"> <img src="{{asset('Image/img_logo_sl.png')}}"
                class="img-fluid mxh_5 mxw_10" alt=""> </a>
        <a name="" id="" class="btn btn-custom__transparent__red shadow text-white d-lg-none" href="#" role="button"
            data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
            aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-sliders-h fa-lg"></i></a>
        <div class="px-0 px-md-5 px-lg-4 collapse navbar-collapse justify-content-between" id="navbarResponsive">
            <a class="navbar-brand d-sm-none d-none d-lg-block" href="#">
                <img src="{{asset('Image/img_logo_sl.png')}}" class="img-fluid mxh_5" alt="">
            </a>
            <ul class="nav navbar-nav d-flex align-items-center align-md-items-end" id="justifiedTab" role="tablist">
                <li class="nav-item">
                    <a aria-controls="Nosotros" aria-selected="true" class="nav-link font-weight-bold active"
                        data-toggle="tab" href="#Nosotros" id="Nosotros-tab" role="tab">Nosotros</a>
                </li>
                <li class="nav-item mx-lg-5">
                    <a aria-controls="Noticias" aria-selected="true" class="nav-link font-weight-bold" data-toggle="tab"
                        href="#Noticias" id="Noticias-tab" role="tab">Noticias</a>
                </li>
                <li class="nav-item">
                    <a aria-controls="Eventos" aria-selected="true" class="nav-link font-weight-bold" data-toggle="tab"
                        href="#Eventos" id="Eventos-tab" role="tab">Eventos</a>
                </li>
                {{--<li class="nav-item mx-lg-5">
                    <a aria-controls="repo" aria-selected="true" class="nav-link font-weight-bold" data-toggle="tab"
                        href="#Asociadas" id="Asociadas-tab" role="tab">Empresas responsables</a>
                </li>--}}
                <li class="nav-item mx-lg-5">
                    <a class="nav-link font-weight-bold" href="{{route('Mapa')}}" id="" role="btn">Salir</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="tab-content">
                <!-- Selector de las secciones -->
                <div aria-labelledby="Nosotros-tab" class="tab-pane fade show active" id="Nosotros" role="tabpanel">
                    <!-- Empiezan las secciones -->

                    @foreach ($Home as $home)
                    @if ($loop->last)
                    @if(session('autenticacion')->type_id == 1)
                    {{--<div class="position-fixed mb-1 z_i_1 pt-4">
                        <a name="" id="" class="btn btn_circl_outl_p rounded-circle" href="{{route('addHome')}}"
                            role="button"><i class="fas fa-plus"></i></a>
                    </div>--}}
                    <div class="position-fixed mb-1 z_i_1 pt-4 r_0 mr-3">
                        <a name="" id="" class="btn btn_circl_outl_p rounded-circle my-2"
                            href="{{route('getHome', $home->id)}}" role="button"><i class="fas fa-pen"></i></a>
                        {{--<a name="" id="" class="btn btn_circl_outl_p rounded-circle"
                            href="{{route('deleteHome', $home->id)}}" role="button"><i class="fas fa-times"></i></a>
                        --}}
                    </div>
                    @endif
                    @endif
                    <div class="container z_i_0">
                        <h3 class="text_p txt_c font-weight-bold my-4">Gestión</h3>
                        <p class="text-justify text-secondary">{{$home->description}}</p>
                        <div class="row my-5">
                            <div class="col-lg-6">
                                <div class="card mh_18 border border-secondary rounded_1 mb-3 shadow">
                                    <div class="card-body">
                                        <a name="" id="" class="btn-block text-center" href="#" role="text"><i
                                                class="fas fa-chart-line fa-3x text_p"></i></a>
                                        <h5 class="text-secondary font-weight-bold text-center">Misión</h5>
                                        <p class="card-text text-secondary text-justify">{{$home->mission}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card mh_18 border border-secondary rounded_1 mb-3 shadow">
                                    <div class="card-body">
                                        <a name="" id="" class="btn-block text-center" href="#" role="text"><i
                                                class="fas fa-eye fa-3x text_p"></i></a>
                                        <h5 class="text-secondary font-weight-bold text-center">Visión</h5>
                                        <p class="card-text text-secondary text-justify">{{$home->vision}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card mh_18 border border-secondary rounded_1 mb-3 shadow">
                                    <div class="card-body">
                                        <a name="" id="" class="btn-block text-center" href="#" role="text"><i
                                                class="fas fa-grip-horizontal fa-3x text_p"></i></a>
                                        <h5 class="text-secondary font-weight-bold text-center">Nuestro equipo</h5>
                                        <p class="card-text text-secondary text-justify">{{$home->our_group}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="text_p txt_c font-weight-bold mb-4">¡Ubícanos!</h3>
                        <!--<iframe
                            src="{{$home->ubication_maps}}"
                            width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>-->
                            
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15606.123534867158!2d-76.9935014!3d-12.0757646!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3802453d265201b7!2sMunicipalidad%20Distrital%20de%20San%20Luis!5e0!3m2!1ses-419!2spe!4v1579369855117!5m2!1ses-419!2spe" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>

                    <div class="row bg_grad_h mt-4">
                        <div class="col">
                            <div class="container py-4">
                                <div class="row">
                                    <div class="col-lg-6 mb-3 mb-lg-0 text-white">
                                        <h3 class="txt_c font-weight-bold mb-4">Contacto</h3>
                                        <div class="row">
                                            <div class="col-lg-6 txt_c">
                                                <p><i class="fas fa-envelope fa-lg"></i> Email:</p>
                                            </div>
                                            <div class="col-lg-6 txt_c">
                                                <p>{{$home->email}}</p>
                                            </div>
                                            <div class="col-lg-6 txt_c">
                                                <p><i class="fas fa-phone fa-lg"></i> Teléfonos:</p>
                                            </div>
                                            <div class="col-lg-6 txt_c">
                                                <p>{{$home->phone_1}} / {{$home->phone_2}}</p>
                                            </div>
                                            <div class="col-lg-6 txt_c">
                                                <p><i class="fas fa-door-open fa-lg"></i> Horario de atención:</p>
                                            </div>
                                            <div class="col-lg-6 txt_c">
                                                <p>{{$home->time_start}} - {{$home->time_end}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-flex justify-content-center align-items-center">
                                        <img src="{{asset('Image/img_logo_sl.png')}}" class="img-fluid mxh__8" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Selector de las secciones 2 -->
                <div aria-labelledby="Noticias-tab" class="tab-pane fade" id="Noticias" role="tabpanel">
                    <!-- Empiezan las secciones 2 -->
                    @if(session('autenticacion')->type_id == 1)
                    <div class="position-fixed mb-1 z_i_1">
                        <a name="" id="" class="btn btn_circl_outl_p rounded-circle" href="{{route('addNews')}}"
                            role="button"><i class="fas fa-plus"></i></a>
                    </div>
                     @endif
                    <div class="container">
                        <h3 class="text_p txt_c font-weight-bold my-4">¡Entérate de las nuevas noticias!
                        </h3>
                        <div class="row">
                            @foreach($Noticias as $news)
                            <div class="col-lg-4">
                                <div class="card mb-3 card_reveal_effect_rotate_y rounded_1 shadow">
                                    <div class="inner-img rounded_t_1">
                                        <img src="http://3.230.42.32:8080/ApiSanLuis/public/api/blogImg/{{$news->image}}"
                                            class="card-img-top rounded_t_1 img_reg" alt="img-news">
                                        <p class="position-absolute text-white mt-n5 ml-3 ml-lg-4 py-1">
                                            <small>{{$news->author}}</small></p>
                                        <p
                                            class="position-absolute r_0 text-secondary bg-white mt-n5 mr-3 mr-lg-4 rounded-pill px-3 py-1">
                                            <i class="far fa-calendar-alt"></i><small class="font-weight-bold">
                                                {{$news->created_at}}</small>
                                        </p>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title font-weight-bold">{{$news->title}}</h5>
                                        <p class="card-text text-secondary text-justify mh__9">{{$news->description}}
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            <a name="" id="" class="text_p font-weight-bold" href="{{$news->url}}"
                                                role="link">{{$news->source}}</a>
                                            <p class="card-text"><small
                                                    class="text-muted font-weight-bold">{{$news->created_at}}</small>
                                            </p>
                                        </div>
                                    </div>
                                    @if(session('autenticacion')->type_id == 1)
                                    <div class="reveal rounded_1">
                                        <a name="" id="" class="btn btn_circl_outl_p rounded-circle"
                                            href="{{route('getNews', $news->id)}}" role="button"><i
                                                class="fas fa-pen"></i></a>
                                        <a name="" id="" class="btn btn_circl_outl_p rounded-circle mx-2"
                                            href="{{route('deleteNews', $news->id)}}" role="button"><i
                                                class="fas fa-times"></i></a>
                                        <a name="" id="" class="btn btn_circl_outl_p rounded-circle"
                                            href="{{$news->url}}" role="button"><i class="fas fa-chevron-right"></i></a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Selector de las secciones 3 -->
                <div aria-labelledby="Eventos-tab" class="tab-pane fade" id="Eventos" role="tabpanel">
                    <!-- Empiezan las secciones 3 -->
                    @if(session('autenticacion')->type_id == 1)
                    <div class="position-fixed mb-1 z_i_1">
                        <a name="" id="" class="btn btn_circl_outl_p rounded-circle" href="{{route('newEvents')}}"
                            role="button"><i class="fas fa-plus"></i></a>
                    </div>
                     @endif
                    <div class="container">
                        <h3 class="text_p txt_c font-weight-bold my-4">¡Entérate de los nuevos
                            eventos!
                        </h3>
                        <div class="row">
                            @foreach($Eventos as $events)
                            <div class="col-lg-4">
                                <div class="card mb-3 card_reveal_effect_rotate_y rounded_1 shadow">
                                    <div class="inner-img rounded_t_1">
                                        <img src="http://3.230.42.32:8080/ApiSanLuis/public/api/blogImg/{{$events->img_1}}"
                                            class="card-img-top rounded_t_1 img_reg" alt="img-events">
                                        
                                        <!-- 
                                        
                                        <div class="position-absolute mt-n5 w-100 d-flex justify-content-center">
                                            <p
                                                class="text-secondary bg-custom-transparent-white rounded-pill border px-3 py-1">
                                                </i><small class="font-weight-bold"></small>
                                            </p>
                                        </div>
                                        
                                        -->
                                        
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title text_p font-weight-bold text-center">
                                            {{$events->name}}</h5>
                                        <p class="card-text text-secondary text-justify">{{$events->description}}
                                        </p>
                                        <p class="card-text text-right"><small
                                                class="text-muted font-weight-bold">{{$events->date_event}}</small>
                                        </p>
                                    </div>
                                    @if(session('autenticacion')->type_id == 1)
                                    <div class="reveal rounded_1">
                                        <a name="" id="" class="btn btn_circl_outl_p rounded-circle mr-2"
                                            href="{{route('getEvents', $events->id)}}" role="button"><i
                                                class="fas fa-pen"></i></a>
                                        <a name="" id="" class="btn btn_circl_outl_p rounded-circle"
                                            href="{{route('deleteEvents', $events->id)}}" role="button"><i
                                                class="fas fa-times"></i></a>
                                    </div>
                                     @endif
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection