@extends('voyager::master')

@section('page_title', __('voyager::generic.view').' '.$dataType->display_name_singular)

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/hf/base.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/hf/fancy.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/hf/main.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/docs.css') }}">
@stop

@php
    $model = app('App\Models\Paciente');
    $d = $model::where('id',$dataTypeContent->paciente_id)->first();
@endphp

@section('content')
<div id="page-container">
    <div id="pf1" class="pf w0 h0" data-page-no="1">
        <div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="{{ asset('css/hf/bg1.png')}}" />
            <div class="c x1 y1 w2 h2">
                <div class="t m0 x2 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Servicios de Salud de Nuevo León </div>
            </div>
            <div class="c x3 y3 w3 h4">
                <div class="t m0 x4 h3 y4 ff1 fs0 fc0 sc0 ls0 ws0">Jurisdicción Sanitaria No. 7</div>
            </div>
            <div class="c x5 y5 w4 h5">
                <div class="t m0 x6 h6 y6 ff2 fs1 fc0 sc0 ls0 ws0">EXPEDIENTE CLÍNICO</div>
            </div>
            <div class="c x7 y7 w5 h7">
                <div class="t m0 x8 h8 y8 ff3 fs1 fc0 sc0 ls0 ws0">HOJA FRONTAL</div>
            </div>
            <div class="c x7 y9 w6 h9">
                <div class="t m0 x9 ha ya ff1 fs2 fc0 sc0 ls0 ws0">TIPO DE</div>
                <div class="t m0 x9 ha yb ff1 fs2 fc0 sc0 ls0 ws0">UNIDAD:</div>
            </div>
            <div class="c xa y9 w7 h9">
                <div class="t m0 x9 ha yb ff1 fs2 fc0 sc0 ls0 ws0">C.S.U</div>
            </div>
            <div class="c xb y9 w6 h9">
                <div class="t m0 xc hb y8 ff1 fs1 fc0 sc0 ls0 ws0">{{check(setting('centro-de-salud.type'),'CSU')}}</div>
            </div>
            <div class="c xd y9 w6 h9">
                <div class="t m0 x9 ha yb ff1 fs2 fc0 sc0 ls0 ws0">MÓVIL</div>
            </div>
            <div class="c xe y9 w7 h9">
                <div class="t m0 xc hb y8 ff1 fs1 fc0 sc0 ls0 ws0">{{check(setting('centro-de-salud.type'),'MOVIL',false)}}</div>
            </div>
            <div class="c xf y9 w7 h9">
                <div class="t m0 x9 ha yb ff1 fs2 fc0 sc0 ls0 ws0">UNEME</div>
            </div>
            <div class="c x10 y9 w6 h9">
                <div class="t m0 xc hb y8 ff1 fs1 fc0 sc0 ls0 ws0">{{check(setting('centro-de-salud.type'),'UNEME',false)}}</div>
            </div>
            <div class="c x7 yc w8 hc">
                <div class="t m0 x9 ha yb ff1 fs2 fc0 sc0 ls0 ws0">NOMBRE DE LA UNIDAD:</div>
            </div>
            <div class="c xb yc w9 hc">
                <div class="t m0 x11 ha yb ff1 fs2 fc0 sc0 ls0 ws0">{{setting('centro-de-salud.name',false)}}</div>
            </div>
            <div class="c xe yc w7 hc">
                <div class="t m0 x9 ha yb ff1 fs2 fc0 sc0 ls0 ws0">CLUES:</div>
            </div>
            <div class="c xf yc w7 hc">
                <div class="t m0 x11 ha yb ff1 fs2 fc0 sc0 ls0 ws0 fitty">
                    {{setting('centro-de-salud.clues')}}
                </div>
            </div>
            <div class="c x10 yc w6 hc">
                <div class="t m0 x9 hd yb ff4 fs2 fc0 sc0 ls0 ws0">TELEFONO:</div>
            </div>
            <div class="c xcs yc w6 hc">
                <div class="t m0 x9 hd yb ff4 fs2 fc0 sc0 ls0 ws0">{{setting('centro-de-salud.phone')}}</div>
            </div>
            <div class="c x7 yd w8 he">
                <div class="t m0 x9 hf ye ff1 fs3 fc0 sc0 ls0 ws0">DOMICILIO DE LA UNIDAD: </div>
            </div>
            <div class="c xb yf wa h10">
                <div class="t m0 x9 ha y10 ff1 fs2 fc0 sc0 ls0 ws0">{{setting('centro-de-salud.location')}}</div>
            </div>
            <div class="c x7 y11 w5 h11">
                <div class="t m0 x3 h8 y8 ff3 fs1 fc0 sc0 ls0 ws0">DATOS GENERALES DEL PACIENTE</div>
            </div>
            <div class="c x7 y12 w6 h12">
                <div class="t m0 x9 ha yb ff1 fs2 fc0 sc0 ls0 ws0">Nombre:</div>
            </div>
            <div class="c xa y12 w8 h12">
                <div class="t m0 x11 ha yb ff1 fs2 fc0 sc0 ls0 ws0 fitty">{{$d->apellido_paterno}}</div>
            </div>
            <div class="c xd y12 w8 h12">
                <div class="t m0 x11 ha yb ff1 fs2 fc0 sc0 ls0 ws0 fitty">{{$d->apellido_materno}}</div>
            </div>
            <div class="c xf y12 w8 h12">
                <div class="t m0 x9 ha yb ff1 fs2 fc0 sc0 ls0 ws0 fitty">{{$d->nombre}}</div>
            </div>
            <div class="c xa y13 w7 h13">
                <div class="t m0 x9 h14 y14 ff1 fs4 fc0 sc0 ls0 ws0">APELLIDO PATERNO</div>
            </div>
            <div class="c xd y13 w8 h13">
                <div class="t m0 x9 h15 y15 ff3 fs4 fc0 sc0 ls0 ws0">APELLIDO MATERNO</div>
            </div>
            <div class="c xf y13 w7 h13">
                <div class="t m0 x9 h14 y15 ff1 fs4 fc0 sc0 ls0 ws0">NOMBRE (S)</div>
            </div>
            <div class="c x7 y16 w6 h16">
                <div class="t m0 x9 ha yb ff1 fs2 fc0 sc0 ls0 ws0">Sexo:</div>
            </div>
            <div class="c xa y16 w8 h16">
                <div class="t m0 x9 ha yb ff1 fs2 fc0 sc0 ls0 ws0">{{$d->sexo == 'F' ? 'Femenino' : 'Masculino'}}</div>
            </div>
            <div class="c xd y16 w6 h16">
                <div class="t m0 x9 ha yb ff1 fs2 fc0 sc0 ls0 ws0">Edad</div>
            </div>
            <div class="c xe y16 wb h16">
                <div class="t m0 x9 ha yb ff1 fs2 fc0 sc0 ls0 ws0">{{date("Y") - $d->fecha_de_nacimiento->format("Y")}}</div>
            </div>
            <div class="c x7 y17 w8 h17">
                <div class="t m0 x9 ha yb ff1 fs2 fc0 sc0 ls0 ws0">Fecha de Nacimiento:</div>
            </div>
            <div class="c xb y17 w9 h17">
                <div class="t m0 x11 ha yb ff1 fs2 fc0 sc0 ls0 ws0">{{showDate($d->fecha_de_nacimiento)}}</div>
            </div>
            <div class="c xe y17 w7 h17">
                <div class="t m0 x9 ha yb ff1 fs2 fc0 sc0 ls0 ws0">CURP:</div>
            </div>
            <div class="c xf y17 w8 h17">
                <div class="t m0 x9 ha yb ff1 fs2 fc0 sc0 ls0 ws0">{{$d->CURP}}</div>
            </div>
            <div class="c x7 y18 w6 h18">
                <div class="t m0 x9 ha yb ff1 fs2 fc0 sc0 ls0 ws0">Domicilio</div>
            </div>
            <div class="c xa y18 wc h18">
                <div class="t m0 x9 ha yb ff1 fs2 fc0 sc0 ls0 ws0">{{$d->domicilio}}</div>
            </div>
            <div class="c x7 y19 w6 hc">
                <div class="t m0 x9 ha yb ff1 fs2 fc0 sc0 ls0 ws0">Teléfono:</div>
            </div>
            <div class="c xa y19 w8 hc">
                <div class="t m0 x9 ha y1a ff1 fs2 fc0 sc0 ls0 ws0">{{$d->telefono}}</div>
            </div>
            <div class="c xf y1b wb h19">
                <div class="t m0 x12 h1a yb ff3 fs2 fc0 sc0 ls0 ws0">Folio</div>
            </div>
            <div class="c x7 y1c w8 h1b">
                <div class="t m0 x13 h1a y1d ff3 fs2 fc0 sc0 ls0 ws0">Seguridad Social:</div>
            </div>
            <div class="c xb y1e wb h1c">
                <div class="t m0 x9 ha yb ff1 fs2 fc0 sc0 ls0 ws0">Seguro Popular</div>
            </div>
            <div class="c xf y1e wb h1c">
                <div class="t m0 x9 ha yb ff1 fs2 fc0 sc0 ls0 ws0">{{$d->seguro_popular}}</div>
            </div>
            <div class="c xb y1f wb h1c">
                <div class="t m0 x9 ha yb ff1 fs2 fc0 sc0 ls0 ws0">Seguro Siglo XXI </div>
            </div>
            <div class="c xf y1f wb h1c">
                <div class="t m0 x9 ha yb ff1 fs2 fc0 sc0 ls0 ws0">{{$d->seguro_siglo_xxi}}</div>
            </div>
            <div class="c xb y20 wb h1c">
                <div class="t m0 x9 ha yb ff1 fs2 fc0 sc0 ls0 ws0">PROSPERA</div>
            </div>
            <div class="c xf y20 wb h1c">
                <div class="t m0 x9 ha yb ff1 fs2 fc0 sc0 ls0 ws0">{{$d->prospera}}</div>
            </div>
            <div class="c xb y21 wb h1c">
                <div class="t m0 x9 ha yb ff1 fs2 fc0 sc0 ls0 ws0">Proocurador (a) voluntario (a)</div>
            </div>
            <div class="c xf y21 wb h1c">
                <div class="t m0 x9 ha yb ff1 fs2 fc0 sc0 ls0 ws0">{{$d->procurador_voluntario}}</div>
            </div>
            <div class="c xb y1c wb h1c">
                <div class="t m0 x9 ha yb ff1 fs2 fc0 sc0 ls0 ws0">Otros</div>
            </div>
            <div class="c xf y1c wb h1c">
                <div class="t m0 x9 ha yb ff1 fs2 fc0 sc0 ls0 ws0">{{$d->otros}}</div>
            </div>
            <div class="c x7 y22 w5 h1d">
                <div class="t m0 x14 h6 y23 ff2 fs1 fc0 sc0 ls0 ws0">GUÍA DEL EXPEDIENTE CLÍNICO</div>
            </div>
            <div class="c x7 y24 w8 h1e">
                <div class="t m0 x9 h1f y25 ff1 fs5 fc0 sc0 ls0 ws0">1.- HOJA FRONTAL</div>
            </div>
            <div class="c x10 y24 w6 h1e">
                <div class="t m0 x9 ha y26 ff1 fs2 fc0 sc0 ls0 ws0">#</div>
            </div>
            <div class="c x7 y27 wd h20">
                <div class="t m0 x9 h1f y28 ff1 fs5 fc0 sc0 ls0 ws0">2.- CONSENTIMIENTO DE ACEPTACION DE SERVICIOS DE PRIMER NIVEL, AVISO PRIVACIDAD</div>
            </div>
            <div class="c x10 y27 w6 h20">
                <div class="t m0 x9 ha y26 ff1 fs2 fc0 sc0 ls0 ws0">#</div>
            </div>
            <div class="c x7 y29 wd h21">
                <div class="t m0 x11 h1f y2a ff1 fs5 fc0 sc0 ls0 ws0">3.- PAQUETE GARANTIZADO DE SERVICIOS DE PREVENCION Y PROMOCION DE LA SALUD </div>
            </div>
            <div class="c x10 y29 w6 h21">
                <div class="t m0 x9 ha yb ff1 fs2 fc0 sc0 ls0 ws0">#</div>
            </div>
            <div class="c x7 y2b we h1e">
                <div class="t m0 x9 h1f y25 ff1 fs5 fc0 sc0 ls0 ws0">4.- HISTORIA CLINICA GENERAL O ADOLESCENTE O PEDIATRICA</div>
            </div>
            <div class="c x10 y2b w6 h1e">
                <div class="t m0 x9 ha y2c ff1 fs2 fc0 sc0 ls0 ws0">#</div>
            </div>
            <div class="c x7 y2d wf h20">
                <div class="t m0 x9 h1f y28 ff1 fs5 fc0 sc0 ls0 ws0">5.- HISTORIA CLINICA PRENATAL O PLANIFICACION FAMILIAR</div>
            </div>
            <div class="c x10 y2d w6 h20">
                <div class="t m0 x9 ha y26 ff1 fs2 fc0 sc0 ls0 ws0">#</div>
            </div>
            <div class="c x7 y2e wf h1e">
                <div class="t m0 x9 h1f y28 ff1 fs5 fc0 sc0 ls0 ws0">6.- NOTA DE EVOLUCION (DE MAS RECIENTE A MAS ANTIGUA)</div>
            </div>
            <div class="c x10 y2e w6 h1e">
                <div class="t m0 x9 ha y26 ff1 fs2 fc0 sc0 ls0 ws0">#</div>
            </div>
            <div class="c x7 y2f w8 h20">
                <div class="t m0 x9 h1f y28 ff1 fs5 fc0 sc0 ls0 ws0">7.- NOTA DE ENFERMERIA</div>
            </div>
            <div class="c x10 y2f w6 h20">
                <div class="t m0 x9 ha y26 ff1 fs2 fc0 sc0 ls0 ws0">#</div>
            </div>
            <div class="c x7 y30 wb h1e">
                <div class="t m0 x9 h1f y28 ff1 fs5 fc0 sc0 ls0 ws0">8.- REFERENCIA-CONTRARREFERENCIA</div>
            </div>
            <div class="c x10 y30 w6 h1e">
                <div class="t m0 x9 ha y26 ff1 fs2 fc0 sc0 ls0 ws0">#</div>
            </div>
            <div class="c x7 y31 wb h1e">
                <div class="t m0 x9 h1f y25 ff1 fs5 fc0 sc0 ls0 ws0">9.- SERVICIO DE LABORATORIO, TAMIZ, ETC</div>
            </div>
            <div class="c x10 y31 w6 h1e">
                <div class="t m0 x9 ha y26 ff1 fs2 fc0 sc0 ls0 ws0">#</div>
            </div>
            <div class="c x7 y32 we h20">
                <div class="t m0 x9 h1f y28 ff1 fs5 fc0 sc0 ls0 ws0">10.- SERVICIO DE GABINETE (RAYOS X, DOC, MAMA, TAMIZ, ETC.)</div>
            </div>
            <div class="c x10 y32 w6 h20">
                <div class="t m0 x9 ha y26 ff1 fs2 fc0 sc0 ls0 ws0">#</div>
            </div>
            <div class="c x7 y33 wf h1e">
                <div class="t m0 x9 h1f y28 ff1 fs5 fc0 sc0 ls0 ws0">11.- CONSENTIMIENTO INFORMADO (VIH, PF, ECT)</div>
            </div>
            <div class="c x10 y33 w6 h1e">
                <div class="t m0 x9 ha y26 ff1 fs2 fc0 sc0 ls0 ws0">#</div>
            </div>
            <div class="c x7 y34 w8 h1e">
                <div class="t m0 x9 h1f y25 ff1 fs5 fc0 sc0 ls0 ws0">12.- VISITAS DOMICILIARIAS</div>
            </div>
            <div class="c x10 y34 w6 h1e">
                <div class="t m0 x9 ha y2c ff1 fs2 fc0 sc0 ls0 ws0">#</div>
            </div>
            <div class="c x7 y35 we h20">
                <div class="t m0 x9 h1f y28 ff1 fs5 fc0 sc0 ls0 ws0">13.- OTROS DOCUMENTOS (CONSTANCIAS,GRAFICAS, CUESTIONARIOS, ETC. )</div>
            </div>
            <div class="c x10 y35 w6 h20">
                <div class="t m0 x9 ha y26 ff1 fs2 fc0 sc0 ls0 ws0">#</div>
            </div>
        </div>
        <div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
    </div>
</div>
@stop

@section('javascript')
    <script type="text/javascript" src="{{ asset('js/fitty.min.js') }}"></script>

    <script>
        $( document ).ready(function() {
            fitty('.fitty',{
            minSize: 32,
            maxSize: 300
            });
        });
    </script>
@stop
