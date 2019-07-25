@extends('voyager::master')

@section('page_title', __('voyager::generic.view').' '.$dataTypes[0]->display_name_singular)

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/hcp/base.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/hcp/fancy.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/hcp/main.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/docs.css') }}">
@stop
@section('content')
<div id="page-container">
    <div id="pf1" class="pf w0 h0" data-page-no="1">
        <div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="{{asset('css/hcp/bg1.png')}}" />
            <div class="c x1 y1 w2 h2">
                <div class="t m0 x2 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">SERVICIOS DE SALUD DE NUEVO LEÓN</div>
            </div>
            <div class="c x1 y3 w2 h2">
                <div class="t m0 x3 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">JURISDICCIÓN SANITARIA No. 7</div>
            </div>
            <div class="c x4 y4 w3 h2">
                <div class="t m0 x5 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">HISTORIA CLÍNICA PEDIÁTRICA (0-9 AÑOS)</div>
            </div>
            <div class="c x1 y5 w4 h2">
                <div class="t m0 x6 h4 y6 ff1 fs1 fc0 sc0 ls0 ws0">CENTRO DE SALUD:</div>
            </div>
            <div class="c x4 y5 w5 h2">
                <div class="t m0 x6 h5 y7 ff2 fs2 fc0 sc0 ls0 ws0">{{setting('centro-de-salud.name')}}</div>
            </div>
            <div class="c x7 y5 w6 h2">
                <div class="t m0 x6 h4 y6 ff1 fs1 fc0 sc0 ls0 ws0">NÚCLEO:</div>
            </div>
            <div class="c x8 y5 w7 h2">
                <div class="t m0 x6 h5 y7 ff2 fs2 fc0 sc0 ls0 ws0">{{$d['nucleos']->nombre}}</div>
            </div>
            <div class="c x9 y5 w6 h2">
                <div class="t m0 x6 h4 y6 ff1 fs1 fc0 sc0 ls0 ws0">EXPEDIENTE:</div>
            </div>
            <div class="c xa y5 w8 h2">
                <div class="t m0 x6 h5 y7 ff2 fs2 fc0 sc0 ls0 ws0">{{$d['historias_clinicas']->id}}</div>
            </div>
            <div class="c xb y8 w9 h2">
                <div class="t m0 x6 h4 y6 ff1 fs1 fc0 sc0 ls0 ws0">FECHA:</div>
            </div>
            <div class="c x7 y8 wa h2">
                <div class="t m0 x6 h5 y7 ff2 fs2 fc0 sc0 ls0 ws0">{{showDate($d['historias_clinicas']->created_at)}}</div>
            </div>
            <div class="c x9 y8 w6 h2">
                <div class="t m0 x6 h4 y6 ff1 fs1 fc0 sc0 ls0 ws0">HORA:</div>
            </div>
            <div class="c xa y8 w8 h2">
                <div class="t m0 x6 h5 y7 ff2 fs2 fc0 sc0 ls0 ws0">{{$d['historias_clinicas']->created_at->format('g:h:s a')}}</div>
            </div>
            <div class="c x1 y9 wb h2">
                <div class="t m0 x6 h6 ya ff1 fs3 fc0 sc0 ls0 ws0">I. FICHA DE IDENTIFICACIÓN </div>
            </div>
            <div class="c x1 yb w6 h2">
                <div class="t m0 x6 h4 y6 ff1 fs1 fc0 sc0 ls0 ws0">NOMBRE:</div>
            </div>
            <div class="c xc yb wc h2">
                <div class="t m0 x6 h5 y7 ff2 fs2 fc0 sc0 ls0 ws0">{{$d['pacientes']->fullName}}</div>
            </div>
            <div class="c x8 yb w7 h2">
                <div class="t m0 x6 h5 yc ff1 fs2 fc0 sc0 ls0 ws0">EDAD:</div>
            </div>
            <div class="c x9 yb w6 h2">
                <div class="t m0 x6 h5 y7 ff2 fs2 fc0 sc0 ls0 ws0">{{date("Y")-$d['pacientes']->fecha_de_nacimiento->format("Y")}}</div>
            </div>
            <div class="c xa yb wd h2">
                <div class="t m0 x6 h5 yc ff1 fs2 fc0 sc0 ls0 ws0">FECHA NAC.: </div>
            </div>
            <div class="c xd yb w6 h2">
                <div class="t m0 x6 h5 y7 ff2 fs2 fc0 sc0 ls0 ws0">{{$d['pacientes']->fecha_de_nacimiento->format('j-m-Y')}}</div>
            </div>
            <div class="c xe yb w6 h2">
                <div class="t m0 x6 h6 ya ff2 fs3 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c x1 yd w6 h2">
                <div class="t m0 x6 h4 y6 ff1 fs1 fc0 sc0 ls0 ws0">DOMICILIO: </div>
            </div>
            <div class="c xc yd we h2">
                <div class="t m0 x6 h5 y7 ff2 fs2 fc0 sc0 ls0 ws0">{{$d['pacientes']->domicilio}}</div>
            </div>
            <div class="c x7 yd w6 h2">
                <div class="t m0 x6 h4 y6 ff1 fs1 fc0 sc0 ls0 ws0">LOCALIDAD:</div>
            </div>
            <div class="c x8 yd wa h2">
                <div class="t m0 x6 h5 y7 ff2 fs2 fc0 sc0 ls0 ws0">{{$d['pacientes']->domicilio}}</div>
            </div>
            <div class="c xa yd wd h2">
                <div class="t m0 x6 h4 y6 ff1 fs1 fc0 sc0 ls0 ws0">SEXO:</div>
            </div>
            <div class="c xd yd w6 h2">
                <div class="t m0 x6 h5 y7 ff2 fs2 fc0 sc0 ls0 ws0"> {{$d['pacientes']->isFemale ? 'Mujer' : 'Hombre'}}</div>
            </div>
            <div class="c xe yd w6 h2">
                <div class="t m0 x6 h6 ya ff2 fs3 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c x1 ye wf h2">
                <div class="t m0 x6 h6 ya ff1 fs3 fc0 sc0 ls0 ws0">II. EVALUACIÓN INICIAL (DATOS DE LA MADRE , PADRE O TUTOR)</div>
            </div>
            <div class="c x1 yf w6 h2">
                <div class="t m0 xf h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">NOMBRE:</div>
            </div>
            <div class="c x7 yf w6 h2">
                <div class="t m0 x10 h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">EDAD</div>
            </div>
            <div class="c xa yf wd h2">
                <div class="t m0 x11 h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">SEXO:</div>
            </div>
            <div class="c xd yf w6 h2">
                <div class="t m0 x6 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['pacientes']->isFemale ? 'Mujer' : 'Hombre'}}(/</div>
            </div>
            <div class="c xe yf w6 h2">
                <div class="t m0 x6 h6 ya ff2 fs3 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c x1 y12 w6 h2">
                <div class="t m0 x12 h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">ORIGINARIO(A):</div>
            </div>
            <div class="c xc y12 w4 h2">
                <div class="t m0 x6 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hc_evaluaciones_iniciales']->originario}}</div>
            </div>
            <div class="c x7 y12 w6 h2">
                <div class="t m0 x12 h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">GRUPO ÉTNICO:</div>
            </div>
            <div class="c x8 y12 wa h2">
                <div class="t m0 x6 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hc_evaluaciones_iniciales']->grupo_etnico}}</div>
            </div>
            <div class="c x1 y13 w6 h2">
                <div class="t m0 x13 h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">ESCOLARIDAD:</div>
            </div>
            <div class="c xc y13 w4 h2">
                <div class="t m0 x6 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hc_evaluaciones_iniciales']->escolaridad}}</div>
            </div>
            <div class="c x7 y13 w6 h2">
                <div class="t m0 x14 h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">IDIOMA:</div>
            </div>
            <div class="c x8 y13 wa h2">
                <div class="t m0 x6 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hc_evaluaciones_iniciales']->idioma}}</div>
            </div>
            <div class="c x1 y14 w6 h2">
                <div class="t m0 x15 h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">RELIGIÓN:</div>
            </div>
            <div class="c xc y14 w4 h2">
                <div class="t m0 x6 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hc_evaluaciones_iniciales']->religion}}</div>
            </div>
            <div class="c xb y14 w5 h2">
                <div class="t m0 x12 h8 y15 ff2 fs5 fc0 sc0 ls0 ws0">ACEPTARÍA TRANSFUSIÓN SANGUÍNEA:</div>
            </div>
            <div class="c x8 y14 wa h2">
                <div class="t m0 x6 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hc_evaluaciones_iniciales']->aceptaria_transfusion_sanguinea}}</div>
            </div>
            <div class="c x1 y16 w6 h2">
                <div class="t m0 x0 h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">OCUPACIÓN:</div>
            </div>
            <div class="c xc y16 w4 h2">
                <div class="t m0 x6 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hc_evaluaciones_iniciales']->ocupacion}}</div>
            </div>
            <div class="c xb y16 w5 h2">
                <div class="t m0 x16 h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">INGRESO MENSUAL:</div>
            </div>
            <div class="c x8 y16 wa h2">
                <div class="t m0 x6 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hc_evaluaciones_iniciales']->ingreso_mensual}}</div>
            </div>
            <div class="c x1 y17 w6 h2">
                <div class="t m0 x17 h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">ESTADO CIVIL:</div>
            </div>
            <div class="c xc y17 w4 h2">
                <div class="t m0 x6 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hc_evaluaciones_iniciales']->estado_civil}}</div>
            </div>
            <div class="c x7 y17 w6 h2">
                <div class="t m0 x13 h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">PASATIEMPOS:</div>
            </div>
            <div class="c x8 y17 wa h2">
                <div class="t m0 x6 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hc_evaluaciones_iniciales']->pasatiempos}}</div>
            </div>
            <div class="c x1 y18 w6 h9">
                <div class="t m0 x18 h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">VIVIENDA: </div>
            </div>
            <div class="c xc y18 w6 h9">
                <div class="t m0 x6 h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">PROPIA: {{check($d['hc_evaluaciones_iniciales']->vivienda, 'propia')}}</div>
            </div>
            <div class="c x4 y18 w6 h9">
                <div class="t m0 x6 h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">RENTA: {{check($d['hc_evaluaciones_iniciales']->vivienda, 'renta')}}</div>
            </div>
            <div class="c xb y18 w9 h9">
                <div class="t m0 x6 h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">OTROS: {{check($d['hc_evaluaciones_iniciales']->vivienda, 'otros')}}</div>
            </div>
            <div class="c x7 y18 w6 h9">
                <div class="t m0 x18 h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">SERVICIOS:</div>
            </div>
            <div class="c x8 y18 w7 h9">
                <div class="t m0 x6 h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">AGUA: {{checkArray($d['hc_evaluaciones_iniciales']->servicios, 'agua')}}</div>
            </div>
            <div class="c x9 y18 w6 h9">
                <div class="t m0 x6 h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">DRENAJE: {{checkArray($d['hc_evaluaciones_iniciales']->servicios, 'drenaje')}}</div>
            </div>
            <div class="c xa y18 wd h9">
                <div class="t m0 x6 h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">LUZ: {{checkArray($d['hc_evaluaciones_iniciales']->servicios, 'luz')}}</div>
            </div>
            <div class="c xd y18 w6 h9">
                <div class="t m0 x6 h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">GAS: {{checkArray($d['hc_evaluaciones_iniciales']->servicios, 'gas')}}</div>
            </div>
            <div class="c xe y18 w6 h9">
                <div class="t m0 x6 h7 y10 ff2 fs4 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c x1 y19 w2 ha">
                <div class="t m0 x6 h6 y1a ff1 fs3 fc0 sc0 ls0 ws0">III. FACTORES DE MAL PRONÓSTICO</div>
            </div>
            <div class="c x1 y1b w2 h9">
                <div class="t m0 x6 h4 y1c ff1 fs1 fc0 sc0 ls0 ws0">MENORES DE 2 MESES </div>
            </div>
            <div class="c x1 y1d w4 ha">
                <div class="t m0 x6 h7 y1e ff2 fs4 fc0 sc0 ls0 ws0">MADRE PRIMIGESTA</div>
            </div>
            <div class="c x4 y1d w5 ha">
                <div class="t m0 x6 h7 y1e ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_mal_pronostico_dos_mes']->madre_primigesta)}}</div>
            </div>
            <div class="c x7 y1d w10 ha">
                <div class="t m0 x6 h7 y1e ff2 fs4 fc0 sc0 ls0 ws0">HIPOXIA NEONATAL (SUFRIMIENTO FETAL) </div>
            </div>
            <div class="c xa y1d w8 ha">
                <div class="t m0 x6 h7 y1e ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_mal_pronostico_dos_mes']->hipoxia_neonatal)}}</div>
            </div>
            <div class="c x1 y1f w4 h9">
                <div class="t m0 x6 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">EDAD GESTACIONAL (37 O >42 SDG </div>
            </div>
            <div class="c x4 y1f w5 h9">
                <div class="t m0 x6 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_mal_pronostico_dos_mes']->edad_gestional)}}</div>
            </div>
            <div class="c x7 y1f w10 h9">
                <div class="t m0 x6 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">TRAUMA OBSTÉTRICO </div>
            </div>
            <div class="c xa y1f w8 h9">
                <div class="t m0 x6 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_mal_pronostico_dos_mes']->trauma_obstetrico)}}</div>
            </div>
            <div class="c x1 y21 w4 ha">
                <div class="t m0 x6 h7 y1e ff2 fs4 fc0 sc0 ls0 ws0">EMBARAZO DE ALTO RIESGO </div>
            </div>
            <div class="c x4 y21 w5 ha">
                <div class="t m0 x6 h7 y1e ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_mal_pronostico_dos_mes']->embarazo_de_alto_riesgo)}}</div>
            </div>
            <div class="c x7 y21 w10 ha">
                <div class="t m0 x6 h7 y1e ff2 fs4 fc0 sc0 ls0 ws0">BAJO PESO AL NACIMIENTO </div>
            </div>
            <div class="c xa y21 w8 ha">
                <div class="t m0 x6 h7 y1e ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_mal_pronostico_dos_mes']->bajo_peso_al_nacer)}}</div>
            </div>
            <div class="c x1 y22 w4 h9">
                <div class="t m0 x6 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">DEFECTOS AL NACIMIENTO </div>
            </div>
            <div class="c x4 y22 w5 h9">
                <div class="t m0 x6 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_mal_pronostico_dos_mes']->defectos_de_nacimiento)}}</div>
            </div>
            <div class="c x7 y22 w10 h9">
                <div class="t m0 x6 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">LACTANCIA MATERNA AUSENTE O INEFICIENTE </div>
            </div>
            <div class="c xa y22 w8 h9">
                <div class="t m0 x6 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_mal_pronostico_dos_mes']->defectos_de_nacimiento)}}</div>
            </div>
            <div class="c x1 y23 w6 hb">
                <div class="t m0 x6 h7 y24 ff2 fs4 fc0 sc0 ls0 ws0">CARDIOPATÍAS </div>
            </div>
            <div class="c x4 y23 w5 hb">
                <div class="t m0 x6 h7 y24 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_mal_pronostico_dos_mes']->cardiopatias)}}</div>
            </div>
            <div class="c x7 y23 w10 hb">
                <div class="t m0 x6 h7 y24 ff2 fs4 fc0 sc0 ls0 ws0"> PROCESO INFECCIOSO EN EL MENOR DE 28 DÍAS </div>
            </div>
            <div class="c xa y23 w8 hb">
                <div class="t m0 x6 h7 y24 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_mal_pronostico_dos_mes']->proceso_infeccioso_en_el_menor_de_28_dias)}}</div>
            </div>
            <div class="c x1 y25 w4 ha">
                <div class="t m0 x6 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">ATENCIÓN POR PERSONAL NO CAPACITADO </div>
            </div>
            <div class="c x4 y25 w5 ha">
                <div class="t m0 x6 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_mal_pronostico_dos_mes']->atencion_por_personal_no_capacitado)}}</div>
            </div>
            <div class="c x7 y25 w10 ha">
                <div class="t m0 x6 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">RETRASO EN EL DIAGNÓSTICO Y MANEJO DEL PADECIMIENTO</div>
            </div>
            <div class="c xa y25 w8 ha">
                <div class="t m0 x6 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_mal_pronostico_dos_mes']->retraso_en_el_diagnostico_y_manejo_del_padecimiento)}}</div>
            </div>
            <div class="c x1 y26 w2 h9">
                <div class="t m0 x6 hc y27 ff3 fs1 fc0 sc0 ls0 ws0">MENORES DE 5 AÑOS </div>
            </div>
            <div class="c x1 y28 w4 ha">
                <div class="t m0 x6 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">MADRE MENOR DE 17 AÑOS </div>
            </div>
            <div class="c x4 y28 w5 ha">
                <div class="t m0 x6 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_mal_pronostico_cinco_anos']->madre_menor_de_17_anos)}}</div>
            </div>
            <div class="c x7 y28 w10 ha">
                <div class="t m0 x6 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">PRESENCIA DE INMUNODEFICIENCIA </div>
            </div>
            <div class="c xa y28 w8 ha">
                <div class="t m0 x6 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_mal_pronostico_cinco_anos']->presencia_de_inmunodeficiencia)}}</div>
            </div>
            <div class="c x1 y29 w4 h9">
                <div class="t m0 x6 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">MADRE ANALFABETA </div>
            </div>
            <div class="c x4 y29 w5 h9">
                <div class="t m0 x6 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_mal_pronostico_cinco_anos']->madre_analfabeta)}}</div>
            </div>
            <div class="c x7 y29 w10 h9">
                <div class="t m0 x6 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">MUERTE DE ALGÚN MENOR DE 5 AÑOS </div>
            </div>
            <div class="c xa y29 w8 h9">
                <div class="t m0 x6 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_mal_pronostico_cinco_anos']->muerte_de_algun_menor_de_5_anos)}}</div>
            </div>
            <div class="c x1 y2a w4 hd">
                <div class="t m0 x6 h7 y2b ff2 fs4 fc0 sc0 ls0 ws0">MENOR DE 2 MESES </div>
            </div>
            <div class="c x4 y2a w5 hd">
                <div class="t m0 x6 h7 y2b ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_mal_pronostico_cinco_anos']->menor_de_2_meses)}}</div>
            </div>
            <div class="c x7 y2a w10 hd">
                <div class="t m0 x6 h7 y2b ff2 fs4 fc0 sc0 ls0 ws0">DIFICULTAD PARA EL TRANSLADO </div>
            </div>
            <div class="c xa y2a w8 hd">
                <div class="t m0 x6 h7 y2b ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_mal_pronostico_cinco_anos']->dificultad_para_el_traslado)}}</div>
            </div>
            <div class="c x1 y2c w4 hb">
                <div class="t m0 x6 h7 y2d ff2 fs4 fc0 sc0 ls0 ws0">( 1 AÑO CON BAJO PESO AL NACER </div>
            </div>
            <div class="c x4 y2c w5 hb">
                <div class="t m0 x6 h7 y2d ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_mal_pronostico_cinco_anos']->menor_del_ano_con_bajo_peso_al_nacer)}}</div>
            </div>
            <div class="c x7 y2c w10 hb">
                <div class="t m0 x6 h7 y2d ff2 fs4 fc0 sc0 ls0 ws0">DESNUTRICIÓN MODERADA O GRAVE </div>
            </div>
            <div class="c xa y2c w8 hb">
                <div class="t m0 x6 h7 y2d ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_mal_pronostico_cinco_anos']->desnutricion_moderada_o_grave)}}</div>
            </div>
            <div class="c x1 y2e w2 h9">
                <div class="t m0 x6 h6 ya ff1 fs3 fc0 sc0 ls0 ws0">IV. ANTECEDENTES</div>
            </div>
            <div class="c x1 y2f w4 ha">
                <div class="t m0 x6 h4 y30 ff1 fs1 fc0 sc0 ls0 ws0">A) HEREDO-FAMILIARES </div>
            </div>
            <div class="c x4 y2f w11 ha">
                <div class="t m0 x19 h4 y30 ff1 fs1 fc0 sc0 ls0 ws0">D) PERINATALES </div>
            </div>
            <div class="c x1 y31 w6 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">CONSANGUINIDAD</div>
            </div>
            <div class="c xc y31 w6 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_antecedentes_familiares']->consaguinidad)}}</div>
            </div>
            <div class="c x4 y31 w5 h2">
                <div class="t m0 x6 h5 y7 ff1 fs2 fc0 sc0 ls0 ws0">1. EMBARAZO </div>
            </div>
            <div class="c x7 y31 wa h2">
                <div class="t m0 x6 h5 y7 ff1 fs2 fc0 sc0 ls0 ws0">3. PERIODO NEONATAL </div>
            </div>
            <div class="c x9 y31 w12 h2">
                <div class="t m0 x6 h7 y11 ff1 fs4 fc0 sc0 ls0 ws0">5. DESARROLLO SOMÁTICO Y FUNCIONAL (EDAD)</div>
            </div>
            <div class="c x1 y32 w6 h2">
                <div class="t m0 xf h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">DIABETES</div>
            </div>
            <div class="c xc y32 w6 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_antecedentes_familiares']->diabetes	)}}</div>
            </div>
            <div class="c x4 y32 w6 h2">
                <div class="t m0 x1b h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">ASIST. PRENATAL </div>
            </div>
            <div class="c xb y32 w9 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hcp_an_perinatales_embarazos']->asistencia_prenatal}}</div>
            </div>
            <div class="c x7 y32 w6 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">RESP. ESPONTÁNEA </div>
            </div>
            <div class="c x8 y32 w7 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_an_pe_periodo_neonatales']->resp_espontanea)}}</div>
            </div>
            <div class="c x9 y32 w8 h2">
                <div class="t m0 x10 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">SOSTUVO LA CABEZA</div>
            </div>
            <div class="c xd y32 w6 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hcp_an_pe_desarrollo_somaticos']->sostuvo_la_cabeza}}</div>
            </div>
            <div class="c xe y32 w6 h2">
                <div class="t m0 x6 h6 ya ff2 fs3 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c x1 y33 w6 h2">
                <div class="t m0 x13 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">HIPERTENSIÓN</div>
            </div>
            <div class="c xc y33 w6 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_antecedentes_familiares']->hipertension)}}</div>
            </div>
            <div class="c x4 y33 w6 h2">
                <div class="t m0 x12 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">ANORMALIDAD </div>
            </div>
            <div class="c xb y33 w9 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_an_perinatales_embarazos']->anormalidad)}}</div>
            </div>
            <div class="c x7 y33 w6 h2">
                <div class="t m0 xf h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">ICTERICIA</div>
            </div>
            <div class="c x8 y33 w7 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_an_pe_periodo_neonatales']->ictericia)}}</div>
            </div>
            <div class="c x9 y33 w8 h2">
                <div class="t m0 x1c h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">SE SENTÓ </div>
            </div>
            <div class="c xd y33 w6 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hcp_an_pe_desarrollo_somaticos']->se_sento}}</div>
            </div>
            <div class="c xe y33 w6 h2">
                <div class="t m0 x6 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c x1 y34 w6 ha">
                <div class="t m0 xf h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">ALERGIAS</div>
            </div>
            <div class="c xc y34 w6 ha">
                <div class="t m0 x1a h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_antecedentes_familiares']->alergias)}}</div>
            </div>
            <div class="c x4 y34 w6 ha">
                <div class="t m0 x1d h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">DURACIÓN </div>
            </div>
            <div class="c xb y34 w9 ha">
                <div class="t m0 x1a h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hcp_an_perinatales_embarazos']->duracion}}</div>
            </div>
            <div class="c x7 y34 w6 ha">
                <div class="t m0 x12 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">TRAUMATISMO</div>
            </div>
            <div class="c x8 y34 w7 ha">
                <div class="t m0 x1a h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_an_pe_periodo_neonatales']->traumatismo)}}</div>
            </div>
            <div class="c x9 y34 w8 ha">
                <div class="t m0 x1e h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">PRIMEROS PASOS </div>
            </div>
            <div class="c xd y34 w6 ha">
                <div class="t m0 x1a h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hcp_an_pe_desarrollo_somaticos']->primeros_pasos}}</div>
            </div>
            <div class="c xe y34 w6 ha">
                <div class="t m0 x6 h6 y1a ff2 fs3 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c x1 y35 w6 h9">
                <div class="t m0 x12 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">TOXICOMONIAS</div>
            </div>
            <div class="c xc y35 w6 h9">
                <div class="t m0 x1a h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_antecedentes_familiares']->toxicomonias)}}</div>
            </div>
            <div class="c x4 y35 w5 h9">
                <div class="t m0 x6 h5 y36 ff1 fs2 fc0 sc0 ls0 ws0">2. PARTO Y PUERPERIO </div>
            </div>
            <div class="c x7 y35 w6 h9">
                <div class="t m0 x1f h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">FIEBRE</div>
            </div>
            <div class="c x8 y35 w7 h9">
                <div class="t m0 x1a h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_an_pe_periodo_neonatales']->fiebre)}}</div>
            </div>
            <div class="c x9 y35 w8 h9">
                <div class="t m0 x1f h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">PRIMERAS PALABRAS </div>
            </div>
            <div class="c xd y35 w6 h9">
                <div class="t m0 x1a h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hcp_an_pe_desarrollo_somaticos']->primeras_palabras}}</div>
            </div>
            <div class="c xe y35 w6 h9">
                <div class="t m0 x6 h6 ya ff2 fs3 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c x1 y37 w4 ha">
                <div class="t m0 x6 h4 y30 ff1 fs1 fc0 sc0 ls0 ws0">B) COLATERALES </div>
            </div>
            <div class="c x4 y37 w6 ha">
                <div class="t m0 x11 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">ATENCIÓN</div>
            </div>
            <div class="c xb y37 w9 ha">
                <div class="t m0 x1a h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_an_pe_partos']->atencion)}}</div>
            </div>
            <div class="c x7 y37 w6 ha">
                <div class="t m0 x15 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">OMBLIGO</div>
            </div>
            <div class="c x8 y37 w7 ha">
                <div class="t m0 x1a h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hcp_an_pe_periodo_neonatales']->ombligo}}</div>
            </div>
            <div class="c x9 y37 w8 ha">
                <div class="t m0 x15 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">CONTROL DE ESFÍNTERES</div>
            </div>
            <div class="c xd y37 w6 ha">
                <div class="t m0 x1a h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hcp_an_pe_desarrollo_somaticos']->control_de_esfinteres}}</div>
            </div>
            <div class="c xe y37 w6 ha">
                <div class="t m0 x6 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c x1 y38 w6 h2">
                <div class="t m0 x1f h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">SÍFILIS </div>
            </div>
            <div class="c xc y38 w6 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_an_colaterales']->sifilis)}}</div>
            </div>
            <div class="c x4 y38 w6 h2">
                <div class="t m0 x1d h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">DURACIÓN </div>
            </div>
            <div class="c xb y38 w9 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_an_pe_partos']->duracion)}}</div>
            </div>
            <div class="c x7 y38 w6 h2">
                <div class="t m0 x20 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">PIEL </div>
            </div>
            <div class="c x8 y38 w7 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hcp_an_pe_periodo_neonatales']->piel}}</div>
            </div>
            <div class="c x9 y38 w12 h2">
                <div class="t m0 x6 h5 y7 ff1 fs2 fc0 sc0 ls0 ws0">6. HÁBITOS Y ESTADOS PSÍQUICOS </div>
            </div>
            <div class="c x1 y39 w6 h2">
                <div class="t m0 x12 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">TUBERCULOSIS </div>
            </div>
            <div class="c xc y39 w6 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_an_colaterales']->tuberculosis)}}</div>
            </div>
            <div class="c x4 y39 w6 h2">
                <div class="t m0 x21 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">A TÉRMINO </div>
            </div>
            <div class="c xb y39 w9 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_an_pe_partos']->a_termino)}}</div>
            </div>
            <div class="c x7 y39 w6 h2">
                <div class="t m0 x12 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">CONVULSIONES</div>
            </div>
            <div class="c x8 y39 w7 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_an_pe_periodo_neonatales']->convulsiones)}}</div>
            </div>
            <div class="c x9 y39 w8 h2">
                <div class="t m0 x1f h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">HORAS QUE DUERME </div>
            </div>
            <div class="c xd y39 w6 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hcp_an_pe_habitos']->horas_que_duerme}}</div>
            </div>
            <div class="c xe y39 w6 h2">
                <div class="t m0 x6 h6 ya ff2 fs3 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c x1 y3a w6 h2">
                <div class="t m0 x0 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">GRUPO Y RH </div>
            </div>
            <div class="c xc y3a w6 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hcp_an_colaterales']->grupo_y_rh}}</div>
            </div>
            <div class="c x4 y3a w6 h2">
                <div class="t m0 x5 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">APGAR </div>
            </div>
            <div class="c xb y3a w9 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hcp_an_pe_partos']->apgar}}</div>
            </div>
            <div class="c x7 y3a w6 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">MALFORMACIONES </div>
            </div>
            <div class="c x8 y3a w7 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_an_pe_periodo_neonatales']->malformaciones)}}</div>
            </div>
            <div class="c x9 y3a w8 h2">
                <div class="t m0 x22 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">ENEURESIS</div>
            </div>
            <div class="c xd y3a w6 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_an_pe_habitos']->eneuresis)}}</div>
            </div>
            <div class="c xe y3a w6 h2">
                <div class="t m0 x6 h6 ya ff2 fs3 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c x1 y3b w6 h2">
                <div class="t m0 x12 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">No. EMBARAZO</div>
            </div>
            <div class="c xc y3b w6 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hcp_an_colaterales']->numero_de_embarazo}}</div>
            </div>
            <div class="c x4 y3b w6 h2">
                <div class="t m0 x11 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">MÚLTIPLE </div>
            </div>
            <div class="c xb y3b w9 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_an_pe_partos']->multiple)}}</div>
            </div>
            <div class="c x7 y3b w6 h2">
                <div class="t m0 x12 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">PESO AL NACER</div>
            </div>
            <div class="c x8 y3b w7 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hcp_an_pe_periodo_neonatales']->peso_al_nacer}}</div>
            </div>
            <div class="c x9 y3b w8 h2">
                <div class="t m0 x1c h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">GEOFAGIA</div>
            </div>
            <div class="c xd y3b w6 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hcp_an_pe_habitos']->geofagia}}</div>
            </div>
            <div class="c xe y3b w6 h2">
                <div class="t m0 x6 h6 ya ff2 fs3 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c x1 y3c w6 ha">
                <div class="t m0 x23 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">ABORTO </div>
            </div>
            <div class="c xc y3c w6 ha">
                <div class="t m0 x1a h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hcp_an_colaterales']->abortos}}</div>
            </div>
            <div class="c x4 y3c w6 ha">
                <div class="t m0 x24 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">ESPONTÁNEO</div>
            </div>
            <div class="c xb y3c w9 ha">
                <div class="t m0 x1a h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_an_pe_partos']->espontaneo)}}</div>
            </div>
            <div class="c x7 y3c w6 ha">
                <div class="t m0 x25 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">TALLA AL NACER</div>
            </div>
            <div class="c x8 y3c w7 ha">
                <div class="t m0 x1a h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hcp_an_pe_periodo_neonatales']->talla_al_nacer}}</div>
            </div>
            <div class="c x9 y3c w8 ha">
                <div class="t m0 x23 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">TEMORES NOCTURNOS </div>
            </div>
            <div class="c xd y3c w6 ha">
                <div class="t m0 x1a h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_an_pe_habitos']->temores_nocturnos)}}</div>
            </div>
            <div class="c xe y3c w6 ha">
                <div class="t m0 x6 h6 ya ff2 fs3 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c x1 y3d w6 h2">
                <div class="t m0 x13 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">PREMATUROS </div>
            </div>
            <div class="c xc y3d w6 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_an_colaterales']->prematuro)}}</div>
            </div>
            <div class="c x4 y3d w6 h2">
                <div class="t m0 xf h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">CESÁREA </div>
            </div>
            <div class="c xb y3d w9 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_an_pe_partos']->cesarea)}}</div>
            </div>
            <div class="c x7 y3d wa h2">
                <div class="t m0 x6 h5 y7 ff1 fs2 fc0 sc0 ls0 ws0">4. ALIMENTACIÓN </div>
            </div>
            <div class="c x9 y3d w8 h2">
                <div class="t m0 x26 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">DUERME SOLO </div>
            </div>
            <div class="c xd y3d w6 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_an_pe_habitos']->duerme_solo)}}</div>
            </div>
            <div class="c xe y3d w6 h2">
                <div class="t m0 x6 h6 ya ff2 fs3 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c x1 y3e w6 ha">
                <div class="t m0 x21 h7 y1e ff2 fs4 fc0 sc0 ls0 ws0">A TÉRMINO </div>
            </div>
            <div class="c xc y3e w6 ha">
                <div class="t m0 x1a h7 y1e ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_an_colaterales']->a_termino)}}</div>
            </div>
            <div class="c x4 y3e w6 ha">
                <div class="t m0 x21 h7 y1e ff2 fs4 fc0 sc0 ls0 ws0">PUERPERIO </div>
            </div>
            <div class="c xb y3e w9 ha">
                <div class="t m0 x1a h7 y1e ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hcp_an_pe_partos']->puerperio}}</div>
            </div>
            <div class="c x7 y3e w6 ha">
                <div class="t m0 x6 he y3f ff2 fs6 fc0 sc0 ls0 ws0">LACTANCIA MATERNA</div>
            </div>
            <div class="c x8 y3e w7 ha">
                <div class="t m0 x1a h7 y1e ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_an_pe_alimentaciones']->lactancia_materna)}}</div>
            </div>
            <div class="c x9 y3e w8 ha">
                <div class="t m0 x20 h7 y1e ff2 fs4 fc0 sc0 ls0 ws0">SE CHUPA EL DEDO </div>
            </div>
            <div class="c xd y3e w6 ha">
                <div class="t m0 x1a h7 y1e ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_an_pe_habitos']->se_chupa_el_dedo)}}</div>
            </div>
            <div class="c xe y3e w6 ha">
                <div class="t m0 x6 h6 y1a ff2 fs3 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c x1 y40 wb h9">
                <div class="t m0 x6 h4 y30 ff1 fs1 fc0 sc0 ls0 ws0">C) PERSONALES PATOLÓGICOS </div>
            </div>
            <div class="c x7 y40 w6 h9">
                <div class="t m0 x1a he y41 ff2 fs6 fc0 sc0 ls0 ws0">LACTANCIA ARTIFICIAL</div>
            </div>
            <div class="c x8 y40 w7 h9">
                <div class="t m0 x1a h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_an_pe_alimentaciones']->lactancia_artificial)}}</div>
            </div>
            <div class="c x9 y40 w8 h9">
                <div class="t m0 x1f h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">INTERACCIÓN SOCIAL </div>
            </div>
            <div class="c xd y40 w6 h9">
                <div class="t m0 x1a h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_an_pe_habitos']->interaccion_social)}}</div>
            </div>
            <div class="c xe y40 w6 h9">
                <div class="t m0 x6 h6 ya ff2 fs3 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c x1 y42 wc hf">
                <div class="t m0 x6 h7 y43 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hcp_an_personales_patologicos']->descripcion}}</div>
            </div>
            <div class="c x7 y44 w6 ha">
                <div class="t m0 x0 he y3f ff2 fs6 fc0 sc0 ls0 ws0">ABLACTACIÓN </div>
            </div>
            <div class="c x8 y44 w7 ha">
                <div class="t m0 x1a h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hcp_an_pe_alimentaciones']->ablactacion}}</div>
            </div>
            <div class="c x9 y44 w8 ha">
                <div class="t m0 x26 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">SE BAÑA SOLO </div>
            </div>
            <div class="c xd y44 w6 ha">
                <div class="t m0 x1a h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hcp_an_pe_habitos']->se_bana_solo)}}</div>
            </div>
            <div class="c xe y44 w6 ha">
                <div class="t m0 x6 h6 y1a ff2 fs3 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c x7 y45 w6 h9">
                <div class="t m0 x27 he y41 ff2 fs6 fc0 sc0 ls0 ws0">EDAD DEL DESTETE </div>
            </div>
            <div class="c x8 y45 w7 h9">
                <div class="t m0 x1a h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hcp_an_pe_alimentaciones']->edad_del_destete}}</div>
            </div>
            <div class="c x9 y45 w12 h9">
                <div class="t m0 x6 h5 y36 ff1 fs2 fc0 sc0 ls0 ws0">7. RESULTADO DE TAMIZ NEONATAL</div>
            </div>
            <div class="c xe y45 w6 h9">
                <div class="t m0 x6 h6 ya ff2 fs3 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c x7 y42 w6 h2">
                <div class="t m0 x1a he y46 ff2 fs6 fc0 sc0 ls0 ws0">ALIMENTACIÓN ACTUAL </div>
            </div>
            <div class="c x8 y42 w7 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hcp_an_pe_alimentaciones']->alimentacion_actual}}</div>
            </div>
            <div class="c x9 y42 w12 h2">
                <div class="t m0 x6 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hcp_an_pe_tamiz_neonatales']->descripcion}}</div>
            </div>
            <div class="c xe y42 w6 h2">
                <div class="t m0 x6 h6 ya ff2 fs3 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c x1 y47 w2 h2">
                <div class="t m0 x6 h6 ya ff1 fs3 fc0 sc0 ls0 ws0">V. INMUNIZACIONES (FECHAS)</div>
            </div>
            <div class="c x1 y48 w6 ha">
                <div class="t m0 x1d h7 y20 ff1 fs4 fc0 sc0 ls0 ws0">BCG </div>
            </div>
            <div class="c xc y48 w6 ha">
                <div class="t m0 x21 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">(AL NACER) </div>
            </div>
            @php
                $inmunizaciones = json_decode($d['hcp_an_inmunizaciones']->inmunizaciones);
            @endphp
            <div class="c x4 y48 w6 ha">
                <div class="t m0 x1a h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{IfValue($inmunizaciones->bcg->nacer)}}</div>
            </div>
            <div class="c xb y48 w9 ha">
                <div class="t m0 x13 h7 y20 ff1 fs4 fc0 sc0 ls0 ws0">DPT </div>
            </div>
            <div class="c x7 y48 w6 ha">
                <div class="t m0 x23 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">(4 AÑOS)</div>
            </div>
            <div class="c x8 y48 w7 ha">
                <div class="t m0 x1a h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{IfValue($inmunizaciones->dpt->cuarta)}}</div>
            </div>
            <div class="c x9 y49 w6 h10">
                <div class="t m0 x28 h7 y4a ff1 fs4 fc0 sc0 ls0 ws0">INFLUENZA </div>
            </div>
            <div class="c xa y48 wd ha">
                <div class="t m0 x13 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">(6 MESES)</div>
            </div>
            <div class="c xd y48 w6 ha">
                <div class="t m0 x1a h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{IfValue($inmunizaciones->influenza->sexta)}}</div>
            </div>
            <div class="c xe y48 w6 ha">
                <div class="t m0 x6 h6 ya ff2 fs3 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c x1 y4b w6 h11">
                <div class="t m0 x12 h7 y4c ff1 fs4 fc0 sc0 ls0 ws0">HEPATITIS B </div>
            </div>
            <div class="c xc y4d w6 h2">
                <div class="t m0 x21 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">(AL NACER) </div>
            </div>
            <div class="c x4 y4d w6 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{IfValue($inmunizaciones->hepatitis_b->nacer)}}</div>
            </div>
            <div class="c xb y4b w9 h11">
                <div class="t m0 x6 h7 y4c ff1 fs4 fc0 sc0 ls0 ws0">ROTAVIRUS </div>
            </div>
            <div class="c x7 y4d w6 h2">
                <div class="t m0 x15 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">(2 MESES)</div>
            </div>
            <div class="c x8 y4d w7 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{IfValue($inmunizaciones->rotavirus->segunda)}}</div>
            </div>
            <div class="c xa y4d wd h2">
                <div class="t m0 x13 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">(7 MESES)</div>
            </div>
            <div class="c xd y4d w6 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{IfValue($inmunizaciones->influenza->septima)}}</div>
            </div>
            <div class="c xe y4d w6 h2">
                <div class="t m0 x6 h6 ya ff2 fs3 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c xc y49 w6 h12">
                <div class="t m0 x15 h7 y4e ff2 fs4 fc0 sc0 ls0 ws0">(2 MESES)</div>
            </div>
            <div class="c x4 y49 w6 h12">
                <div class="t m0 x1a h7 y4e ff2 fs4 fc0 sc0 ls0 ws0">{{IfValue($inmunizaciones->hepatitis_b->segunda)}}</div>
            </div>
            <div class="c x7 y49 w6 h12">
                <div class="t m0 x15 h7 y4e ff2 fs4 fc0 sc0 ls0 ws0">(4 MESES)</div>
            </div>
            <div class="c x8 y49 w7 h12">
                <div class="t m0 x1a h7 y4e ff2 fs4 fc0 sc0 ls0 ws0">{{IfValue($inmunizaciones->rotavirus->cuarta)}}</div>
            </div>
            <div class="c xa y49 wd h12">
                <div class="t m0 x1d h7 y4e ff2 fs4 fc0 sc0 ls0 ws0">ANUAL</div>
            </div>
            <div class="c xd y49 w6 h12">
                <div class="t m0 x1a h7 y4e ff2 fs4 fc0 sc0 ls0 ws0">{{IfValue($inmunizaciones->influenza->doceaba)}}</div>
            </div>
            <div class="c xe y49 w6 h12">
                <div class="t m0 x6 h6 ya ff2 fs3 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c xc y4f w6 ha">
                <div class="t m0 x15 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">(6 MESES)</div>
            </div>
            <div class="c x4 y4f w6 ha">
                <div class="t m0 x1a h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{IfValue($inmunizaciones->hepatitis_b->sexta)}}</div>
            </div>
            <div class="c x7 y4f w6 ha">
                <div class="t m0 x15 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">(6 MESES)</div>
            </div>
            <div class="c x8 y4f w7 ha">
                <div class="t m0 x1a h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{IfValue($inmunizaciones->rotavirus->sexta)}}</div>
            </div>
            <div class="c x9 y50 w6 h13">
                <div class="t m0 x18 h7 y51 ff1 fs4 fc0 sc0 ls0 ws0">SRP</div>
            </div>
            <div class="c xa y4f wd ha">
                <div class="t m0 x12 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">(12 MESES)</div>
            </div>
            <div class="c xd y4f w6 ha">
                <div class="t m0 x1a h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{IfValue($inmunizaciones->srp->doceaba)}}</div>
            </div>
            <div class="c xe y4f w6 ha">
                <div class="t m0 x6 h6 y1a ff2 fs3 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c x1 y52 w6 h14">
                <div class="t m0 x27 h7 y53 ff1 fs4 fc0 sc0 ls0 ws0">PENTAVALENTE</div>
                <div class="t m0 x13 h7 y54 ff1 fs4 fc0 sc0 ls0 ws0">ACELULAR</div>
            </div>
            <div class="c xc y50 w6 h9">
                <div class="t m0 x15 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">(2 MESES)</div>
            </div>
            <div class="c x4 y50 w6 h9">
                <div class="t m0 x1a h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{IfValue($inmunizaciones->pentavalente_acelular->segunda)}}</div>
            </div>
            <div class="c xb y55 w9 h15">
                <div class="t m0 x1a h16 y56 ff1 fs7 fc0 sc0 ls0 ws0">NEUMOCOCO</div>
            </div>
            <div class="c x7 y50 w6 h9">
                <div class="t m0 x15 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">(2 MESES)</div>
            </div>
            <div class="c x8 y50 w7 h9">
                <div class="t m0 x1a h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{IfValue($inmunizaciones->neumococo->segunda)}}</div>
            </div>
            <div class="c xa y50 wd h9">
                <div class="t m0 x24 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">(6 AÑOS)</div>
            </div>
            <div class="c xd y50 w6 h9">
                <div class="t m0 x1a h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{IfValue($inmunizaciones->srp->anual)}}</div>
            </div>
            <div class="c xe y50 w6 h9">
                <div class="t m0 x6 h6 ya ff2 fs3 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c xc y57 w6 ha">
                <div class="t m0 x15 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">(4 MESES)</div>
            </div>
            <div class="c x4 y57 w6 ha">
                <div class="t m0 x1a h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{IfValue($inmunizaciones->pentavalente_acelular->cuarta)}}</div>
            </div>
            <div class="c x7 y57 w6 ha">
                <div class="t m0 x15 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">(4 MESES)</div>
            </div>
            <div class="c x8 y57 w7 ha">
                <div class="t m0 x1a h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{IfValue($inmunizaciones->neumococo->segunda)}}</div>
            </div>
            <div class="c x9 y57 w6 ha">
                <div class="t m0 x21 h7 y20 ff1 fs4 fc0 sc0 ls0 ws0">SABIN</div>
            </div>
            <div class="c xa y57 w8 ha">
                <div class="t m0 x1a h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">{{IfValue($inmunizaciones->sabin->custom)}}</div>
            </div>
            <div class="c xe y57 w6 ha">
                <div class="t m0 x6 h6 y1a ff2 fs3 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c xc y58 w6 h2">
                <div class="t m0 x15 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">(6 MESES)</div>
            </div>
            <div class="c x4 y58 w6 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{IfValue($inmunizaciones->pentavalente_acelular->sexta)}}</div>
            </div>
            <div class="c x7 y58 w6 h2">
                <div class="t m0 x1d h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">(12 MESES)</div>
            </div>
            <div class="c x8 y58 w7 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{IfValue($inmunizaciones->neumococo->segunda)}}</div>
            </div>
            <div class="c x9 y58 w6 h2">
                <div class="t m0 x17 h7 y11 ff1 fs4 fc0 sc0 ls0 ws0">VARICELA</div>
            </div>
            <div class="c xa y58 w8 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{IfValue($inmunizaciones->varicela->custom)}}</div>
            </div>
            <div class="c xe y58 w6 h2">
                <div class="t m0 x6 h6 ya ff2 fs3 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c xc y59 w6 h2">
                <div class="t m0 x1d h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">(18 MESES)</div>
            </div>
            <div class="c x4 y59 w6 h2">
                <div class="t m0 x1a h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{IfValue($inmunizaciones->pentavalente_acelular->octaba)}}</div>
            </div>
            <div class="c xb y59 w9 h2">
                <div class="t m0 x28 h16 y5a ff1 fs7 fc0 sc0 ls0 ws0">OTRAS</div>
            </div>
            <div class="c x7 y59 w13 h2">
                <div class="t m0 x6 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">{{IfValue($d['hcp_an_inmunizaciones']->otras)}}</div>
            </div>
            <div class="c x1 y5b w2 ha">
                <div class="t m0 x6 h6 y5c ff1 fs3 fc0 sc0 ls0 ws0">V. MOTIVO DE CONSULTA</div>
            </div>
            <div class="c x1 y5d w2 h17">
                <div class="t m0 x6 h5 y5e ff2 fs2 fc0 sc0 ls0 ws0">{{$d['hc_motivo_padecimientos']->motivo_de_consulta}}</div>
            </div>
            <div class="c x1 y5f w2 ha">
                <div class="t m0 x6 h6 y5c ff1 fs3 fc0 sc0 ls0 ws0">VI. PADECIMIENTO ACTUAL</div>
            </div>
            <div class="c x1 y60 w2 h18">
                <div class="t m0 x6 h5 y61 ff2 fs2 fc0 sc0 ls0 ws0">{{$d['hc_motivo_padecimientos']->padecimiento_actual}}</div>
                <div class="t m0 x6 h5 y62 ff2 fs2 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c x1 y63 w2 h9">
                <div class="t m0 x6 h6 y64 ff1 fs3 fc0 sc0 ls0 ws0">VII. INTERROGATORIO POR APARATOS Y SISTEMAS (FUNCIONAMIENTO/SÍNTOMAS)</div>
            </div>
            <div class="c x1 y65 w6 ha">
                <div class="t m0 x6 h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">OFTÁLMICO:</div>
            </div>
            <div class="c xc y65 w4 ha">
                <div class="t m0 x1a h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->oftalmico}}</div>
            </div>
            <div class="c xb y65 w9 ha">
                <div class="t m0 x1a h8 y15 ff2 fs5 fc0 sc0 ls0 ws0">CARDIOVASCULAR: </div>
            </div>
            <div class="c x7 y65 wa ha">
                <div class="t m0 x1a h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->cardiovascular}}</div>
            </div>
            <div class="c x9 y65 w6 ha">
                <div class="t m0 x1a h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">OTORRINOLARINGOLÓGICO</div>
            </div>
            <div class="c xa y65 w8 ha">
                <div class="t m0 x1a h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->otorrinolaringologico}}</div>
            </div>
            <div class="c x1 y66 w6 h2">
                <div class="t m0 x6 h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">RESPIRATORIO: </div>
            </div>
            <div class="c xc y66 w4 h2">
                <div class="t m0 x1a h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->respiratorio}}</div>
            </div>
            <div class="c xb y66 w9 h2">
                <div class="t m0 x1a h8 y15 ff2 fs5 fc0 sc0 ls0 ws0">GASTROINTESTINAL</div>
            </div>
            <div class="c x7 y66 wa h2">
                <div class="t m0 x1a h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->gastrointestinal}}</div>
            </div>
            <div class="c x9 y66 w6 h2">
                <div class="t m0 x1a h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">MÚSCULO-ESQUELÉTICO:</div>
            </div>
            <div class="c xa y66 w8 h2">
                <div class="t m0 x1a h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->musculo_esqueletico}}</div>
            </div>
            <div class="c x1 y67 w6 h2">
                <div class="t m0 x6 h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">NERVIOSO:</div>
            </div>
            <div class="c xc y67 w4 h2">
                <div class="t m0 x1a h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->nervioso}}</div>
            </div>
            <div class="c xb y67 w9 h2">
                <div class="t m0 x1a h8 y15 ff2 fs5 fc0 sc0 ls0 ws0">GENITO-URINARIO</div>
            </div>
            <div class="c x7 y67 wa h2">
                <div class="t m0 x1a h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->genito_urinario}}</div>
            </div>
            <div class="c x9 y67 w6 h2">
                <div class="t m0 x1a h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">INFECTO-CONTAGIOSO:</div>
            </div>
            <div class="c xa y67 w8 h2">
                <div class="t m0 x1a h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->infecto_contagioso}}</div>
            </div>
            <div class="c x1 y68 w6 ha">
                <div class="t m0 x6 h7 y69 ff2 fs4 fc0 sc0 ls0 ws0">ENDOCRINO:</div>
            </div>
            <div class="c xc y68 w4 ha">
                <div class="t m0 x1a h7 y69 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->endocrino}}</div>
            </div>
            <div class="c xb y68 w9 ha">
                <div class="t m0 x6 h8 y6a ff2 fs5 fc0 sc0 ls0 ws0">HEMATOLÓGICO:</div>
            </div>
            <div class="c x7 y68 w6 ha">
                <div class="t m0 x1a h7 y69 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->hematologico}}</div>
            </div>
            <div class="c x8 y68 w7 ha">
                <div class="t m0 x6 h7 y69 ff2 fs4 fc0 sc0 ls0 ws0">OTROS:</div>
            </div>
            <div class="c x9 y68 w12 ha">
                <div class="t m0 x6 h7 y69 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hc_interrogatorio_por_sistemas']->otros}}</div>
            </div>
            <div class="c x1 y6b w14 h2">
                <div class="t m0 x6 h6 ya ff1 fs3 fc0 sc0 ls0 ws0">VIII.EXPLORACIÓN FÍSICA</div>
            </div>
            <div class="c xa y6b wd h2">
                <div class="t m0 x1a h7 y11 ff1 fs4 fc0 sc0 ls0 ws0">FC: {{$d['hc_exploraciones_fisicas']->fc}}</div>
            </div>
            <div class="c xd y6b w6 h2">
                <div class="t m0 x1a h7 y11 ff1 fs4 fc0 sc0 ls0 ws0">FR: {{$d['hc_exploraciones_fisicas']->fr}}</div>
            </div>
            <div class="c xe y6b w6 h2">
                <div class="t m0 x6 h6 ya ff2 fs3 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c x1 y6c w6 h2">
                <div class="t m0 x1a h7 y11 ff1 fs4 fc0 sc0 ls0 ws0">PESO: {{$d['hc_exploraciones_fisicas']->peso}}</div>
            </div>
            <div class="c xc y6c w6 h2">
                <div class="t m0 x1a h7 y11 ff1 fs4 fc0 sc0 ls0 ws0">TALLA: {{$d['hc_exploraciones_fisicas']->talla}}</div>
            </div>
            <div class="c x4 y6c w6 h2">
                <div class="t m0 x1a h7 y11 ff1 fs4 fc0 sc0 ls0 ws0">IMC: {{$d['hc_exploraciones_fisicas']->imc}}</div>
            </div>
            <div class="c xb y6c w9 h2">
                <div class="t m0 x6 h7 y11 ff1 fs4 fc0 sc0 ls0 ws0">PC:</div>
            </div>
            <div class="c x7 y6c w6 h2">
                <div class="t m0 x6 h7 y11 ff1 fs4 fc0 sc0 ls0 ws0">PT:</div>
            </div>
            <div class="c x8 y6c w7 h2">
                <div class="t m0 x6 h7 y11 ff1 fs4 fc0 sc0 ls0 ws0">PA:</div>
            </div>
            <div class="c x9 y6c w6 h2">
                <div class="t m0 x1a h7 y11 ff1 fs4 fc0 sc0 ls0 ws0">PULSO: {{$d['hc_exploraciones_fisicas']->pulso}}</div>
            </div>
            <div class="c xa y6c wd h2">
                <div class="t m0 x1a h7 y11 ff1 fs4 fc0 sc0 ls0 ws0">TA: {{$d['hc_exploraciones_fisicas']->ta}}</div>
            </div>
            <div class="c xd y6c w6 h2">
                <div class="t m0 x1a h7 y11 ff1 fs4 fc0 sc0 ls0 ws0">TEMP: {{$d['hc_exploraciones_fisicas']->temperatura}}</div>
            </div>
            <div class="c xe y6c w6 h2">
                <div class="t m0 x6 h7 y11 ff1 fs4 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c x1 y6d w4 h19">
                <div class="t m0 x1d h4 y6e ff1 fs1 fc0 sc0 ls0 ws0">HABITUS EXTERIOR</div>
            </div>
            <div class="c x4 y6f w6 h2">
                <div class="t m0 x0 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">ORIENTADO:</div>
            </div>
            <div class="c xb y6f w9 h2">
                <div class="t m0 x1a h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hc_habitus_exteriors']->orientado)}}</div>
            </div>
            <div class="c x7 y6f w6 h2">
                <div class="t m0 x18 h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">LENGUAJE:</div>
            </div>
            <div class="c x8 y6f w7 h2">
                <div class="t m0 x1a h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->lenguaje}}</div>
            </div>
            <div class="c x9 y6f w6 h2">
                <div class="t m0 xf h7 y11 ff2 fs4 fc0 sc0 ls0 ws0">MARCHA:</div>
            </div>
            <div class="c xa y6f w8 h2">
                <div class="t m0 x1a h7 y10 ff2 fs4 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->marcha}}</div>
            </div>
            <div class="c x4 y6d w6 ha">
                <div class="t m0 x1b he y41 ff2 fs6 fc0 sc0 ls0 ws0">APOYO FUNCIONAL:</div>
            </div>
            <div class="c xb y6d w9 ha">
                <div class="t m0 x1a h7 y69 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hc_habitus_exteriors']->apoyo_funcional)}}</div>
            </div>
            <div class="c x7 y6d w6 ha">
                <div class="t m0 x28 h7 y20 ff2 fs4 fc0 sc0 ls0 ws0">COOPERADOR:</div>
            </div>
            <div class="c x8 y6d w7 ha">
                <div class="t m0 x1a h7 y69 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hc_habitus_exteriors']->cooperador)}}</div>
            </div>
            <div class="c x9 y6d w6 ha">
                <div class="t m0 x6 he y41 ff2 fs6 fc0 sc0 ls0 ws0">HIGIENE ADECUADA: </div>
            </div>
            <div class="c xa y6d w8 ha">
                <div class="t m0 x1a h7 y69 ff2 fs4 fc0 sc0 ls0 ws0">{{ifElse($d['hc_habitus_exteriors']->higiene_adecuada)}}</div>
            </div>
            <div class="c x1 y70 w2 h9">
                <div class="t m0 x29 h4 y1c ff1 fs1 fc0 sc0 ls0 ws0">DESCRIPCIÓN</div>
            </div>
            <div class="c x1 y71 w6 h1a">
                <div class="t m0 x0 h7 y72 ff1 fs4 fc0 sc0 ls0 ws0">CABEZA</div>
            </div>
            <div class="c xc y71 w15 h1a">
                <div class="t m0 x6 h5 y73 ff2 fs2 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->cabeza}}</div>
            </div>
            <div class="c x1 y74 w6 h1b">
                <div class="t m0 x0 h7 y75 ff1 fs4 fc0 sc0 ls0 ws0">CUELLO</div>
            </div>
            <div class="c xc y74 w15 h1b">
                <div class="t m0 x6 h5 y76 ff2 fs2 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->cuello}}</div>
            </div>
            <div class="c x1 y77 w6 h1a">
                <div class="t m0 x0 h7 y78 ff1 fs4 fc0 sc0 ls0 ws0">TÓRAX</div>
            </div>
            <div class="c xc y77 w15 h1a">
                <div class="t m0 x6 h5 y79 ff2 fs2 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->torax}}</div>
            </div>
            <div class="c x1 y7a w6 h1a">
                <div class="t m0 x13 h7 y78 ff1 fs4 fc0 sc0 ls0 ws0">ABDOMEN</div>
            </div>
            <div class="c xc y7a w15 h1a">
                <div class="t m0 x6 h5 y79 ff2 fs2 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->abdomen}}</div>
            </div>
            <div class="c x1 y7b w6 h1a">
                <div class="t m0 x1b h7 y78 ff1 fs4 fc0 sc0 ls0 ws0">EXTREMIDADES </div>
            </div>
            <div class="c xc y7b w15 h1a">
                <div class="t m0 x6 h5 y79 ff2 fs2 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->extremidades}}</div>
            </div>
            <div class="c x1 y7c w6 h2">
                <div class="t m0 x24 h7 y7d ff1 fs4 fc0 sc0 ls0 ws0">GENITAL</div>
            </div>
            <div class="c xc y7c w15 h2">
                <div class="t m0 x6 h5 y7e ff2 fs2 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->genital}}</div>
            </div>
            <div class="c x1 y7f w6 h2">
                <div class="t m0 x25 h7 y11 ff1 fs4 fc0 sc0 ls0 ws0">NEUROLÓGICO</div>
            </div>
            <div class="c xc y7f w15 h2">
                <div class="t m0 x6 h5 y7e ff2 fs2 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->neurologico}}</div>
            </div>
            <div class="c x1 y80 w6 h1c">
                <div class="t m0 x1d h7 y7d ff1 fs4 fc0 sc0 ls0 ws0">PIEL</div>
            </div>
            <div class="c xc y80 w15 h1c">
                <div class="t m0 x6 h5 y7e ff2 fs2 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->piel}}</div>
            </div>
            <div class="c x1 y81 w6 h9">
                <div class="t m0 x0 h7 y82 ff1 fs4 fc0 sc0 ls0 ws0">OTROS</div>
            </div>
            <div class="c xc y81 w15 h9">
                <div class="t m0 x6 h5 y36 ff2 fs2 fc0 sc0 ls0 ws0">{{$d['hc_habitus_exteriors']->otros}}</div>
            </div>
            <div class="c x1 y83 w4 h9">
                <div class="t m0 x6 h1d y84 ff1 fs8 fc0 sc0 ls0 ws0">IX. ESTADO NUTRICIONAL</div>
            </div>
            <div class="c x4 y83 w6 h9">
                <div class="t m0 x1a h8 y85 ff2 fs5 fc0 sc0 ls0 ws0">NORMAL {{check($d['hcp_hca_estado_nutricionals']->tipo, 'normal',0)}}</div>
            </div>
            <div class="c xb y83 w9 h9">
                <div class="t m0 x1a h8 y85 ff2 fs5 fc0 sc0 ls0 ws0">SOBREPESO {{check($d['hcp_hca_estado_nutricionals']->tipo, 'sobrepeso',0)}}</div>
            </div>
            <div class="c x7 y83 w6 h9">
                <div class="t m0 x1a h8 y85 ff2 fs5 fc0 sc0 ls0 ws0">OBESIDAD {{check($d['hcp_hca_estado_nutricionals']->tipo, 'obesidad',0)}}</div>
            </div>
            <div class="c x8 y83 w7 h9">
                <div class="t m0 x1a h8 y85 ff2 fs5 fc0 sc0 ls0 ws0">DESN. LEVE {{check($d['hcp_hca_estado_nutricionals']->tipo, 'desnutricion leve',0)}}</div>
            </div>
            <div class="c x9 y83 w6 h9">
                <div class="t m0 x1a h8 y85 ff2 fs5 fc0 sc0 ls0 ws0">DESN. MODERADA {{check($d['hcp_hca_estado_nutricionals']->tipo, 'desnutricion moderada',0)}}</div>
            </div>
            <div class="c xa y83 wd h9">
                <div class="t m0 x1a h8 y85 ff2 fs5 fc0 sc0 ls0 ws0">DESN. GRAVE {{check($d['hcp_hca_estado_nutricionals']->tipo, 'desnutricion grave',0)}}</div>
            </div>
            <div class="c xd y83 w6 h9">
                <div class="t m0 x1a h8 y85 ff2 fs5 fc0 sc0 ls0 ws0">RECUPERADO {{check($d['hcp_hca_estado_nutricionals']->tipo, 'recuperado',0)}}</div>
            </div>
            <div class="c xe y83 w6 h9">
                <div class="t m0 x6 h6 ya ff2 fs3 fc0 sc0 ls0 ws0"> </div>
            </div>
            <div class="c x1 y86 w2 h1c">
                <div class="t m0 x6 h6 ya ff1 fs3 fc0 sc0 ls0 ws0">X. IMPRESIÓN DIAGNÓSTICA</div>
            </div>
            <div class="c x1 y87 w2 h19">
                <div class="t m0 x6 h5 y88 ff2 fs2 fc0 sc0 ls0 ws0">{{$d['hc_pronosticos']->impresión_diagnostica}}</div>
            </div>
            <div class="c x1 y89 w2 h1c">
                <div class="t m0 x6 h6 ya ff1 fs3 fc0 sc0 ls0 ws0">XI. ESTUDIOS AUXILIARES DE DIAGNÓSTICO</div>
            </div>
            <div class="c x1 y8a w2 h1e">
                <div class="t m0 x6 h5 y8b ff2 fs2 fc0 sc0 ls0 ws0">{{$d['hc_pronosticos']->estudios_auxiliares_de_diagnostico}}</div>
            </div>
            <div class="c x1 y8c w2 h2">
                <div class="t m0 x6 h6 ya ff1 fs3 fc0 sc0 ls0 ws0">XII. TERAPÉUTICA (CUADRO BÁSICO)</div>
            </div>
            <div class="c x1 y8d wb h2">
                <div class="t m0 x22 h4 y8e ff1 fs1 fc0 sc0 ls0 ws0">FÁRMACO</div>
            </div>
            <div class="c xb y8d w9 h2">
                <div class="t m0 x12 h4 y8e ff1 fs1 fc0 sc0 ls0 ws0">DOSIS</div>
            </div>
            <div class="c x7 y8d w6 h2">
                <div class="t m0 x1d h4 y8e ff1 fs1 fc0 sc0 ls0 ws0">VÍA</div>
            </div>
            <div class="c x8 y8d w16 h2">
                <div class="t m0 x2a h4 y8e ff1 fs1 fc0 sc0 ls0 ws0">PERIODICIDAD</div>
            </div>
            <div class="c x1 y8f w2 h9">
                <div class="t m0 x6 h6 y90 ff1 fs3 fc0 sc0 ls0 ws0">XIII. CUIDADOS GENERALES</div>
            </div>
            <div class="c x1 y91 w2 h1f">
                <div class="t m0 x6 h5 y92 ff2 fs2 fc0 sc0 ls0 ws0">{{$d['hc_pronosticos']->cuidados_generales}}</div>
            </div>
            <div class="c x1 y93 w4 h1c">
                <div class="t m0 x6 h6 ya ff1 fs3 fc0 sc0 ls0 ws0">XIV. PRONÓSTICO</div>
            </div>
            <div class="c x4 y93 w5 h1c">
                <div class="t m0 x1a h5 yc ff2 fs2 fc0 sc0 ls0 ws0">{{$d['hc_pronosticos']->pronostico}}</div>
            </div>
            <div class="c x7 y93 w6 h1c">
                <div class="t m0 x25 h4 y6 ff2 fs1 fc0 sc0 ls0 ws0">REFERIDO A: </div>
            </div>
            <div class="c x8 y93 w16 h1c">
                <div class="t m0 x6 h5 yc ff2 fs2 fc0 sc0 ls0 ws0">{{$d['nucleos']->nombre}}</div>
            </div>
            <div class="c x1 y94 w6 h9">
                <div class="t m0 x6 h20 y95 ff2 fs9 fc0 sc0 ls0 ws0">PRÓXIMA CITA: </div>
            </div>
            <div class="c xc y94 we h9">
                <div class="t m0 x6 h5 y36 ff2 fs2 fc0 sc0 ls0 ws0">{{$d['hc_pronosticos']->proxima_cita}}</div>
            </div>
            <div class="c x7 y96 w13 h1c">
                <div class="t m0 xf h4 y97 ff1 fs1 fc0 sc0 ls0 ws0">NOMBRE, FIRMA Y CÉDULA DEL MÉDICO(A) TRATANTE</div>
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
