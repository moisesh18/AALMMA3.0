@extends('voyager::master')

@section('page_title', __('voyager::generic.view').' '.$dataTypes[0]->display_name_singular)

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/hca/base.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/hca/fancy.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/hca/main.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/docs.css') }}">
@stop

<style>
.r{
    right:0!important;
}
</style>

@section('content')
<div id="page-container">
    <div id="pf1" class="pf w0 h0" data-page-no="1">
        <div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src={{asset('css/hca/bg1.png')}} />
            <div class="c x1 y1 w2 h2">
                <div class="t m0 x2 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">SERVICIOS DE SALUD DE NUEVO LEÓN</div>
            </div>
            <div class="c x1 y3 w2 h4">
                <div class="t m0 x3 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">JURISDICCIÓN SANITARIA No. 7</div>
            </div>
            <div class="c x4 y4 w3 h4">
                <div class="t m0 x5 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">HISTORIA CLÍNICA ADOLESCENTE (10-19 AÑOS) </div>
            </div>
            <div class="c x1 y5 w4 h2">
                <div class="t m0 x6 h5 y6 ff1 fs1 fc0 sc0 ls0 ws0">CENTRO DE SALUD:</div>
            </div>
            <div class="c x4 y5 w5 h2">
                <div class="t m0 x6 h6 y7 ff2 fs2 fc0 sc0 ls0 ws0">{{setting('centro-de-salud.name')}}</div>
            </div>
            <div class="c x7 y5 w6 h2">
                <div class="t m0 x6 h5 y6 ff1 fs1 fc0 sc0 ls0 ws0">NÚCLEO:</div>
            </div>
            <div class="c x8 y5 w7 h2">
                <div class="t m0 x6 h7 y7 ff3 fs2 fc0 sc0 ls0 ws0">{{$d['nucleos']->nombre}}</div>
            </div>
            <div class="c x9 y5 w6 h2">
                <div class="t m0 x6 h5 y6 ff1 fs1 fc0 sc0 ls0 ws0">EXPEDIENTE:</div>
            </div>
            <div class="c xa y5 w8 h2">
                <div class="t m0 x6 h7 y7 ff3 fs2 fc0 sc0 ls0 ws0">{{$d['historias_clinicas']->id}}</div>
            </div>
            <div class="c xb y8 w9 h2">
                <div class="t m0 x6 h5 y6 ff1 fs1 fc0 sc0 ls0 ws0">FECHA:</div>
            </div>
            <div class="c x7 y8 wa h2">
                <div class="t m0 x6 h7 y7 ff3 fs2 fc0 sc0 ls0 ws0">{{showDate($d['historias_clinicas']->created_at)}}</div>
            </div>
            <div class="c x9 y8 w6 h2">
                <div class="t m0 x6 h5 y6 ff1 fs1 fc0 sc0 ls0 ws0">HORA:</div>
            </div>
            <div class="c xa y8 w8 h2">
                <div class="t m0 x6 h7 y7 ff3 fs2 fc0 sc0 ls0 ws0">{{$d['historias_clinicas']->created_at->format('g:h:s a')}}</div>
            </div>
            <div class="c x1 y9 w2 h2">
                <div class="t m0 x6 h8 ya ff1 fs3 fc0 sc0 ls0 ws0">I. FICHA DE IDENTIFICACIÓN</div>
            </div>
            <div class="c x1 yb wb h9">
                <div class="t m0 x6 h5 y6 ff1 fs1 fc0 sc0 ls0 ws0">NOMBRE:</div>
            </div>
            <div class="c xc yb wc h9">
                <div class="t m0 x6 h7 y7 ff3 fs2 fc0 sc0 ls0 ws0">{{$d['pacientes']->fullName}}</div>
            </div>
            <div class="c x8 yb w7 h9">
                <div class="t m0 x6 h5 y6 ff1 fs1 fc0 sc0 ls0 ws0">EDAD:</div>
            </div>
            <div class="c x9 yb w6 h9">
                <div class="t m0 x6 h7 y7 ff3 fs2 fc0 sc0 ls0 ws0">{{date("Y")-$d['pacientes']->fecha_de_nacimiento->format("Y")}}</div>
            </div>
            <div class="c xa yb w8 h9">
                <div class="t m0 x6 ha yc ff1 fs4 fc0 sc0 ls0 ws0">FECHA NAC: {{$d['pacientes']->fecha_de_nacimiento->format('j-m-Y')}}</div>
            </div>
            <div class="c x1 yd wb h2">
                <div class="t m0 x6 h5 y6 ff1 fs1 fc0 sc0 ls0 ws0">DOMICILIO: </div>
            </div>
            <div class="c xc yd wd h2">
                <div class="t m0 x6 h7 y7 ff3 fs2 fc0 sc0 ls0 ws0">{{$d['pacientes']->domicilio}}</div>
            </div>
            <div class="c x7 yd w6 h2">
                <div class="t m0 x6 h5 y6 ff1 fs1 fc0 sc0 ls0 ws0">LOCALIDAD:</div>
            </div>
            <div class="c x8 yd wa h2">
                <div class="t m0 x6 h7 y7 ff3 fs2 fc0 sc0 ls0 ws0">{{$d['pacientes']->localidad}}</div>
            </div>
            <div class="c xa yd wa h2">
                <div class="t m0 x6 h5 y6 ff1 fs1 fc0 sc0 ls0 ws0">SEXO: {{$d['pacientes']->isFemale ? 'Mujer' : 'Hombre'}}</div>
            </div>
            <div class="c x1 ye w2 h2">
                <div class="t m0 x6 h8 ya ff1 fs3 fc0 sc0 ls0 ws0">II. EVALUACIÓN INICIAL </div>
            </div>
            <div class="c x1 yf w4 h9">
                <div class="t m0 x5 hb y10 ff1 fs5 fc0 sc0 ls0 ws0">NOMBRE DE LA MADRE:</div>
            </div>
            <div class="c x4 yf w3 h9">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_ev_tutores']->nombre_de_la_madre}}</div>
            </div>
            <div class="c xa yf we h9">
                <div class="t m0 xd hb y10 ff3 fs5 fc0 sc0 ls0 ws0">EDAD:</div>
            </div>
            <div class="c xe yf w9 h9">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_ev_tutores']->edad_de_la_madre}}</div>
            </div>
            <div class="c x1 y11 wb h9">
                <div class="t m0 x5 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">DOMICILIO:</div>
            </div>
            <div class="c xc y11 wc h9">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_ev_tutores']->domicilio_de_la_madre}}</div>
            </div>
            <div class="c x8 y11 w7 h9">
                <div class="t m0 xf hb y10 ff3 fs5 fc0 sc0 ls0 ws0">OCUPACIÓN:</div>
            </div>
            <div class="c x9 y11 w6 h9">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_ev_tutores']->ocupacion_de_la_madre}}</div>
            </div>
            <div class="c xa y11 we h9">
                <div class="t m0 x10 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">LEE Y ESCRIBE:</div>
            </div>
            <div class="c xe y11 w9 h9">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{ifElse($d['hca_ev_tutores']->lee_y_escribe_madre)}}</div>
            </div>
            <div class="c x1 y12 w4 h9">
                <div class="t m0 x11 hb y10 ff1 fs5 fc0 sc0 ls0 ws0">NOMBRE DEL PADRE:</div>
            </div>
            <div class="c x4 y12 w3 h9">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_ev_tutores']->nombre_del_padre}} </div>
            </div>
            <div class="c xa y12 we h9">
                <div class="t m0 xd hb y10 ff3 fs5 fc0 sc0 ls0 ws0">EDAD:</div>
            </div>
            <div class="c xe y12 w9 h9">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_ev_tutores']->edad_del_padre}}</div>
            </div>
            <div class="c x1 y13 wb h9">
                <div class="t m0 x5 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">DOMICILIO:</div>
            </div>
            <div class="c xc y13 wc h9">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_ev_tutores']->nombre_del_padre}} </div>
            </div>
            <div class="c x8 y13 w7 h9">
                <div class="t m0 xf hb y10 ff3 fs5 fc0 sc0 ls0 ws0">OCUPACIÓN:</div>
            </div>
            <div class="c x9 y13 w6 h9">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_ev_tutores']->nombre_del_padre}} </div>
            </div>
            <div class="c xa y13 we h9">
                <div class="t m0 x10 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">LEE Y ESCRIBE:</div>
            </div>
            <div class="c xe y13 w9 h9">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_ev_tutores']->lee_y_escribe_padre}}</div>
            </div>
            <div class="c x1 y14 w4 h2">
                <div class="t m0 x12 hb y15 ff1 fs5 fc0 sc0 ls0 ws0">NÚMERO DE HERMANOS:</div>
            </div>
            <div class="c x4 y14 wd h2">
                <div class="t m0 x6 hb y15 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_ev_tutores']->numero_de_hermanos}} </div>
            </div>
            <div class="c x8 y14 w7 h2">
                <div class="t m0 x13 hb y15 ff3 fs5 fc0 sc0 ls0 ws0">EDADES:</div>
            </div>
            <div class="c x9 y14 wf h2">
                <div class="t m0 x6 hb y15 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_ev_tutores']->edades}} </div>
            </div>
            <div class="c x1 y16 wb h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">ORIGINARIO(A):</div>
            </div>
            <div class="c xc y16 wd h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_evaluaciones_iniciales']->originario}}</div>
            </div>
            <div class="c x7 y16 w6 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">GRUPO ÉTNICO:</div>
            </div>
            <div class="c x8 y16 w10 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_evaluaciones_iniciales']->grupo_etnico}}</div>
            </div>
            <div class="c x1 y18 wb h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">ESCOLARIDAD:</div>
            </div>
            <div class="c xc y18 wd h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_evaluaciones_iniciales']->escolaridad}}</div>
            </div>
            <div class="c x7 y18 w6 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">IDIOMA:</div>
            </div>
            <div class="c x8 y18 w10 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_evaluaciones_iniciales']->idioma}}</div>
            </div>
            <div class="c x1 y19 wb h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">RELIGIÓN:</div>
            </div>
            <div class="c xc y19 wd h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_evaluaciones_iniciales']->religion}}</div>
            </div>
            <div class="c x7 y19 wa h9">
                <div class="t m0 x14 hc y1a ff3 fs6 fc0 sc0 ls0 ws0">ACEPTARÍA TRANSFUSIÓN SANGUÍNEA:</div>
            </div>
            <div class="c x9 y19 wf h9">
                <div class="t m0 x14 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{ifElse($d['hc_evaluaciones_iniciales']->aceptaria_transfusion_sanguinea)}}</div>
            </div>
            <div class="c x1 y1b wb h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">OCUPACIÓN:</div>
            </div>
            <div class="c xc y1b wd h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_evaluaciones_iniciales']->ocupacion}}</div>
            </div>
            <div class="c x7 y1b w6 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">INGRESO MENSUAL:</div>
            </div>
            <div class="c x8 y1b w10 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_evaluaciones_iniciales']->ingreso_mensual}}</div>
            </div>
            <div class="c x1 y1c wb h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">ESTADO CIVIL:</div>
            </div>
            <div class="c xc y1c wd h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_evaluaciones_iniciales']->estado_civil}}</div>
            </div>
            <div class="c x7 y1c w6 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">PASATIEMPOS:</div>
            </div>
            <div class="c x8 y1c w10 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_evaluaciones_iniciales']->pasatiempos}}</div>
            </div>
            <div class="c x1 y1d wb h2">
                <div class="t m0 x6 hb y1e ff3 fs5 fc0 sc0 ls0 ws0">VIVIENDA: </div>
            </div>
            <div class="c xc y1d w6 h2">
                <div class="t m0 x6 hb y1e ff3 fs5 fc0 sc0 ls0 ws0">PROPIA: {{check($d['hc_evaluaciones_iniciales']->vivienda, 'propia')}} </div>
            </div>
            <div class="c x4 y1d w11 h2">
                <div class="t m0 x6 hb y1e ff3 fs5 fc0 sc0 ls0 ws0">RENTA: {{check($d['hc_evaluaciones_iniciales']->vivienda, 'renta')}}</div>
            </div>
            <div class="c xb y1d w9 h2">
                <div class="t m0 x6 hb y1e ff3 fs5 fc0 sc0 ls0 ws0">OTROS: {{check($d['hc_evaluaciones_iniciales']->vivienda, 'otros')}}</div>
            </div>
            <div class="c x7 y1d w6 h2">
                <div class="t m0 x6 hb y1e ff3 fs5 fc0 sc0 ls0 ws0">SERVICIOS:</div>
            </div>
            <div class="c x8 y1d w7 h2">
                <div class="t m0 x6 hb y1e ff3 fs5 fc0 sc0 ls0 ws0">AGUA: {{checkArray($d['hc_evaluaciones_iniciales']->servicios, 'agua')}}</div>
            </div>
            <div class="c x9 y1d w6 h2">
                <div class="t m0 x6 hb y1e ff3 fs5 fc0 sc0 ls0 ws0">DRENAJE: {{checkArray($d['hc_evaluaciones_iniciales']->servicios, 'drenaje')}}</div>
            </div>
            <div class="c xa y1d we h2">
                <div class="t m0 x6 hb y1e ff3 fs5 fc0 sc0 ls0 ws0">LUZ: {{checkArray($d['hc_evaluaciones_iniciales']->servicios, 'luz')}}</div>
            </div>
            <div class="c xe y1d w9 h2">
                <div class="t m0 x6 hb y1e ff3 fs5 fc0 sc0 ls0 ws0">GAS: {{checkArray($d['hc_evaluaciones_iniciales']->servicios, 'gas')}}</div>
            </div>
            <div class="c x1 y1f w2 h2">
                <div class="t m0 x6 h8 y20 ff1 fs3 fc0 sc0 ls0 ws0">III. ANTECEDENTES </div>
            </div>
            <div class="c x1 y21 w12 h2">
                <div class="t m0 x6 h5 y22 ff1 fs1 fc0 sc0 ls0 ws0">A) FACTORES PROTECTORES </div>
            </div>
            <div class="c x7 y21 w13 h2">
                <div class="t m0 x6 h5 y22 ff1 fs1 fc0 sc0 ls0 ws0">B) FACTORES DE RIESGO </div>
            </div>
            <div class="c x1 y23 w15 h9">
                <div class="t m0 x16 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">ACUDE A LA ESCUELA: {{ifElse($d['hca_antecedentes_fac_prots']->acude_a_la_escuela)}}</div>
            </div>
            <div class="c xc y23 wd h9">
                <div class="t m0  hb y10 ff3 fs5 fc0 sc0 ls0 ws0"></div>
            </div>
            <div class="c x7 y23 w16 h9">
                <div class="t m0 x18 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">POBREZA O PROBLEMAS ECONÓMICOS FAMILIARES: {{ifElse($d['hca_an_factores_riesgos']->pobreza_o_problemas_economicos)}}</div>
            </div>
            <div class="c x8 y23 w16 h9">
                <div class="t m0 x19 hb y10 ff3 fs5 fc0 sc0 ls0 ws0"></div>
            </div>
            <div class="c x1 y24 w15 h9">
                <div class="t m0 x1a hb y10 ff3 fs5 fc0 sc0 ls0 ws0">AUTOESTIMA NORMAL O ELEVADA: {{$d['hca_antecedentes_fac_prots']->autoestima}}</div>
            </div>
            <div class="c x1b y24 w17 h9">
                <div class="t m0  hb y10 ff3 fs5 fc0 sc0 ls0 ws0"></div>
            </div>
            <div class="c x7 y24 w16 h9">
                <div class="t m0 x1d hb y10 ff3 fs5 fc0 sc0 ls0 ws0">FAMILIA DISFUNCIONAL: {{ifElse($d['hca_an_factores_riesgos']->familia_disfuncional)}}</div>
            </div>
            <div class="c x1e y24 w18 h9">
                <div class="t m0 x1f hb y10 ff3 fs5 fc0 sc0 ls0 ws0"></div>
            </div>
            <div class="c x1 y25 w15 h9">
                <div class="t m0 x20 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">LAZOS FAMILIARES FUERTES: {{ifElse($d['hca_antecedentes_fac_prots']->lazos_familiares_fuertes)}}</div>
            </div>
            <div class="c xc y25 wd h9">
                <div class="t m0 x21 hb y10 ff3 fs5 fc0 sc0 ls0 ws0"></div>
            </div>
            <div class="c x7 y25 w16 h9">
                <div class="t m0 x22 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">ENAJENACIÓN O DESESPERACIÓN: {{ifElse($d['hca_an_factores_riesgos']->enajenacion_o_desesperacion)}}</div>
            </div>
            <div class="c x8 y25 w16 h9">
                <div class="t m0  hb y10 ff3 fs5 fc0 sc0 ls0 ws0"></div>
            </div>
            <div class="c x1 y26 w15 h9">
                <div class="t m0 x0 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">AMIGOS Y ADULTOS COMPRENSIVOS: {{ifElse($d['hca_antecedentes_fac_prots']->amigos_y_adultos_comprensivos)}}</div>
            </div>
            <div class="c xc y26 wd h9">
                <div class="t m0 x11 hb y10 ff3 fs5 fc0 sc0 ls0 ws0"></div>
            </div>
            <div class="c x7 y26 w16 h9">
                <div class="t m0 x24 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">PROBLEMAS DEL APRENDIZAJE: {{ifElse($d['hca_an_factores_riesgos']->problemas_de_aprendizaje)}}</div>
            </div>
            <div class="c x25 y26 w19 h9">
                <div class="t m0  hb y10 ff3 fs5 fc0 sc0 ls0 ws0"></div>
            </div>
            <div class="c x1 y27 w15 hd">
                <div class="t m0 x18 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">HABILIDADES EN LA ESCUELA Y LA VIDA: {{ifElse($d['hca_antecedentes_fac_prots']->habilidades_en_la_escuela_y_la_vida)}}</div>
            </div>
            <div class="c xc y27 wd hd">
                <div class="t m0 x12 hb y10 ff3 fs5 fc0 sc0 ls0 ws0"></div>
            </div>
            <div class="c x7 y27 w16 hd">
                <div class="t m0 x27 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">ABANDONO DE ESTUDIOS: {{ifElse($d['hca_an_factores_riesgos']->abandono_de_estudios)}}</div>
            </div>
            <div class="c x28 y27 w1a hd">
                <div class="t m0 x19 hb y10 ff3 fs5 fc0 sc0 ls0 ws0"></div>
            </div>
            <div class="c x1 y28 w15 h9">
                <div class="t m0 x29 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">PROYECTO DE VIDA: {{ifElse($d['hca_antecedentes_fac_prots']->proyecto_de_vida)}}</div>
            </div>
            <div class="c xc y28 wd h9">
                <div class="t m0  hb y10 ff3 fs5 fc0 sc0 ls0 ws0"></div>
            </div>
            <div class="c x7 y28 w16 h9">
                <div class="t m0 x2b hb y10 ff3 fs5 fc0 sc0 ls0 ws0">DEPRESIÓN: {{ifElse($d['hca_an_factores_riesgos']->depresion)}}</div>
            </div>
            <div class="c x2c y28 w1b h9">
                <div class="t m0  hb y10 ff3 fs5 fc0 sc0 ls0 ws0"></div>
            </div>
            <div class="c x1 y29 w15 h2">
                <div class="t m0 x2d hb y15 ff3 fs5 fc0 sc0 ls0 ws0">PERTENECE A GRUPOS: {{ifElse($d['hca_antecedentes_fac_prots']->pertenece_a_grupos)}}</div>
            </div>
            <div class="c xc y29 wd h2">
                <div class="t m0  hb y15 ff3 fs5 fc0 sc0 ls0 ws0"></div>
            </div>
            <div class="c x7 y29 w16 h2">
                <div class="t m0 x16 hb y15 ff3 fs5 fc0 sc0 ls0 ws0">SENTIRSE AISLADO O SIN FUTURO: {{ifElse($d['hca_an_factores_riesgos']->sentirse_aislado_o_sin_futuro)}}</div>
            </div>
            <div class="c x8 y29 w16 h2">
                <div class="t m0  hb y15 ff3 fs5 fc0 sc0 ls0 ws0"></div>
            </div>
            <div class="c x1 y2a w12 he">
                <div class="t m0 x6 h5 y2b ff1 fs1 fc0 sc0 ls0 ws0">C) TRASTORNOS QUE LIMITAN EL APRENDIZAJE </div>
            </div>
            <div class="c x7 y2a w13 he">
                <div class="t m0 x6 h5 y2b ff1 fs1 fc0 sc0 ls0 ws0">D) INMUNIZACIONES (FECHAS)</div>
            </div>
            <div class="c x1 y2c w15 hd">
                <div class="t m0 x2e hb y10 ff3 fs5 fc0 sc0 ls0 ws0">PROBLEMAS AUDITIVOS: {{ifElse($d['hca_an_trans_de_aprendizajes']->problemas_auditivos)}}</div>
            </div>
            <div class="c x4 y2c w5 hd">
                <div class="t m0 x2f hb y10 ff3 fs5 fc0 sc0 ls0 ws0"></div>
            </div>
            @php
                $inmunizaciones = json_decode($d['hca_an_inmunizaciones']->inmunizaciones);
            @endphp
            <div class="c x7 y2c w6 hd">
                <div class="t m0 x30 hb y10 ff1 fs5 fc0 sc0 ls0 ws0">HEPATITIS B</div>
            </div>
            <div class="c x8 y2c w7 hd">
                <div class="t m0 x6 hf y2d ff3 fs7 fc0 sc0 ls0 ws0">1RA. {{$inmunizaciones->hepatitis_b->primera }}</div>
            </div>
            <div class="c x9 y2c w6 hd">
                <div class="t m0 x6 hf y2d ff3 fs7 fc0 sc0 ls0 ws0">2DA. {{$inmunizaciones->hepatitis_b->segunda}}</div>
            </div>
            <div class="c xa y2c wa hd">
                <div class="t m0 x6 hf y2d ff3 fs7 fc0 sc0 ls0 ws0">REFUERZO {{$inmunizaciones->hepatitis_b->refuerzo}}</div>
            </div>
            <div class="c x1 y2e w15 h9">
                <div class="t m0 x31 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">PROBLEMAS OCULARES: {{ifElse($d['hca_an_trans_de_aprendizajes']->problemas_oculares)}}</div>
            </div>
            <div class="c x4 y2e w5 h9">
                <div class="t m0 x2f hb y10 ff3 fs5 fc0 sc0 ls0 ws0"></div>
            </div>
            <div class="c x7 y2e w6 h9">
                <div class="t m0 x32 hb y10 ff1 fs5 fc0 sc0 ls0 ws0">TD</div>
            </div>
            <div class="c x8 y2e w7 h9">
                <div class="t m0 x6 hf y2d ff3 fs7 fc0 sc0 ls0 ws0">1RA. {{$inmunizaciones->td->primera}}</div>
            </div>
            <div class="c x9 y2e w6 h9">
                <div class="t m0 x6 hf y2d ff3 fs7 fc0 sc0 ls0 ws0">2DA. {{$inmunizaciones->td->segunda}}</div>
            </div>
            <div class="c xa y2e wa h9">
                <div class="t m0 x6 hf y2d ff3 fs7 fc0 sc0 ls0 ws0">REFUERZO {{$inmunizaciones->td->refuerzo}}</div>
            </div>
            <div class="c x1 y2f w15 h9">
                <div class="t m0 x2e hb y10 ff3 fs5 fc0 sc0 ls0 ws0">PROBLEMAS DE DICCIÓN: {{ifElse($d['hca_an_trans_de_aprendizajes']->problemas_de_diccion)}}</div>
            </div>
            <div class="c x4 y2f w5 h9">
                <div class="t m0 x33 hb y10 ff3 fs5 fc0 sc0 ls0 ws0"></div>
            </div>
            <div class="c x7 y2f w6 h9">
                <div class="t m0 x32 hb y10 ff1 fs5 fc0 sc0 ls0 ws0">SR</div>
            </div>
            <div class="c x8 y2f w7 h9">
                <div class="t m0 x6 hf y2d ff3 fs7 fc0 sc0 ls0 ws0">1RA. {{$inmunizaciones->sr->primera}}</div>
            </div>
            <div class="c x9 y2f w6 h9">
                <div class="t m0 x6 hf y2d ff3 fs7 fc0 sc0 ls0 ws0">2DA. {{$inmunizaciones->sr->segunda}}</div>
            </div>
            <div class="c xa y2f wa h9">
                <div class="t m0 x6 hf y2d ff3 fs7 fc0 sc0 ls0 ws0">REFUERZO {{$inmunizaciones->sr->refuerzo}}</div>
            </div>
            <div class="c x1 y30 w15 h9">
                <div class="t m0 x34 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">TRASTORNOS DE LA LOCOMOCIÓN: {{ifElse($d['hca_an_trans_de_aprendizajes']->transtornos_de_locomocion)}}</div>
            </div>
            <div class="c x4 y30 w5 h9">
                <div class="t m0 x35 hb y10 ff3 fs5 fc0 sc0 ls0 ws0"></div>
            </div>
            <div class="c x7 y30 w6 h9">
                <div class="t m0 x36 hb y10 ff1 fs5 fc0 sc0 ls0 ws0">VPH</div>
            </div>
            <div class="c x8 y30 w7 h9">
                <div class="t m0 x6 hf y2d ff3 fs7 fc0 sc0 ls0 ws0">1RA. {{$inmunizaciones->vph->primera}}</div>
            </div>
            <div class="c x9 y30 w6 h9">
                <div class="t m0 x6 hf y2d ff3 fs7 fc0 sc0 ls0 ws0">2DA. {{$inmunizaciones->vph->segunda}}</div>
            </div>
            <div class="c xa y30 wa h9">
                <div class="t m0 x6 hf y2d ff3 fs7 fc0 sc0 ls0 ws0">REFUERZO {{$inmunizaciones->vph->refuerzo}}</div>
            </div>
            <div class="c x1 y31 w15 h2">
                <div class="t m0 x37 hb y15 ff3 fs5 fc0 sc0 ls0 ws0">TRASTORNOS POSTURALES: {{ifElse($d['hca_an_trans_de_aprendizajes']->transtornos_posturales)}}</div>
            </div>
            <div class="c x4 y31 w5 h2">
                <div class="t m0 x33 hb y15 ff3 fs5 fc0 sc0 ls0 ws0"></div>
            </div>
            <div class="c x7 y31 w6 h2">
                <div class="t m0 x12 hb y15 ff1 fs5 fc0 sc0 ls0 ws0">OTRAS</div>
            </div>
            <div class="c x8 y31 w15 h2">
                <div class="t m0 x30 hb y15 ff3 fs5 fc0 sc0 ls0 ws0">
                    {{$d['hca_an_inmunizaciones']->otros}}
                </div>
            </div>
            <div class="c x1 y32 w2 h2">
                <div class="t m0 x6 h5 y22 ff1 fs1 fc0 sc0 ls0 ws0">E) HEREDO-FAMILIARES</div>
            </div>
            <div class="c x1 y33 wb h9">
                <div class="t m0 x6 hb y34 ff3 fs5 fc0 sc0 ls0 ws0">DIABETES:</div>
            </div>
            <div class="c xc y33 w1c h9">
                <div class="t m0 x6 hb y34 ff3 fs5 fc0 sc0 ls0 ws0">{{showList($d['hca_hcg_antecedentes_familiares']->diabetes)}}</div>
            </div>
            <div class="c xb y33 w9 h9">
                <div class="t m0 x6 hf y35 ff3 fs7 fc0 sc0 ls0 ws0">HIPERTENSIÓN:</div>
            </div>
            <div class="c x7 y33 wa h9">
                <div class="t m0 x6 hb y34 ff3 fs5 fc0 sc0 ls0 ws0">{{showList($d['hca_hcg_antecedentes_familiares']->hipertension)}}</div>
            </div>
            <div class="c x9 y33 w6 h9">
                <div class="t m0 x6 hb y34 ff3 fs5 fc0 sc0 ls0 ws0">DISLIPIDEMIAS:</div>
            </div>
            <div class="c xa y33 w8 h9">
                <div class="t m0 x6 hb y34 ff3 fs5 fc0 sc0 ls0 ws0">{{showList($d['hca_hcg_antecedentes_familiares']->dislipidemias)}}</div>
            </div>
            <div class="c x1 y36 wb h10">
                <div class="t m0 x6 hb y1e ff3 fs5 fc0 sc0 ls0 ws0">OBESIDAD:</div>
            </div>
            <div class="c xc y36 w1c h10">
                <div class="t m0 x6 hb y1e ff3 fs5 fc0 sc0 ls0 ws0">{{showList($d['hca_hcg_antecedentes_familiares']->obesidad)}}</div>
            </div>
            <div class="c xb y36 w9 h10">
                <div class="t m0 x6 hb y1e ff3 fs5 fc0 sc0 ls0 ws0">ALERGIAS:</div>
            </div>
            <div class="c x7 y36 wa h10">
                <div class="t m0 x6 hb y1e ff3 fs5 fc0 sc0 ls0 ws0">{{showList($d['hca_hcg_antecedentes_familiares']->alergias)}}</div>
            </div>
            <div class="c x9 y36 w6 h10">
                <div class="t m0 x6 hb y1e ff3 fs5 fc0 sc0 ls0 ws0">ONCOLÓGICOS:</div>
            </div>
            <div class="c xa y36 w8 h10">
                <div class="t m0 x6 hb y1e ff3 fs5 fc0 sc0 ls0 ws0">{{showList($d['hca_hcg_antecedentes_familiares']->oncologicos)}}</div>
            </div>
            <div class="c x1 y37 wb h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">NEFROPATÍAS:</div>
            </div>
            <div class="c xc y37 w1c h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{showList($d['hca_hcg_antecedentes_familiares']->nefropatias)}}</div>
            </div>
            <div class="c xb y37 w9 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">CARDIOPATÍAS:</div>
            </div>
            <div class="c x7 y37 wa h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{showList($d['hca_hcg_antecedentes_familiares']->cardiopatias)}}</div>
            </div>
            <div class="c x9 y37 w6 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">NEUMOPATÍAS:</div>
            </div>
            <div class="c xa y37 w8 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{showList($d['hca_hcg_antecedentes_familiares']->neumopatias)}}</div>
            </div>
            <div class="c x1 y38 wb h2">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">PSIQUIÁTRICOS:</div>
            </div>
            <div class="c xc y38 w1c h2">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{showList($d['hca_hcg_antecedentes_familiares']->psiquiatricos)}}</div>
            </div>
            <div class="c xb y38 w9 h2">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">OTROS: </div>
            </div>
            <div class="c x7 y38 w13 h2">
                <div class="t m0  hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_antecedentes_familiares']->otros}}</div>
            </div>
            <div class="c x1 y39 w2 h2">
                <div class="t m0 x6 h5 y2b ff1 fs1 fc0 sc0 ls0 ws0">F) PERSONALES NO PATOLÓGICOS </div>
            </div>
            <div class="c x1 y3a wb h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">INMUNIZACIONES:</div>
            </div>
            <div class="c xc y3a w1c h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_no_pats']->inmunizaciones}}</div>
            </div>
            <div class="c xb y3a w9 h9">
                <div class="t m0 x6 hc y1a ff3 fs6 fc0 sc0 ls0 ws0">HABITOS ALIMENTICIOS :</div>
            </div>
            <div class="c x7 y3a wa h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{showList($d['hca_hcg_an_personales_no_pats']->habitos_alimenticios)}}</div>
            </div>
            <div class="c x9 y3a w6 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">ACTIVIDAD FÍSICA:</div>
            </div>
            <div class="c xa y3a w8 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{showList($d['hca_hcg_an_personales_no_pats']->actividad_fisica)}}</div>
            </div>
            <div class="c x1 y3b wb h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">TRANSFUSIONES:</div>
            </div>
            <div class="c xc y3b w1c h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_no_pats']->transfusiones}}</div>
            </div>
            <div class="c xb y3b w9 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">HIGIENE:</div>
            </div>
            <div class="c x7 y3b wa h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{showList($d['hca_hcg_an_personales_no_pats']->higiene)}}</div>
            </div>
            <div class="c x9 y3b w6 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">AUTOMEDICACIÓN:</div>
            </div>
            <div class="c xa y3b w8 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{ifElse($d['hca_hcg_an_personales_no_pats']->automedicacion)}}</div>
            </div>
            <div class="c x1 y3c wb h2">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">TATUAJES:</div>
            </div>
            <div class="c xc y3c w1c h2">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_no_pats']->tatuajes}}</div>
            </div>
            <div class="c xb y3c w9 h2">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">PERFORACIONES:</div>
            </div>
            <div class="c x7 y3c wa h2">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_no_pats']->perforaciones}}</div>
            </div>
            <div class="c x9 y3c w6 h2">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">OTROS:</div>
            </div>
            <div class="c xa y3c w8 h2">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_no_pats']->otros}}</div>
            </div>
            <div class="c x1 y3d w2 h2">
                <div class="t m0 x6 h5 y22 ff1 fs1 fc0 sc0 ls0 ws0">G) PERSONALES PATOLÓGICOS </div>
            </div>
            <div class="c x1 y3e wb h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">DIABETES:</div>
            </div>
            <div class="c xc y3e w6 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_pats']->diabetes}}</div>
            </div>
            <div class="c x4 y3e w11 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">HIPERTENSIÓN:</div>
            </div>
            <div class="c xb y3e w9 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_pats']->hipertension}}</div>
            </div>
            <div class="c x7 y3e w6 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">DISLIPIDEMIAS:</div>
            </div>
            <div class="c x8 y3e wa h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_pats']->dislipidemias}}</div>
            </div>
            <div class="c xa y3e w8 h9">
                <div class="t m0 x36 h7 y3f ff1 fs2 fc0 sc0 ls0 ws0">ADICCIONES</div>
            </div>
            <div class="c x1 y40 wb h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">OBESIDAD:</div>
            </div>
            <div class="c xc y40 w6 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{ifElse($d['hca_hcg_an_personales_pats']->obesidad)}}</div>
            </div>
            <div class="c x4 y40 w11 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">ALERGIAS:</div>
            </div>
            <div class="c xb y40 w9 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_pats']->alergias}}</div>
            </div>
            <div class="c x7 y40 w6 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">CIRUGÍAS:</div>
            </div>
            <div class="c x8 y40 wa h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_pats']->cirugias}}</div>
            </div>
            <div class="c xa y40 we h9">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">TABACO:</div>
            </div>
            <div class="c x1 y41 wb h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">NEFROPATÍAS:</div>
            </div>
            <div class="c xc y41 w6 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_pats']->nefropatias}}</div>
            </div>
            <div class="c x4 y41 w11 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">CARDIOPATÍAS:</div>
            </div>
            <div class="c xb y41 w9 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_pats']->cardiopatias}}</div>
            </div>
            <div class="c x7 y41 w6 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">NEUMOPATÍAS:</div>
            </div>
            <div class="c x8 y41 wa h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_pats']->neumopatias}}</div>
            </div>
            <div class="c xa y41 we h9">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">ALCOHOL:</div>
            </div>
            <div class="c x1 y42 wb h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">PSIQUIÁTRICOS:</div>
            </div>
            <div class="c xc y42 w6 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_pats']->psiquiatricos}}</div>
            </div>
            <div class="c x4 y42 w11 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">CONVULSIONES:</div>
            </div>
            <div class="c xb y42 w9 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_pats']->convulsiones}}</div>
            </div>
            <div class="c x7 y42 w6 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">ONCOLÓGICOS:</div>
            </div>
            <div class="c x8 y42 wa h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_pats']->oncologicos}}</div>
            </div>
            <div class="c xa y42 we h9">
                <div class="t m0 x6 hb y10 ff3 fs5 fc0 sc0 ls0 ws0">DROGAS: </div>
            </div>
            <div class="c x1 y43 w14 h2">
                <div class="t m0 x36 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">ENFERMEDADES INFECTO-CONTAGIOSAS:</div>
            </div>
            <div class="c xb y43 w9 h2">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_pats']->enfermedades_infecto_contagiosas}}</div>
            </div>
            <div class="c x7 y43 w6 h2">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">OTROS: </div>
            </div>
            <div class="c x8 y43 wa h2">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_personales_pats']->otros}}</div>
            </div>
            <div class="c x1 y44 w2 h2">
                <div class="t m0 x6 h5 y2b ff1 fs1 fc0 sc0 ls0 ws0">H) GINECO-OBSTÉTRICOS</div>
            </div>
            <div class="c x1 y45 wb h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">MENARCA:</div>
            </div>
            <div class="c xc y45 w6 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_gineco_obstetricos']->menarca}}</div>
            </div>
            <div class="c x4 y45 w11 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">RITMO:</div>
            </div>
            <div class="c xb y45 w9 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_gineco_obstetricos']->ritmo}}</div>
            </div>
            <div class="c x7 y45 w6 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">I.V.S.A:</div>
            </div>
            <div class="c x8 y45 w7 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_gineco_obstetricos']->ivsa}}</div>
            </div>
            <div class="c x9 y45 w6 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">MENOPAUSIA:</div>
            </div>
            <div class="c xa y45 w8 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_gineco_obstetricos']->menopausia}}</div>
            </div>
            <div class="c x1 y46 wb h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">FUM:</div>
            </div>
            <div class="c xc y46 w6 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_gineco_obstetricos']->fum}}</div>
            </div>
            <div class="c x4 y46 w11 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">FUP.:</div>
            </div>
            <div class="c xb y46 w9 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_gineco_obstetricos']->fup}}</div>
            </div>
            <div class="c x7 y46 w6 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">FUA.:</div>
            </div>
            <div class="c x8 y46 w7 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_gineco_obstetricos']->fua}}</div>
            </div>
            <div class="c x9 y46 w6 h9">
                <div class="t m0 x6 h11 y47 ff3 fs8 fc0 sc0 ls0 ws0">HIJOS(AS) VIVOS(AS):</div>
            </div>
            <div class="c xa y46 w8 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_gineco_obstetricos']->total_de_hijos_vivos}}</div>
            </div>
            <div class="c x1 y48 wb hd">
                <div class="t m0 x6 hb y34 ff3 fs5 fc0 sc0 ls0 ws0">GESTAS:</div>
            </div>
            <div class="c xc y48 w6 hd">
                <div class="t m0 x6 hb y34 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_gineco_obstetricos']->gestas}}</div>
            </div>
            <div class="c x4 y48 w11 hd">
                <div class="t m0 x6 hb y34 ff3 fs5 fc0 sc0 ls0 ws0">PARTOS:</div>
            </div>
            <div class="c xb y48 w9 hd">
                <div class="t m0 x6 hb y34 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_gineco_obstetricos']->partos}}</div>
            </div>
            <div class="c x7 y48 w6 hd">
                <div class="t m0 x6 hb y34 ff3 fs5 fc0 sc0 ls0 ws0">CESÁREAS:</div>
            </div>
            <div class="c x8 y48 w7 hd">
                <div class="t m0 x6 hb y34 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_gineco_obstetricos']->cesareas}}</div>
            </div>
            <div class="c x9 y48 w6 hd">
                <div class="t m0 x6 hb y34 ff3 fs5 fc0 sc0 ls0 ws0">ABORTOS:</div>
            </div>
            <div class="c xa y48 w8 hd">
                <div class="t m0 x6 hb y34 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_gineco_obstetricos']->abortos}}</div>
            </div>
            <div class="c x1 y49 wb he">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">MÉTODO DE P.F.:</div>
            </div>
            <div class="c xc y49 w6 he">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_gineco_obstetricos']->metodo_de_planificacion_familiar}}</div>
            </div>
            <div class="c x4 y49 w11 he">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">DOC / VPH:</div>
            </div>
            <div class="c xb y49 w9 he">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_gineco_obstetricos']->doc_vph}}</div>
            </div>
            <div class="c x7 y49 w6 he">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">MAMOGRAFÍA:</div>
            </div>
            <div class="c x8 y49 w7 he">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_gineco_obstetricos']->mamografia}}</div>
            </div>
            <div class="c x9 y49 w6 he">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">EXP. MAMA:</div>
            </div>
            <div class="c xa y49 w8 he">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hca_hcg_an_gineco_obstetricos']->exp_mama}}</div>
            </div>
            <div class="c x1 y4a w2 h2">
                <div class="t m0 x6 h8 y20 ff1 fs3 fc0 sc0 ls0 ws0">IV. MOTIVO DE CONSULTA</div>
            </div>
            <div class="c x1 y4b w2 h2">
                <div class="t m0 x6 h7 y7 ff3 fs2 fc0 sc0 ls0 ws0">{{$d['hc_motivo_padecimientos']->motivo_de_consulta}}</div>
            </div>
            <div class="c x1 y4c w2 h2">
                <div class="t m0 x6 h8 ya ff1 fs3 fc0 sc0 ls0 ws0">V. PADECIMIENTO ACTUAL</div>
            </div>
            <div class="c x1 y4d w2 h12">
                <div class="t m0 x6 h7 y4e ff3 fs2 fc0 sc0 ls0 ws0">{{$d['hc_motivo_padecimientos']->padecimiento_actual}}</div>
                <div class="t m0 x6 h7 y4f ff3 fs2 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c x1 y50 w1d h2">
                <div class="t m0 x6 h8 ya ff1 fs3 fc0 sc0 ls0 ws0">VI. INTERROGATORIO POR APARATOS Y SISTEMAS (FUNCIONAMIENTO/SÍNTOMAS)</div>
            </div>
            <div class="c x1 y51 wb h2">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">OFTÁLMICO:</div>
            </div>
            <div class="c xc y51 w1c h2">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->oftalmico}}</div>
            </div>
            <div class="c xb y51 w9 h2">
                <div class="t m0 x6 hc y1a ff3 fs6 fc0 sc0 ls0 ws0">CARDIOVASCULAR: </div>
            </div>
            <div class="c x7 y51 wa h2">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->cardiovascular}}</div>
            </div>
            <div class="c x9 y51 w6 h2">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">OTORRINOLARINGOLÓGICO</div>
            </div>
            <div class="c xa y51 w8 h2">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->otorrinolaringologico}}</div>
            </div>
            <div class="c x1 y52 wb h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">RESPIRATORIO: </div>
            </div>
            <div class="c xc y52 w1c h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->respiratorio}}</div>
            </div>
            <div class="c xb y52 w9 h9">
                <div class="t m0 x6 hc y1a ff3 fs6 fc0 sc0 ls0 ws0">GASTROINTESTINAL</div>
            </div>
            <div class="c x7 y52 wa h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->gastrointestinal}}</div>
            </div>
            <div class="c x9 y52 w6 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">MÚSCULO-ESQUELÉTICO:</div>
            </div>
            <div class="c xa y52 w8 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->musculo_esqueletico}}</div>
            </div>
            <div class="c x1 y53 wb h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">NERVIOSO:</div>
            </div>
            <div class="c xc y53 w1c h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->nervioso}}</div>
            </div>
            <div class="c xb y53 w9 h9">
                <div class="t m0 x6 hc y1a ff3 fs6 fc0 sc0 ls0 ws0">GENITO-URINARIO</div>
            </div>
            <div class="c x7 y53 wa h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->genito_urinario}}</div>
            </div>
            <div class="c x9 y53 w6 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">INFECTO-CONTAGIOSO:</div>
            </div>
            <div class="c xa y53 w8 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->infecto_contagioso}}</div>
            </div>
            <div class="c x1 y54 wb h2">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">ENDOCRINO:</div>
            </div>
            <div class="c xc y54 w1c h2">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->endocrino}}</div>
            </div>
            <div class="c xb y54 w9 h2">
                <div class="t m0 x6 hc y1a ff3 fs6 fc0 sc0 ls0 ws0">HEMATOLÓGICO:</div>
            </div>
            <div class="c x7 y54 w6 h2">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->hematologico}}</div>
            </div>
            <div class="c x8 y54 w7 h2">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">OTROS:</div>
            </div>
            <div class="c x9 y54 wf h2">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->otros}}</div>
            </div>
            <div class="c x1 y55 w1e h2">
                <div class="t m0 x6 h8 ya ff1 fs3 fc0 sc0 ls0 ws0">VII.EXPLORACIÓN FÍSICA</div>
            </div>
            <div class="c xa y55 w8 h2">
                <div class="t m0 x6 hb y15 ff3 fs5 fc0 sc0 ls0 ws0">GLICEMIA CAPILAR:</div>
            </div>
            <div class="c x1 y56 wb h2">
                <div class="t m0 x6 hb y15 ff3 fs5 fc0 sc0 ls0 ws0">PESO:</div>
            </div>
            <div class="c xc y56 w6 h2">
                <div class="t m0 x6 hb y15 ff3 fs5 fc0 sc0 ls0 ws0">TALLA:</div>
            </div>
            <div class="c x4 y56 w11 h2">
                <div class="t m0 x6 hb y15 ff3 fs5 fc0 sc0 ls0 ws0">IMC:</div>
            </div>
            <div class="c xb y56 w9 h2">
                <div class="t m0 x6 hb y15 ff3 fs5 fc0 sc0 ls0 ws0">CC:</div>
            </div>
            <div class="c x7 y56 w6 h2">
                <div class="t m0 x6 hb y15 ff3 fs5 fc0 sc0 ls0 ws0">TA:</div>
            </div>
            <div class="c x8 y56 w7 h2">
                <div class="t m0 x6 hb y15 ff3 fs5 fc0 sc0 ls0 ws0">FC:</div>
            </div>
            <div class="c x9 y56 w6 h2">
                <div class="t m0 x6 hb y15 ff3 fs5 fc0 sc0 ls0 ws0">FR:</div>
            </div>
            <div class="c xa y56 we h2">
                <div class="t m0 x6 hb y15 ff3 fs5 fc0 sc0 ls0 ws0">TEMP:</div>
            </div>
            <div class="c xe y56 w9 h2">
                <div class="t m0 x6 hb y15 ff3 fs5 fc0 sc0 ls0 ws0">PULSO:</div>
            </div>
            <div class="c x1 y57 w4 h13">
                <div class="t m0 x5 h5 y58 ff1 fs1 fc0 sc0 ls0 ws0">HABITUS EXTERIOR</div>
            </div>
            <div class="c x4 y59 w11 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">ORIENTADO:</div>
            </div>
            <div class="c xb y59 w9 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_exploraciones_fisicas']->orientado}}</div>
            </div>
            <div class="c x7 y59 w6 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">LENGUAJE:</div>
            </div>
            <div class="c x8 y59 w7 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_exploraciones_fisicas']->lenguaje}}</div>
            </div>
            <div class="c x9 y59 w6 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">MARCHA:</div>
            </div>
            <div class="c xa y59 w8 h9">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_exploraciones_fisicas']->marcha}}</div>
            </div>
            <div class="c x4 y57 w11 h2">
                <div class="t m0 x6 hf y35 ff3 fs7 fc0 sc0 ls0 ws0">APOYO FUNCIONAL:</div>
            </div>
            <div class="c xb y57 w9 h2">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_exploraciones_fisicas']->aporyo_funcional}}</div>
            </div>
            <div class="c x7 y57 w6 h2">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">COOPERADOR:</div>
            </div>
            <div class="c x8 y57 w7 h2">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_exploraciones_fisicas']->cooperador}}</div>
            </div>
            <div class="c x9 y57 w6 h2">
                <div class="t m0 x6 hf y35 ff3 fs7 fc0 sc0 ls0 ws0">HIGIENE ADECUADA: </div>
            </div>
            <div class="c xa y57 w8 h2">
                <div class="t m0 x6 hb y17 ff3 fs5 fc0 sc0 ls0 ws0">{{$d['hc_exploraciones_fisicas']->higine_adecuada}}</div>
            </div>
            <div class="c x1 y5a w2 h2">
                <div class="t m0 x38 h5 y22 ff1 fs1 fc0 sc0 ls0 ws0">DESCRIPCIÓN</div>
            </div>
            <div class="c x1 y5b wb h14">
                <div class="t m0 x13 hb y5c ff1 fs5 fc0 sc0 ls0 ws0">CABEZA</div>
            </div>
            <div class="c xc y5b w1f h14">
                <div class="t m0 x6 h7 y5d ff3 fs2 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->cabeza}}</div>
            </div>
            <div class="c x1 y5e wb h14">
                <div class="t m0 x13 hb y5f ff1 fs5 fc0 sc0 ls0 ws0">CUELLO</div>
            </div>
            <div class="c xc y5e w1f h14">
                <div class="t m0 x6 h7 y5d ff3 fs2 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->cuello}}</div>
            </div>
            <div class="c x1 y60 wb h14">
                <div class="t m0 x12 hb y5f ff1 fs5 fc0 sc0 ls0 ws0">TÓRAX</div>
            </div>
            <div class="c xc y60 w1f h14">
                <div class="t m0 x6 h7 y5d ff3 fs2 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->torax}}</div>
            </div>
            <div class="c x1 y61 wb h14">
                <div class="t m0 x39 hb y5f ff1 fs5 fc0 sc0 ls0 ws0">ABDOMEN</div>
            </div>
            <div class="c xc y61 w1f h14">
                <div class="t m0 x6 h7 y5d ff3 fs2 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->abdomen}}</div>
            </div>
            <div class="c x1 y62 wb h14">
                <div class="t m0 xf hb y5f ff1 fs5 fc0 sc0 ls0 ws0">EXTREMIDADES </div>
            </div>
            <div class="c xc y62 w1f h14">
                <div class="t m0 x6 h7 y5d ff3 fs2 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->extremidades}}</div>
            </div>
            <div class="c x1 y63 wb h9">
                <div class="t m0 x13 hb y64 ff1 fs5 fc0 sc0 ls0 ws0">GENITAL</div>
            </div>
            <div class="c xc y63 w1f h9">
                <div class="t m0 x6 h7 y65 ff3 fs2 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->genital}}</div>
            </div>
            <div class="c x1 y66 wb h9">
                <div class="t m0 x34 hb y10 ff1 fs5 fc0 sc0 ls0 ws0">NEUROLÓGICO</div>
            </div>
            <div class="c xc y66 w1f h9">
                <div class="t m0 x6 h7 y65 ff3 fs2 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->neurologico}}</div>
            </div>
            <div class="c x1 y67 wb h9">
                <div class="t m0 x36 hb y10 ff1 fs5 fc0 sc0 ls0 ws0">PIEL</div>
            </div>
            <div class="c xc y67 w1f h9">
                <div class="t m0 x6 h7 y65 ff3 fs2 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->piel}}</div>
            </div>
            <div class="c x1 y68 wb h2">
                <div class="t m0 x12 hb y15 ff1 fs5 fc0 sc0 ls0 ws0">OTROS</div>
            </div>
            <div class="c xc y68 w1f h2">
                <div class="t m0 x6 h7 y69 ff3 fs2 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->otros}}</div>
            </div>
            <div class="c x1 y6a w2 h2">
                <div class="t m0 x6 h8 ya ff1 fs3 fc0 sc0 ls0 ws0">VIII. ESTUDIOS AUXILIARES DE DIAGNÓSTICO </div>
            </div>
            <div class="c x1 y6b w2 h15">
                <div class="t m0 x6 h7 y6c ff3 fs2 fc0 sc0 ls0 ws0">{{$d['hc_exploraciones_fisicas']->cabeza}}</div>
            </div>
            <div class="c x1 y6d w4 h2">
                <div class="t m0 x6 h16 y6e ff1 fs9 fc0 sc0 ls0 ws0">IX. ESTADO NUTRICIONAL</div>
            </div>
            <div class="c x4 y6d w11 h2">
                <div class="t m0 x39 hb y15 ff3 fs5 fc0 sc0 ls0 ws0">NORMAL</div>
            </div>
            <div class="c xb y6d w9 h2">
                <div class="t m0 xf hb y15 ff3 fs5 fc0 sc0 ls0 ws0">SOBREPESO</div>
            </div>
            <div class="c x7 y6d w6 h2">
                <div class="t m0 x3a hb y15 ff3 fs5 fc0 sc0 ls0 ws0">OBESIDAD</div>
            </div>
            <div class="c x8 y6d w7 h2">
                <div class="t m0 x14 hb y15 ff3 fs5 fc0 sc0 ls0 ws0">DES. LEVE</div>
            </div>
            <div class="c x9 y6d w6 h2">
                <div class="t m0 xf hb y15 ff3 fs5 fc0 sc0 ls0 ws0">DES. MODERADA</div>
            </div>
            <div class="c xa y6d we h2">
                <div class="t m0 xf hb y15 ff3 fs5 fc0 sc0 ls0 ws0">DES. GRAVE</div>
            </div>
            <div class="c xe y6d w9 h2">
                <div class="t m0 xf hf y6f ff3 fs7 fc0 sc0 ls0 ws0">RECUPERADO</div>
            </div>
            <div class="c x1 y70 w2 h2">
                <div class="t m0 x6 h8 y71 ff1 fs3 fc0 sc0 ls0 ws0">X. IMPRESIÓN DIAGNÓSTICA </div>
            </div>
            <div class="c x1 y72 w2 h13">
                <div class="t m0 x6 h7 y73 ff3 fs2 fc0 sc0 ls0 ws0">{{$d['hc_pronosticos']->impresión_diagnostica}}</div>
            </div>
            <div class="c x1 y74 w2 h2">
                <div class="t m0 x6 h8 y71 ff1 fs3 fc0 sc0 ls0 ws0">XI. TERAPÉUTICA (CUADRO BÁSICO)</div>
            </div>
            <div class="c x1 y75 w14 h2">
                <div class="t m0 x19 h5 y76 ff1 fs1 fc0 sc0 ls0 ws0">FÁRMACO</div>
            </div>
            <div class="c xb y75 w9 h2">
                <div class="t m0 x30 h5 y76 ff1 fs1 fc0 sc0 ls0 ws0">DOSIS</div>
            </div>
            <div class="c x7 y75 w6 h2">
                <div class="t m0 x36 h5 y76 ff1 fs1 fc0 sc0 ls0 ws0">VÍA</div>
            </div>
            <div class="c x8 y75 w10 h2">
                <div class="t m0 x3b h5 y76 ff1 fs1 fc0 sc0 ls0 ws0">PERIODICIDAD</div>
            </div>
            <div class="c x1 y77 w2 h2">
                <div class="t m0 x6 h8 y71 ff1 fs3 fc0 sc0 ls0 ws0">XII. CUIDADOS GENERALES</div>
            </div>
            <div class="c x1 y78 w2 h15">
                <div class="t m0 x6 h7 y6c ff3 fs2 fc0 sc0 ls0 ws0">{{$d['hc_pronosticos']->cuidados_generales}}</div>
            </div>
            <div class="c x1 y79 w4 h2">
                <div class="t m0 x6 h8 y7a ff1 fs3 fc0 sc0 ls0 ws0">XII. PRONÓSTICO</div>
            </div>
            <div class="c x4 y79 w5 h2">
                <div class="t m0 x6 h7 y7 ff3 fs2 fc0 sc0 ls0 ws0">{{$d['hc_pronosticos']->pronostico}}</div>
            </div>
            <div class="c x7 y79 w6 h2">
                <div class="t m0 x6 h5 y6 ff3 fs1 fc0 sc0 ls0 ws0">REFERIDO A: </div>
            </div>
            <div class="c x8 y79 w10 h2">
                <div class="t m0 x6 h7 y7 ff3 fs2 fc0 sc0 ls0 ws0">{{$d['nucleos']->nombre}}</div>
            </div>
            <div class="c x1 y7b w4 h2">
                <div class="t m0 x6 h5 y6 ff3 fs1 fc0 sc0 ls0 ws0">PRÓXIMA CITA: </div>
            </div>
            <div class="c x4 y7b w5 h2">
                <div class="t m0 x6 h7 y7 ff3 fs2 fc0 sc0 ls0 ws0">{{$d['hc_pronosticos']->proxima_cita}}</div>
            </div>
            <div class="c x7 y7c w13 h9">
                <div class="t m0 x5 h5 y7d ff1 fs1 fc0 sc0 ls0 ws0">NOMBRE, FIRMA Y CÉDULA DEL MÉDICO(A) TRATANTE</div>
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
