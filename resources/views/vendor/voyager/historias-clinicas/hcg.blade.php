@extends('voyager::master')

@section('page_title', __('voyager::generic.view').' '.$dataTypes[0]->display_name_singular)

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/hcg/base.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/hcg/fancy.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/hcg/main.css') }}">
    <style>
    .w100{
        width:100px;
    }
    .h1, .h2, .h3, .h4, .h5, .h6, h4, h5, h6{
        margin:0;
    }
    </style>
@stop
@php
    //dd($d);
@endphp
@section('content')
<div id="page-container">
    <div id="pf1" class="pf w0 h0" data-page-no="1">
        <div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="{{asset('css/hcg/bg1.png')}}" />
            <div class="c x1 y1 w2 h2">
                <div class="t m0 x2 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">SERVICIOS DE SALUD DE NUEVO LEÓN</div>
            </div>
            <div class="c x1 y3 w2 h2">
                <div class="t m0 x3 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">JURISDICCIÓN SANITARIA No. 7</div>
            </div>
            <div class="c x4 y4 w3 h4">
                <div class="t m0 x5 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">HISTORIA CLÍNICA GENERAL </div>
            </div>
            <div class="c x1 y5 w4 h5">
                <div class="t m0 x6 h6 y6 ff1 fs1 fc0 sc0 ls0 ws0">CENTRO DE SALUD:</div>
            </div>
            <div class="c x4 y5 w5 h5">
                <div class="t m0 x7 h7 y7 ff2 fs2 fc0 sc0 ls0 ws0">{{setting('centro-de-salud.name')}}</div>
            </div>
            <div class="c x8 y5 w6 h5">
                <div class="t m0 x6 h6 y6 ff1 fs1 fc0 sc0 ls0 ws0">NÚCLEO:</div>
            </div>
            <div class="c x9 y5 w7 h5">
                <div class="t m0 x7 h8 y7 ff3 fs2 fc0 sc0 ls0 ws0">{{$d['nucleos']->nombre}}</div>
            </div>
            <div class="c xa y5 w8 h5">
                <div class="t m0 x6 h6 y6 ff1 fs1 fc0 sc0 ls0 ws0">EXPEDIENTE:</div>
            </div>
            <div class="c xb y5 w9 h5">
                <div class="t m0 x6 h8 y7 ff3 fs2 fc0 sc0 ls0 ws0">{{$d['historias_clinicas']->id}}</div>
            </div>
            <div class="c xc y8 wa h5">
                <div class="t m0 x6 h6 y6 ff1 fs1 fc0 sc0 ls0 ws0">FECHA:</div>
            </div>
            <div class="c x8 y8 wb h5">
                <div class="t m0 x7 h8 y7 ff3 fs2 fc0 sc0 ls0 ws0">{{$d['historias_clinicas']->created_at->format('j-m-Y')}}</div>
            </div>
            <div class="c xa y8 w8 h5">
                <div class="t m0 x6 h6 y6 ff1 fs1 fc0 sc0 ls0 ws0">HORA:</div>
            </div>
            <div class="c xb y8 w9 h5">
                <div class="t m0 x7 h8 y7 ff3 fs2 fc0 sc0 ls0 ws0">{{$d['historias_clinicas']->created_at->format('g:h:s a')}}</div>
            </div>
            <div class="c x1 y9 w2 h5">
                <div class="t m0 x6 h9 ya ff1 fs3 fc0 sc0 ls0 ws0">I. FICHA DE IDENTIFICACIÓN</div>
            </div>
            <div class="c x1 yb w8 h2">
                <div class="t m0 x6 h6 y6 ff1 fs1 fc0 sc0 ls0 ws0">NOMBRE:</div>
            </div>
            <div class="c xd yb wc h2">
                <div class="t m0 x6 h8 y7 ff3 fs2 fc0 sc0 ls0 ws0">{{$d['pacientes']->fullName}}</div>
            </div>
            <div class="c x9 yb w7 h2">
                <div class="t m0 x6 h6 y6 ff1 fs1 fc0 sc0 ls0 ws0">EDAD:</div>
            </div>
            <div class="c xa yb w8 h2">
                <div class="t m0 x7 h8 y7 ff3 fs2 fc0 sc0 ls0 ws0">{{date("Y")-$d['pacientes']->fecha_de_nacimiento->format("Y")}}</div>
            </div>
            <div class="c xb yb w9 h2">
                <div class="t m0 x6 ha yc ff1 fs4 fc0 sc0 ls0 ws0">FECHA NAC.: {{$d['pacientes']->fecha_de_nacimiento->format('j-m-Y')}}</div>
            </div>
            <div class="c x1 yd w8 h5">
                <div class="t m0 x6 h6 y6 ff1 fs1 fc0 sc0 ls0 ws0">DOMICILIO: </div>
            </div>
            <div class="c xd yd wd h5">
                <div class="t m0 x6 h8 y7 ff3 fs2 fc0 sc0 ls0 ws0">{{$d['pacientes']->domicilio}}</div>
            </div>
            <div class="c x8 yd w6 h5">
                <div class="t m0 x6 h6 y6 ff1 fs1 fc0 sc0 ls0 ws0">LOCALIDAD:</div>
            </div>
            <div class="c x9 yd we h5">
                <div class="t m0 x6 h8 y7 ff3 fs2 fc0 sc0 ls0 ws0">{{$d['pacientes']->localidad}}</div>
            </div>
            <div class="c xb yd w100 h5">
                <div class="t m0 x6 h6 y6 ff1 fs1 fc0 sc0 ls0 ws0">SEXO: {{$d['pacientes']->isFemale ? 'Mujer' : 'Hombre'}}</div>
            </div>
            <div class="c x1 ye w2 h5">
                <div class="t m0 x6 h9 ya ff1 fs3 fc0 sc0 ls0 ws0">II. EVALUACIÓN INICIAL </div>
            </div>
            <div class="c x1 yf w8 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">ORIGINARIO(A):</div>
            </div>
            <div class="c xd yf wd h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_evaluaciones_iniciales']->originario}}</div>
            </div>
            <div class="c x8 yf w6 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">GRUPO ÉTNICO:</div>
            </div>
            <div class="c x9 yf w10 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_evaluaciones_iniciales']->grupo_etnico}}</div>
            </div>
            <div class="c x1 y11 w8 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">ESCOLARIDAD:</div>
            </div>
            <div class="c xd y11 wd h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_evaluaciones_iniciales']->escolaridad}}</div>
            </div>
            <div class="c x8 y11 w6 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">IDIOMA:</div>
            </div>
            <div class="c x9 y11 w10 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_evaluaciones_iniciales']->idioma}}</div>
            </div>
            <div class="c x1 y12 w8 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">RELIGIÓN:</div>
            </div>
            <div class="c xd y12 wd h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_evaluaciones_iniciales']->religion}}</div>
            </div>
            <div class="c x8 y12 w6 h2">
                <div class="t m0 x7 hc y13 ff3 fs6 fc0 sc0 ls0 ws0">ACEPTARÍA TRANSFUSIÓN SANGUÍNEA:</div>
            </div>
            <div class="c x9 y12 w10 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_evaluaciones_iniciales']->aceptaria_transfusion_sanguinea}}</div>
            </div>
            <div class="c x1 y14 w8 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">OCUPACIÓN:</div>
            </div>
            <div class="c xd y14 wd h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_evaluaciones_iniciales']->ocupacion}}</div>
            </div>
            <div class="c x8 y14 w6 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">INGRESO MENSUAL:</div>
            </div>
            <div class="c x9 y14 w10 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_evaluaciones_iniciales']->ingreso_mensual}}</div>
            </div>
            <div class="c x1 y15 w8 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">ESTADO CIVIL:</div>
            </div>
            <div class="c xd y15 wd h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_evaluaciones_iniciales']->estado_civil}}</div>
            </div>
            <div class="c x8 y15 w6 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">PASATIEMPOS:</div>
            </div>
            <div class="c x9 y15 w10 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_evaluaciones_iniciales']->pasatiempos}}</div>
            </div>
            <div class="c x1 y16 w8 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">VIVIENDA: </div>
            </div>
            <div class="c xd y16 w11 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">PROPIA: ({{$d['hc_evaluaciones_iniciales']->vivienda=='propia' ? 'X' : ''}}) </div>
            </div>
            <div class="c x4 y16 w11 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">RENTA: ({{$d['hc_evaluaciones_iniciales']->vivienda=='renta' ? 'X' : ''}})</div>
            </div>
            <div class="c xc y16 wa h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">OTROS: ({{$d['hc_evaluaciones_iniciales']->vivienda=='otros' ? 'X' : ''}})</div>
            </div>
            <div class="c x8 y16 w6 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">SERVICIOS:</div>
            </div>
            <div class="c x9 y16 w7 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">AGUA: ({{in_array('agua',$d['hc_evaluaciones_iniciales']->servicios)}})</div>
            </div>
            <div class="c xa y16 w8 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">DRENAJE: ({{in_array('drenaje',$d['hc_evaluaciones_iniciales']->servicios)}})</div>
            </div>
            <div class="c xb y16 wf h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">LUZ: ({{in_array('luz',$d['hc_evaluaciones_iniciales']->servicios)}})</div>
            </div>
            <div class="c xe y16 w11 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">GAS: ({{in_array('gas',$d['hc_evaluaciones_iniciales']->servicios)}})</div>
            </div>
            <div class="c x1 y17 w4 h2">
                <div class="t m0 x6 h6 y6 ff1 fs1 fc0 sc0 ls0 ws0">EVALUACIÓN PSICOLÓGICA:</div>
            </div>
            <div class="c x4 y17 w11 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">DEPRESIÓN:</div>
            </div>
            <div class="c xc y17 wa h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hcg_ev_psicologicas_evaluaciones']->depresion}}</div>
            </div>
            <div class="c x8 y17 w6 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">ANSIEDAD:</div>
            </div>
            <div class="c x9 y17 w7 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hcg_ev_psicologicas_evaluaciones']->ansiedad}}</div>
            </div>
            <div class="c xa y17 w8 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">DELIRIOS:</div>
            </div>
            <div class="c xb y17 w9 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hcg_ev_psicologicas_evaluaciones']->delirios}}</div>
            </div>
            <div class="c x4 y18 w11 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">AGRESIVIDAD:</div>
            </div>
            <div class="c xc y18 wa h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hcg_ev_psicologicas_evaluaciones']->agresividad}}</div>
            </div>
            <div class="c x8 y18 w6 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">INSOMNIO:</div>
            </div>
            <div class="c x9 y18 w7 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hcg_ev_psicologicas_evaluaciones']->insomnio}}</div>
            </div>
            <div class="c xa y18 w8 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">AMNESIA:</div>
            </div>
            <div class="c xb y18 w9 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hcg_ev_psicologicas_evaluaciones']->amnesia}}</div>
            </div>
            <div class="c x4 y19 w11 h5">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">IDEAS SUICIDAS:</div>
            </div>
            <div class="c xc y19 wa h5">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hcg_ev_psicologicas_evaluaciones']->ideas_suicidas}}</div>
            </div>
            <div class="c x8 y19 w6 h5">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">OTROS:</div>
            </div>
            <div class="c x9 y19 w10 h5">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hcg_ev_psicologicas_evaluaciones']->otros}}</div>
            </div>
            <div class="c x1 y1a w2 h5">
                <div class="t m0 x6 h9 ya ff1 fs3 fc0 sc0 ls0 ws0">III. ANTECEDENTES</div>
            </div>
            <div class="c x1 y1b w2 h5">
                <div class="t m0 x6 h6 y1c ff1 fs1 fc0 sc0 ls0 ws0">A) HEREDO-FAMILIARES</div>
            </div>
            <div class="c x1 y1d w8 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">DIABETES:</div>
            </div>
            <div class="c xd y1d w12 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_antecedentes_familiares']->diabetes}}</div>
            </div>
            <div class="c xc y1d wa h2">
                <div class="t m0 x6 hd y1e ff3 fs7 fc0 sc0 ls0 ws0">HIPERTENSIÓN:</div>
            </div>
            <div class="c x8 y1d wb h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_antecedentes_familiares']->hipertension}}</div>
            </div>
            <div class="c xa y1d w8 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">DISLIPIDEMIAS:</div>
            </div>
            <div class="c xb y1d w9 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_antecedentes_familiares']->dislipidemias}}</div>
            </div>
            <div class="c x1 y1f w8 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">OBESIDAD:</div>
            </div>
            <div class="c xd y1f w12 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_antecedentes_familiares']->obesidad}}</div>
            </div>
            <div class="c xc y1f wa h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">ALERGIAS:</div>
            </div>
            <div class="c x8 y1f wb h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_antecedentes_familiares']->alergias}}</div>
            </div>
            <div class="c xa y1f w8 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">ONCOLÓGICOS:</div>
            </div>
            <div class="c xb y1f w9 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_antecedentes_familiares']->oncologicos}}</div>
            </div>
            <div class="c x1 y20 w8 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">NEFROPATÍAS:</div>
            </div>
            <div class="c xd y20 w12 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_antecedentes_familiares']->nefropatias}}</div>
            </div>
            <div class="c xc y20 wa h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">CARDIOPATÍAS:</div>
            </div>
            <div class="c x8 y20 wb h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_antecedentes_familiares']->cardiopatias}}</div>
            </div>
            <div class="c xa y20 w8 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">NEUMOPATÍAS:</div>
            </div>
            <div class="c xb y20 w9 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_antecedentes_familiares']->neumopatias}}</div>
            </div>
            <div class="c x1 y21 w8 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">PSIQUIÁTRICOS:</div>
            </div>
            <div class="c xd y21 w12 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_antecedentes_familiares']->psiquiatricos}}</div>
            </div>
            <div class="c xc y21 wa h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">OTROS: </div>
            </div>
            <div class="c x8 y21 wb h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_antecedentes_familiares']->otros}}</div>
            </div>
            <div class="c x1 y22 w2 h2">
                <div class="t m0 x6 h6 y6 ff1 fs1 fc0 sc0 ls0 ws0">B) PERSONALES NO PATOLÓGICOS</div>
            </div>
            <div class="c x1 y23 w8 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">INMUNIZACIONES:</div>
            </div>
            <div class="c xd y23 w12 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_no_pats']->inmunizaciones}}</div>
            </div>
            <div class="c xc y23 wa h2">
                <div class="t m0 x7 he y24 ff3 fs8 fc0 sc0 ls0 ws0">HABITOS ALIMENTICIOS :</div>
            </div>
            <div class="c x8 y23 wb h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_no_pats']->habitos_alimenticios}}</div>
            </div>
            <div class="c xa y23 w8 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">ACTIVIDAD FÍSICA:</div>
            </div>
            <div class="c xb y23 w9 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_no_pats']->actividad_fisica}}</div>
            </div>
            <div class="c x1 y25 w8 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">TRANSFUSIONES:</div>
            </div>
            <div class="c xd y25 w12 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_no_pats']->transfusiones}}</div>
            </div>
            <div class="c xc y25 wa h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">HIGIENE:</div>
            </div>
            <div class="c x8 y25 wb h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_no_pats']->higiene}}</div>
            </div>
            <div class="c xa y25 w8 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">AUTOMEDICACIÓN:</div>
            </div>
            <div class="c xb y25 w9 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_no_pats']->automedicacion}}</div>
            </div>
            <div class="c x1 y26 w8 h5">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">TATUAJES:</div>
            </div>
            <div class="c xd y26 w12 h5">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_no_pats']->tatuajes}}</div>
            </div>
            <div class="c xc y26 wa h5">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">PERFORACIONES:</div>
            </div>
            <div class="c x8 y26 wb h5">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_no_pats']->perforaciones}}</div>
            </div>
            <div class="c xa y26 w8 h5">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">OTROS:</div>
            </div>
            <div class="c xb y26 w9 h5">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_no_pats']->otros}}</div>
            </div>
            <div class="c x1 y27 w2 h2">
                <div class="t m0 x6 h6 y6 ff1 fs1 fc0 sc0 ls0 ws0">C) PERSONALES PATÓLOGICOS</div>
            </div>
            <div class="c x1 y28 w8 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">DIABETES:</div>
            </div>
            <div class="c xd y28 w11 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_pats']->diabetes}}</div>
            </div>
            <div class="c x4 y28 w11 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">HIPERTENSIÓN:</div>
            </div>
            <div class="c xc y28 wa h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_pats']->hipertension}}</div>
            </div>
            <div class="c x8 y28 w6 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">DISLIPIDEMIAS:</div>
            </div>
            <div class="c x9 y28 we h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_pats']->dislipidemias}}</div>
            </div>
            <div class="c xb y28 w9 h2">
                <div class="t m0 x6 h8 y7 ff1 fs2 fc0 sc0 ls0 ws0">ADICCIONES</div>
            </div>
            <div class="c x1 y29 w8 hf">
                <div class="t m0 x6 hb y2a ff3 fs5 fc0 sc0 ls0 ws0">OBESIDAD:</div>
            </div>
            <div class="c xd y29 w11 hf">
                <div class="t m0 x7 hb y2a ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_pats']->obesidad}}</div>
            </div>
            <div class="c x4 y29 w11 hf">
                <div class="t m0 x6 hb y2a ff3 fs5 fc0 sc0 ls0 ws0">ALERGIAS:</div>
            </div>
            <div class="c xc y29 wa hf">
                <div class="t m0 x7 hb y2a ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_pats']->alergias}}</div>
            </div>
            <div class="c x8 y29 w6 hf">
                <div class="t m0 x6 hb y2a ff3 fs5 fc0 sc0 ls0 ws0">CIRUGÍAS:</div>
            </div>
            <div class="c x9 y29 we hf">
                <div class="t m0 x7 hb y2a ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_pats']->cirugias}}</div>
            </div>
            <div class="c xb y29 wf hf">
                <div class="t m0 x6 hb y2a ff3 fs5 fc0 sc0 ls0 ws0">TABACO:</div>
            </div>
            <div class="c x1 y2b w8 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">NEFROPATÍAS:</div>
            </div>
            <div class="c xd y2b w11 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_pats']->nefropatias}}</div>
            </div>
            <div class="c x4 y2b w11 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">CARDIOPATÍAS:</div>
            </div>
            <div class="c xc y2b wa h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_pats']->cardiopatias}}</div>
            </div>
            <div class="c x8 y2b w6 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">NEUMOPATÍAS:</div>
            </div>
            <div class="c x9 y2b we h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_pats']->neumopatias}}</div>
            </div>
            <div class="c xb y2b wf h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">ALCOHOL:</div>
            </div>
            <div class="c x1 y2c w8 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">PSIQUIÁTRICOS:</div>
            </div>
            <div class="c xd y2c w11 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_pats']->psiquiatricos}}</div>
            </div>
            <div class="c x4 y2c w11 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">CONVULSIONES:</div>
            </div>
            <div class="c xc y2c wa h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_pats']->convulsiones}}</div>
            </div>
            <div class="c x8 y2c w6 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">ONCOLÓGICOS:</div>
            </div>
            <div class="c x9 y2c we h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_pats']->oncologicos}}</div>
            </div>
            <div class="c xb y2c wf h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">DROGAS: </div>
            </div>
            <div class="c x4 y2d w11 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">ENFERMEDADES INFECTO-CONTAGIOSAS:</div>
            </div>
            <div class="c xc y2d wa h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_pats']->enfermedades_infecto_contagiosas}}</div>
            </div>
            <div class="c x8 y2d w6 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">OTROS: </div>
            </div>
            <div class="c x9 y2d we h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_pats']->otros}}</div>
            </div>
            <div class="c x1 y2e w2 h2">
                <div class="t m0 x6 h6 y6 ff1 fs1 fc0 sc0 ls0 ws0">D) GINECO-OBSTÉTRICOS</div>
            </div>
            <div class="c x1 y2f w8 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">MENARCA:</div>
            </div>
            <div class="c xd y2f w11 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_gineco_obstetricos']->menarca}}</div>
            </div>
            <div class="c x4 y2f w11 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">RITMO:</div>
            </div>
            <div class="c xc y2f wa h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_gineco_obstetricos']->ritmo}}</div>
            </div>
            <div class="c x8 y2f w6 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">I.V.S.A:</div>
            </div>
            <div class="c x9 y2f w7 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_gineco_obstetricos']->IVSA}}</div>
            </div>
            <div class="c xa y2f w8 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">MENOPAUSIA:</div>
            </div>
            <div class="c xb y2f w9 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_gineco_obstetricos']->menopausia}}</div>
            </div>
            <div class="c x1 y30 w8 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">FUM:</div>
            </div>
            <div class="c xd y30 w11 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_gineco_obstetricos']->FUM}}</div>
            </div>
            <div class="c x4 y30 w11 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">FUP.:</div>
            </div>
            <div class="c xc y30 wa h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_gineco_obstetricos']->fup}}</div>
            </div>
            <div class="c x8 y30 w6 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">FUA.:</div>
            </div>
            <div class="c x9 y30 w7 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_gineco_obstetricos']->fua}}</div>
            </div>
            <div class="c xa y30 w8 h2">
                <div class="t m0 x6 h10 y31 ff3 fs9 fc0 sc0 ls0 ws0">HIJOS(AS) VIVOS(AS):</div>
            </div>
            <div class="c xb y30 w9 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_gineco_obstetricos']->total_de_hijos_vivos}}</div>
            </div>
            <div class="c x1 y32 w8 h11">
                <div class="t m0 x6 hb y33 ff3 fs5 fc0 sc0 ls0 ws0">GESTAS:</div>
            </div>
            <div class="c xd y32 w11 h11">
                <div class="t m0 x7 hb y33 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_gineco_obstetricos']->gestas}}</div>
            </div>
            <div class="c x4 y32 w11 h11">
                <div class="t m0 x6 hb y33 ff3 fs5 fc0 sc0 ls0 ws0">PARTOS:</div>
            </div>
            <div class="c xc y32 wa h11">
                <div class="t m0 x7 hb y33 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_gineco_obstetricos']->partos}}</div>
            </div>
            <div class="c x8 y32 w6 h11">
                <div class="t m0 x6 hb y33 ff3 fs5 fc0 sc0 ls0 ws0">CESÁREAS:</div>
            </div>
            <div class="c x9 y32 w7 h11">
                <div class="t m0 x7 hb y33 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_gineco_obstetricos']->cesareas}}</div>
            </div>
            <div class="c xa y32 w8 h11">
                <div class="t m0 x6 hb y33 ff3 fs5 fc0 sc0 ls0 ws0">ABORTOS:</div>
            </div>
            <div class="c xb y32 w9 h11">
                <div class="t m0 x7 hb y33 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_gineco_obstetricos']->abortos}}</div>
            </div>
            <div class="c x1 y34 w8 h12">
                <div class="t m0 x6 hb y2a ff3 fs5 fc0 sc0 ls0 ws0">MÉTODO DE P.F.:</div>
            </div>
            <div class="c xd y34 w11 h12">
                <div class="t m0 x7 hb y2a ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_gineco_obstetricos']->metodo_de_planificacion_familiar}}</div>
            </div>
            <div class="c x4 y34 w11 h12">
                <div class="t m0 x6 hb y2a ff3 fs5 fc0 sc0 ls0 ws0">DOC / VPH:</div>
            </div>
            <div class="c xc y34 wa h12">
                <div class="t m0 x7 hb y2a ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_gineco_obstetricos']->doc_vph}}</div>
            </div>
            <div class="c x8 y34 w6 h12">
                <div class="t m0 x6 hb y2a ff3 fs5 fc0 sc0 ls0 ws0">MAMOGRAFÍA:</div>
            </div>
            <div class="c x9 y34 w7 h12">
                <div class="t m0 x7 hb y2a ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_gineco_obstetricos']->mamografia}}</div>
            </div>
            <div class="c xa y34 w8 h12">
                <div class="t m0 x6 hb y2a ff3 fs5 fc0 sc0 ls0 ws0">EXP. MAMA:</div>
            </div>
            <div class="c xb y34 w9 h12">
                <div class="t m0 x7 hb y2a ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_gineco_obstetricos']->exp_mama}}</div>
            </div>
            <div class="c x1 y35 w2 h5">
                <div class="t m0 x6 h9 y36 ff1 fs3 fc0 sc0 ls0 ws0">IV. MOTIVO DE CONSULTA</div>
            </div>
            <div class="c x1 y37 w2 h5">
                <div class="t m0 x6 h8 y7 ff3 fs2 fc0 sc0 ls0 ws0">{{$d['hc_motivo_padecimientos']->motivo_de_consulta}}</div>
            </div>
            <div class="c x1 y38 w2 h5">
                <div class="t m0 x6 h9 ya ff1 fs3 fc0 sc0 ls0 ws0">V. PADECIMIENTO ACTUAL</div>
            </div>
            <div class="c x1 y39 w2 h13">
                <div class="t m0 x6 h8 y3a ff3 fs2 fc0 sc0 ls0 ws0">{{$d['hc_motivo_padecimientos']->padecimiento_actual}}</div>
            </div>
            <div class="c x1 y3b w13 h12">
                <div class="t m0 x6 h9 y36 ff1 fs3 fc0 sc0 ls0 ws0">VI. INTERROGATORIO POR APARATOS Y SISTEMAS (FUNCIONAMIENTO/SÍNTOMAS)</div>
            </div>
            <div class="c x1 y3c w8 h5">
                <div class="t m0 x6 hb y2a ff3 fs5 fc0 sc0 ls0 ws0">OFTÁLMICO:</div>
            </div>
            <div class="c xd y3c w12 h5">
                <div class="t m0 x7 hb y2a ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->oftalmico}}</div>
            </div>
            <div class="c xc y3c wa h5">
                <div class="t m0 x7 he y3d ff3 fs8 fc0 sc0 ls0 ws0">CARDIOVASCULAR: </div>
            </div>
            <div class="c x8 y3c wb h5">
                <div class="t m0 x7 hb y2a ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->cardiovascular}}</div>
            </div>
            <div class="c xa y3c w8 h5">
                <div class="t m0 x7 hb y2a ff3 fs5 fc0 sc0 ls0 ws0">OTORRINOLARINGOLÓGICO</div>
            </div>
            <div class="c xb y3c w9 h5">
                <div class="t m0 x7 hb y2a ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->otorrinolaringologico}}</div>
            </div>
            <div class="c x1 y3e w8 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">RESPIRATORIO: </div>
            </div>
            <div class="c xd y3e w12 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->respiratorio}}</div>
            </div>
            <div class="c xc y3e wa h2">
                <div class="t m0 x7 he y24 ff3 fs8 fc0 sc0 ls0 ws0">GASTROINTESTINAL</div>
            </div>
            <div class="c x8 y3e wb h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->gastrointestinal}}</div>
            </div>
            <div class="c xa y3e w8 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">MÚSCULO-ESQUELÉTICO:</div>
            </div>
            <div class="c xb y3e w9 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->musculo_esqueletico}}</div>
            </div>
            <div class="c x1 y3f w8 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">NERVIOSO:</div>
            </div>
            <div class="c xd y3f w12 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->nervioso}}</div>
            </div>
            <div class="c xc y3f wa h2">
                <div class="t m0 x7 he y24 ff3 fs8 fc0 sc0 ls0 ws0">GENITO-URINARIO</div>
            </div>
            <div class="c x8 y3f wb h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->genito_urinario}}</div>
            </div>
            <div class="c xa y3f w8 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">INFECTO-CONTAGIOSO:</div>
            </div>
            <div class="c xb y3f w9 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->infecto_contagioso}}</div>
            </div>
            <div class="c x1 y40 w8 h5">
                <div class="t m0 x6 hb y2a ff3 fs5 fc0 sc0 ls0 ws0">ENDOCRINO:</div>
            </div>
            <div class="c xd y40 w12 h5">
                <div class="t m0 x7 hb y2a ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->endocrino}}</div>
            </div>
            <div class="c xc y40 wa h5">
                <div class="t m0 x6 he y3d ff3 fs8 fc0 sc0 ls0 ws0">HEMATOLÓGICO:</div>
            </div>
            <div class="c x8 y40 w6 h5">
                <div class="t m0 x7 hb y2a ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->hematologico}}</div>
            </div>
            <div class="c x9 y40 w7 h5">
                <div class="t m0 x6 hb y2a ff3 fs5 fc0 sc0 ls0 ws0">OTROS:</div>
            </div>
            <div class="c xa y40 w14 h5">
                <div class="t m0 x6 hb y2a ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->otros}}</div>
            </div>
            <div class="c x1 y41 w15 h5">
                <div class="t m0 x6 h9 ya ff1 fs3 fc0 sc0 ls0 ws0">VII.EXPLORACIÓN FÍSICA</div>
            </div>
            <div class="c xb y41 w9 h5">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">GLICEMIA CAPILAR:</div>
            </div>
            <div class="c x1 y42 w8 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">PESO:</div>
            </div>
            <div class="c xd y42 w11 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">TALLA:</div>
            </div>
            <div class="c x4 y42 w11 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">IMC:</div>
            </div>
            <div class="c xc y42 wa h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">CC:</div>
            </div>
            <div class="c x8 y42 w6 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">TA:</div>
            </div>
            <div class="c x9 y42 w7 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">FC:</div>
            </div>
            <div class="c xa y42 w8 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">FR:</div>
            </div>
            <div class="c xb y42 wf h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">TEMP:</div>
            </div>
            <div class="c xe y42 w11 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">PULSO:</div>
            </div>
            <div class="c x1 y43 w4 h14">
                <div class="t m0 x6 h6 y6 ff1 fs1 fc0 sc0 ls0 ws0">HABITUS EXTERIOR</div>
            </div>
            <div class="c x4 y44 w11 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">ORIENTADO:</div>
            </div>
            <div class="c xc y44 wa h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hcg_hca_exploraciones_fisicas']->orientado}}</div>
            </div>
            <div class="c x8 y44 w6 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">LENGUAJE:</div>
            </div>
            <div class="c x9 y44 w7 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hcg_hca_exploraciones_fisicas']->lenguaje}}</div>
            </div>
            <div class="c xa y44 w8 h2">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">MARCHA:</div>
            </div>
            <div class="c xb y44 w9 h2">
                <div class="t m0 x7 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hcg_hca_exploraciones_fisicas']->marcha}}</div>
            </div>
            <div class="c x4 y43 w11 h5">
                <div class="t m0 x6 hd y1e ff3 fs7 fc0 sc0 ls0 ws0">APOYO FUNCIONAL:</div>
            </div>
            <div class="c xc y43 wa h5">
                <div class="t m0 x7 hb y2a ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hcg_hca_exploraciones_fisicas']->aporyo_funcional}}</div>
            </div>
            <div class="c x8 y43 w6 h5">
                <div class="t m0 x6 hb y2a ff3 fs5 fc0 sc0 ls0 ws0">COOPERADOR:</div>
            </div>
            <div class="c x9 y43 w7 h5">
                <div class="t m0 x7 hb y2a ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hcg_hca_exploraciones_fisicas']->cooperador}}</div>
            </div>
            <div class="c xa y43 w8 h5">
                <div class="t m0 x6 hd y1e ff3 fs7 fc0 sc0 ls0 ws0">HIGIENE ADECUADA: </div>
            </div>
            <div class="c xb y43 w9 h5">
                <div class="t m0 x7 hb y2a ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hcg_hca_exploraciones_fisicas']->higine_adecuada}}</div>
            </div>
            <div class="c x1 y45 w2 h5">
                <div class="t m0 x6 h6 y6 ff1 fs1 fc0 sc0 ls0 ws0">DESCRIPCIÓN</div>
            </div>
            <div class="c x1 y46 w8 h15">
                <div class="t m0 x6 hb y10 ff1 fs5 fc0 sc0 ls0 ws0">CABEZA</div>
            </div>
            <div class="c xd y46 w16 h15">
                <div class="t m0 x6 h8 y47 ff3 fs2 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->cabeza}}</div>
            </div>
            <div class="c x1 y48 w8 h15">
                <div class="t m0 x6 hb y2a ff1 fs5 fc0 sc0 ls0 ws0">CUELLO</div>
            </div>
            <div class="c xd y48 w16 h15">
                <div class="t m0 x6 h8 y49 ff3 fs2 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->cuello}}</div>
            </div>
            <div class="c x1 y4a w8 h16">
                <div class="t m0 x6 hb y2a ff1 fs5 fc0 sc0 ls0 ws0">TÓRAX</div>
            </div>
            <div class="c xd y4a w16 h16">
                <div class="t m0 x6 h8 y49 ff3 fs2 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->torax}}</div>
            </div>
            <div class="c x1 y4b w8 h15">
                <div class="t m0 x6 hb y10 ff1 fs5 fc0 sc0 ls0 ws0">ABDOMEN</div>
            </div>
            <div class="c xd y4b w16 h15">
                <div class="t m0 x6 h8 y49 ff3 fs2 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->abdomen}}</div>
            </div>
            <div class="c x1 y4c w8 h15">
                <div class="t m0 x6 hb y2a ff1 fs5 fc0 sc0 ls0 ws0">EXTREMIDADES </div>
            </div>
            <div class="c xd y4c w16 h15">
                <div class="t m0 x6 h8 y49 ff3 fs2 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->extremidades}}</div>
            </div>
            <div class="c x1 y4d w8 hf">
                <div class="t m0 x6 hb y2a ff1 fs5 fc0 sc0 ls0 ws0">GENITAL</div>
            </div>
            <div class="c xd y4d w16 hf">
                <div class="t m0 x6 h8 y4e ff3 fs2 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->genital}}</div>
            </div>
            <div class="c x1 y4f w8 h11">
                <div class="t m0 x6 hb y33 ff1 fs5 fc0 sc0 ls0 ws0">NEUROLÓGICO</div>
            </div>
            <div class="c xd y4f w16 h11">
                <div class="t m0 x6 h8 y50 ff3 fs2 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->neurologico}}</div>
            </div>
            <div class="c x1 y51 w8 h2">
                <div class="t m0 x6 hb y10 ff1 fs5 fc0 sc0 ls0 ws0">PIEL</div>
            </div>
            <div class="c xd y51 w16 h2">
                <div class="t m0 x6 h8 y50 ff3 fs2 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->piel}}</div>
            </div>
            <div class="c x1 y52 w8 h5">
                <div class="t m0 x6 hb y10 ff1 fs5 fc0 sc0 ls0 ws0">OTROS</div>
            </div>
            <div class="c xd y52 w16 h5">
                <div class="t m0 x6 h8 y53 ff3 fs2 fc0 sc0 ls0 ws0"><span>{{$d['hc_habitus_exteriors']->otros}} {{$d['hc_habitus_exteriors']->otros}}</span></div>
            </div>
            <div class="c x1 y54 w2 h2">
                <div class="t m0 x6 h9 ya ff1 fs3 fc0 sc0 ls0 ws0">VIII. ESTUDIOS AUXILIARES DE DIAGNÓSTICO </div>
            </div>
            <div class="c x1 y55 w2 h17 fitty">
                    <span>{{$d['hc_pronosticos']->estudios_auxiliares_de_diagnostico}} {{$d['hc_pronosticos']->estudios_auxiliares_de_diagnostico}} {{$d['hc_pronosticos']->estudios_auxiliares_de_diagnostico}} {{$d['hc_pronosticos']->estudios_auxiliares_de_diagnostico}} {{$d['hc_pronosticos']->estudios_auxiliares_de_diagnostico}}</span>
            </div>
            <div class="c x1 y57 w2 h18">
                <div class="t m0 x6 h9 y58 ff1 fs3 fc0 sc0 ls0 ws0">IX. IMPRESIÓN DIAGNÓSTICA </div>
            </div>
            <div class="c x1 y59 w2 h14">
                <div class="t m0 x6 h8 y5a ff3 fs2 fc0 sc0 ls0 ws0">{{$d['hc_pronosticos']->impresion_diagnostica}}</div>
            </div>
            <div class="c x1 y5b w2 h2">
                <div class="t m0 x6 h9 ya ff1 fs3 fc0 sc0 ls0 ws0">X. TERAPÉUTICA (CUADRO BÁSICO)</div>
            </div>
            <div class="c x1 y5c w17 h11">
                <div class="t m0 x6 h6 y5d ff1 fs1 fc0 sc0 ls0 ws0">FÁRMACO</div>
            </div>
            <div class="c xc y5c wa h11">
                <div class="t m0 x6 h6 y5d ff1 fs1 fc0 sc0 ls0 ws0">DOSIS</div>
            </div>
            <div class="c x8 y5c w6 h11">
                <div class="t m0 x6 h6 y5d ff1 fs1 fc0 sc0 ls0 ws0">VÍA</div>
            </div>
            <div class="c x9 y5c w10 h11">
                <div class="t m0 x6 h6 y5d ff1 fs1 fc0 sc0 ls0 ws0">PERIODICIDAD</div>
            </div>
            <div class="c x1 y5e w2 h5">
                <div class="t m0 x6 h9 ya ff1 fs3 fc0 sc0 ls0 ws0">XI. CUIDADOS GENERALES</div>
            </div>
            <div class="c x1 y5f w2 h19">
                <div class="t m0 x6 h8 y60 ff3 fs2 fc0 sc0 ls0 ws0">{{$d['hc_pronosticos']->cuidados_generales}}</div>
            </div>
            <div class="c x1 y61 w4 h2">
                <div class="t m0 x6 h9 ya ff1 fs3 fc0 sc0 ls0 ws0">XII. PRONÓSTICO</div>
            </div>
            <div class="c x4 y61 w5 h2">
                <div class="t m0 x7 h8 y7 ff3 fs2 fc0 sc0 ls0 ws0">{{$d['hc_pronosticos']->pronostico}}</div>
            </div>
            <div class="c x8 y61 w6 h2">
                <div class="t m0 x6 h6 y6 ff3 fs1 fc0 sc0 ls0 ws0">REFERIDO A: </div>
            </div>
            <div class="c x9 y61 w10 h2">
                <div class="t m0 x6 h8 y7 ff3 fs2 fc0 sc0 ls0 ws0">{{$d['nucleos']->nombre}}</div>
            </div>
            <div class="c x1 y62 w4 h18">
                <div class="t m0 x6 h6 y6 ff3 fs1 fc0 sc0 ls0 ws0">PRÓXIMA CITA: </div>
            </div>
            <div class="c x4 y62 w5 h18">
                <div class="t m0 x7 h8 y7 ff3 fs2 fc0 sc0 ls0 ws0">{{$d['hc_pronosticos']->proxima_cita}}</div>
            </div>
            <div class="c x8 y63 w18 h2">
                <div class="t m0 xf h6 y64 ff1 fs1 fc0 sc0 ls0 ws0">NOMBRE, FIRMA Y CÉDULA DEL MÉDICO(A) TRATANTE</div>
            </div>
        </div>
        <div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
    </div>
</div>
@stop

@section('javascript')

    <script type="text/javascript" src="{{ asset('js/jquery.textfill.min.js') }}"></script>
<script>
$( document ).ready(function() {
$('.fitty').textfill({"minFontPixels":10});
});
</script>
@stop
