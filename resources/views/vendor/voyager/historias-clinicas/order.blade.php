@extends('voyager::master')

@section('page_title', 'Ordenar Historias Clinicas')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class=""></i> Ordenar Historias Clinicas
        </h1>
    </div>
@stop

@section('content')
    @foreach ($data_types as $item)
        <p class="{{$item->name == $lastRecord->name ? 'text-danger' : ''}}">
            {{$item->name}} - {{optional($item->details)->hc_order}}
        </p>
    @endforeach
@stop


