@extends('voyager::master')

@section('page_title', __('voyager::generic.view').' '.$dataTypes[0]->display_name_singular)

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/notas/base.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/notas/fancy.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/notas/main.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/docs.css') }}">
@stop
@section('content')
<div id="page-container">
    <div id="pf1" class="pf w0 h0" data-page-no="1">
        <div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="{{asset('css/notas/bg1.png')}}" />
            <div class="c x1 y1 w2 h2">
                <div class="t m0 x2 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">SERVICIOS DE SALUD DE NUEVO LEÓN </div>
            </div>
            <div class="c x1 y3 w2 h4">
                <div class="t m0 x3 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">JURISDICCIÓN SANITARIA No. 7</div>
            </div>
            <div class="c x4 y4 w3 h4">
                <div class="t m0 x5 h3 y5 ff1 fs0 fc0 sc0 ls0 ws0">NOTA DE EVOLUCIÓN </div>
            </div>
            <div class="c x1 y6 w2 h2">
                <div class="t m0 x6 h5 y7 ff1 fs1 fc0 sc0 ls0 ws0">I. FICHA DE IDENTIFICACIÓN </div>
            </div>
            <div class="c x1 y8 w4 h6">
                <div class="t m0 x6 h7 y9 ff1 fs2 fc0 sc0 ls0 ws0">NOMBRE:</div>
            </div>
            <div class="c x7 y8 w5 h6">
                <div class="t m0 x6 h8 ya ff1 fs3 fc0 sc0 ls0 ws0">{{$d['pacientes']->fullName}}</div>
            </div>
            <div class="c x8 y8 w6 h6">
                <div class="t m0 x6 h7 y9 ff1 fs2 fc0 sc0 ls0 ws0">FECHA:</div>
            </div>
            <div class="c x9 y8 w7 h6">
                <div class="t m0 xa h8 ya ff1 fs3 fc0 sc0 ls0 ws0">{{showDate($d['historias_clinicas']->created_at)}} </div>
            </div>
            <div class="c xb y8 w4 h6">
                <div class="t m0 x6 h7 y9 ff1 fs2 fc0 sc0 ls0 ws0">HORA:</div>
            </div>
            <div class="c xc y8 w8 h6">
                <div class="t m0 xa h8 ya ff1 fs3 fc0 sc0 ls0 ws0">{{$d['historias_clinicas']->created_at->format('g:h:s a')}} </div>
            </div>
            <div class="c xd y8 w7 h6">
                <div class="t m0 x6 h5 y7 ff2 fs1 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c x1 yb w4 h2">
                <div class="t m0 x6 h7 yc ff1 fs2 fc0 sc0 ls0 ws0">EDAD:</div>
            </div>
            <div class="c x7 yb w7 h2">
                <div class="t m0 xa h8 yd ff1 fs3 fc0 sc0 ls0 ws0">{{date("Y")-$d['pacientes']->fecha_de_nacimiento->format("Y")}}</div>
            </div>
            <div class="c x4 yb w6 h2">
                <div class="t m0 x6 h7 yc ff1 fs2 fc0 sc0 ls0 ws0">SEXO:</div>
            </div>
            <div class="c xe yb w6 h2">
                <div class="t m0 xa h8 yd ff1 fs3 fc0 sc0 ls0 ws0"> {{$d['pacientes']->isFemale ? 'Mujer' : 'Hombre'}}</div>
            </div>
            <div class="c xf yb w6 h2">
                <div class="t m0 x6 h7 yc ff1 fs2 fc0 sc0 ls0 ws0">ADICCIONES:</div>
            </div>
            <div class="c x8 yb w9 h2">
                <div class="t m0 xa h8 yd ff1 fs3 fc0 sc0 ls0 ws0">{{ifValue($d['notas_pacientes']->adicciones)}}</div>
            </div>
            <div class="c xb yb w4 h2">
                <div class="t m0 x6 h8 yd ff1 fs3 fc0 sc0 ls0 ws0">EXPEDIENTE:</div>
            </div>
            <div class="c xc yb w8 h2">
                <div class="t m0 xa h9 ye ff1 fs4 fc0 sc0 ls0 ws0">{{$d['historias_clinicas']->id}} </div>
            </div>
            <div class="c xd yb w7 h2">
                <div class="t m0 x6 h5 y7 ff2 fs1 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c x1 yf w2 h2">
                <div class="t m0 x6 h5 y10 ff1 fs1 fc0 sc0 ls0 ws0">II. MOTIVO DE CONSULTA</div>
            </div>
            <div class="c x1 y11 w2 h2">
                <div class="t m0 x6 h8 yd ff2 fs3 fc0 sc0 ls0 ws0">{{$d['hc_motivo_padecimientos']->motivo_de_consulta}}</div>
            </div>
            <div class="c x1 y12 w2 h2">
                <div class="t m0 x6 h5 y10 ff1 fs1 fc0 sc0 ls0 ws0">III. PADECIMIENTO ACTUAL</div>
            </div>
            <div class="c x1 y13 w2 ha">
                <div class="t m0 x6 h8 y14 ff2 fs3 fc0 sc0 ls0 ws0">{{$d['hc_motivo_padecimientos']->padecimiento_actual}}</div>
                <div class="t m0 x6 h8 y15 ff2 fs3 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c x1 y16 w2 h2">
                <div class="t m0 x6 h5 y10 ff1 fs1 fc0 sc0 ls0 ws0">IV. EXPLORACIÓN FÍSICA</div>
            </div>
            <div class="c x1 y17 wa h2">
                <div class="t m0 x10 h7 yc ff1 fs2 fc0 sc0 ls0 ws0">SIGNOS VITALES Y SOMATOMETRÍA </div>
            </div>
            <div class="c x9 y17 wb h2">
                <div class="t m0 x6 h9 y18 ff2 fs4 fc0 sc0 ls0 ws0">GLICEMIA CAPILAR:</div>
            </div>
            <div class="c x1 y19 w4 h2">
                <div class="t m0 xa h9 y18 ff1 fs4 fc0 sc0 ls0 ws0">PESO: {{$d['hc_exploraciones_fisicas']->peso}}</div>
            </div>
            <div class="c x7 y19 w7 h2">
                <div class="t m0 xa h9 y18 ff1 fs4 fc0 sc0 ls0 ws0">TALLA: {{$d['hc_exploraciones_fisicas']->talla}}</div>
            </div>
            <div class="c x4 y19 w6 h2">
                <div class="t m0 xa h9 y18 ff1 fs4 fc0 sc0 ls0 ws0">IMC: {{$d['hc_exploraciones_fisicas']->imc}}</div>
            </div>
            <div class="c xe y19 w6 h2">
                <div class="t m0 x6 h9 y18 ff2 fs4 fc0 sc0 ls0 ws0">CC:</div>
            </div>
            <div class="c xf y19 w6 h2">
                <div class="t m0 x6 h9 y18 ff2 fs4 fc0 sc0 ls0 ws0">TA:</div>
            </div>
            <div class="c x8 y19 w6 h2">
                <div class="t m0 xa h9 y18 ff1 fs4 fc0 sc0 ls0 ws0">FC: {{$d['hc_exploraciones_fisicas']->fc}}</div>
            </div>
            <div class="c x9 y19 w7 h2">
                <div class="t m0 xa h9 y18 ff1 fs4 fc0 sc0 ls0 ws0">FR: {{$d['hc_exploraciones_fisicas']->fr}}</div>
            </div>
            <div class="c xb y19 w4 h2">
                <div class="t m0 xa h9 y18 ff1 fs4 fc0 sc0 ls0 ws0">TEMP: {{$d['hc_exploraciones_fisicas']->temperatura}}</div>
            </div>
            <div class="c xc y19 w8 h2">
                <div class="t m0 xa h9 y18 ff1 fs4 fc0 sc0 ls0 ws0">PULSO: {{$d['hc_exploraciones_fisicas']->pulso}}</div>
            </div>
            <div class="c xd y19 w7 h2">
                <div class="t m0 x6 h9 y18 ff2 fs4 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c x1 y1a w4 hb">
                <div class="t m0 x11 h9 y1b ff1 fs4 fc0 sc0 ls0 ws0">HABITUS</div>
                <div class="t m0 x12 h9 y1c ff1 fs4 fc0 sc0 ls0 ws0">EXTERIOR</div>
            </div>
            <div class="c x1 y1d w4 hc">
                <div class="t m0 x13 h9 y1e ff1 fs4 fc0 sc0 ls0 ws0">CABEZA</div>
            </div>
            <div class="c x7 y1d wc hc">
                <div class="t m0 x6 h8 y1f ff2 fs3 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->cabeza}}</div>
            </div>
            <div class="c x1 y20 w4 hc">
                <div class="t m0 x13 h9 y21 ff1 fs4 fc0 sc0 ls0 ws0">CUELLO</div>
            </div>
            <div class="c x7 y20 wc hc">
                <div class="t m0 x6 h8 y1f ff2 fs3 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->cuello}}</div>
            </div>
            <div class="c x1 y22 w4 hc">
                <div class="t m0 x14 h9 y21 ff1 fs4 fc0 sc0 ls0 ws0">TÓRAX</div>
            </div>
            <div class="c x7 y22 wc hc">
                <div class="t m0 x6 h8 y1f ff2 fs3 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->torax}}</div>
            </div>
            <div class="c x1 y23 w4 hc">
                <div class="t m0 x15 h9 y21 ff1 fs4 fc0 sc0 ls0 ws0">ABDOMEN</div>
            </div>
            <div class="c x7 y23 wc hc">
                <div class="t m0 x6 h8 y1f ff2 fs3 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->abdomen}}</div>
            </div>
            <div class="c x1 y24 w4 hd">
                <div class="t m0 x16 h9 y1e ff1 fs4 fc0 sc0 ls0 ws0">EXTREMIDADES </div>
            </div>
            <div class="c x7 y24 wc hd">
                <div class="t m0 x6 h8 y25 ff2 fs3 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->extremidades}}</div>
            </div>
            <div class="c x1 y26 w4 h6">
                <div class="t m0 x15 h9 y27 ff1 fs4 fc0 sc0 ls0 ws0">GENITALES</div>
            </div>
            <div class="c x7 y26 wc h6">
                <div class="t m0 x6 h8 y28 ff2 fs3 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->genital}}</div>
            </div>
            <div class="c x1 y29 w4 h6">
                <div class="t m0 x17 h9 y27 ff1 fs4 fc0 sc0 ls0 ws0">NEUROLÓGICO</div>
            </div>
            <div class="c x7 y29 wc h6">
                <div class="t m0 x6 h8 y28 ff2 fs3 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->neurologico}}</div>
            </div>
            <div class="c x1 y2a w4 h6">
                <div class="t m0 x18 h9 y27 ff1 fs4 fc0 sc0 ls0 ws0">PIEL</div>
            </div>
            <div class="c x7 y2a wc h6">
                <div class="t m0 x6 h8 y28 ff2 fs3 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->piel}}</div>
            </div>
            <div class="c x1 y2b w4 h2">
                <div class="t m0 x14 h9 ye ff1 fs4 fc0 sc0 ls0 ws0">OTROS</div>
            </div>
            <div class="c x7 y2b wc h2">
                <div class="t m0 x6 h8 yd ff2 fs3 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->otros}}</div>
            </div>
            <div class="c x1 y2c w2 h2">
                <div class="t m0 x6 h5 y10 ff1 fs1 fc0 sc0 ls0 ws0">V. ESTUDIOS AUXILIARES DE DIAGNÓSTICO </div>
            </div>
            <div class="c x1 y2d w2 he">
                <div class="t m0 x6 h8 y2e ff2 fs3 fc0 sc0 ls0 ws0">{{$d['hc_pronosticos']->estudios_auxiliares_de_diagnostico}}</div>
            </div>
            <div class="c x1 y2f w2 h2">
                <div class="t m0 x6 h5 y10 ff1 fs1 fc0 sc0 ls0 ws0">VI. IMPRESIÓN DIAGNÓSTICA </div>
            </div>
            <div class="c x1 y30 w2 hf">
                <div class="t m0 x6 h8 y31 ff2 fs3 fc0 sc0 ls0 ws0">{{$d['hc_pronosticos']->impresión_diagnostica}}</div>
            </div>
            <div class="c x1 y32 w2 h2">
                <div class="t m0 x6 h5 y10 ff1 fs1 fc0 sc0 ls0 ws0">VII. TERAPÉUTICA</div>
            </div>
            <div class="c x1 y33 wd h10">
                <div class="t m0 x19 h7 y34 ff1 fs2 fc0 sc0 ls0 ws0">MEDICAMENTO </div>
            </div>
            <div class="c xe y33 w6 h10">
                <div class="t m0 x14 h7 y34 ff1 fs2 fc0 sc0 ls0 ws0">DOSIS</div>
            </div>
            <div class="c xf y33 w6 h10">
                <div class="t m0 x1a h7 y34 ff1 fs2 fc0 sc0 ls0 ws0">VÍA</div>
            </div>
            <div class="c x8 y33 we h10">
                <div class="t m0 x1b h7 y34 ff1 fs2 fc0 sc0 ls0 ws0">PERIODICIDAD</div>
            </div>
            <div class="c x1 y35 w2 h2">
                <div class="t m0 x6 h5 y10 ff1 fs1 fc0 sc0 ls0 ws0">VIII. CUIDADOS GENERALES </div>
            </div>
            <div class="c x1 y36 w2 he">
                <div class="t m0 x6 h8 y37 ff2 fs3 fc0 sc0 ls0 ws0">{{$d['hc_pronosticos']->cuidados_generales}}</div>
            </div>
            <div class="c x1 y38 wb h2">
                <div class="t m0 x6 h5 y7 ff1 fs1 fc0 sc0 ls0 ws0">XIV. PRONÓSTICO</div>
            </div>
            <div class="c x4 y38 w9 h2">
                <div class="t m0 xa h8 y39 ff2 fs3 fc0 sc0 ls0 ws0">{{$d['hc_pronosticos']->pronostico}}</div>
            </div>
            <div class="c xf y38 w6 h2">
                <div class="t m0 x1c h7 y3a ff2 fs2 fc0 sc0 ls0 ws0">REFERIDO A: </div>
            </div>
            <div class="c x8 y38 we h2">
                <div class="t m0 x6 h8 y39 ff2 fs3 fc0 sc0 ls0 ws0">{{$d['nucleos']->nombre}}</div>
            </div>
            <div class="c x1 y3b w4 h2">
                <div class="t m0 xa h11 y3c ff2 fs5 fc0 sc0 ls0 ws0">PRÓXIMA CITA: </div>
            </div>
            <div class="c x7 y3b wf h2">
                <div class="t m0 x6 h8 yd ff2 fs3 fc0 sc0 ls0 ws0">{{$d['hc_pronosticos']->proxima_cita}}</div>
            </div>
            <div class="c xf y3d w10 h12">
                <div class="t m0 x1d h7 y9 ff1 fs2 fc0 sc0 ls0 ws0">NOMBRE, FIRMA Y CÉDULA DEL MÉDICO(A) TRATANTE </div>
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
            minSize: 30,
            maxSize: 40
            });
        });
    </script>
@stop
