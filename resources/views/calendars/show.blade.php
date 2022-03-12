@extends('adminlte::page')

@section('title', 'Calendar Event')

@section('content_header')
    <h1>Event</h1>
@stop

@section('content')
  <h2>{{ $calendar->title; }}</h2>
  <p>{{ $calendar->starting; }}</p>
  <p>{{ $calendar->ending; }}</p>
@stop
