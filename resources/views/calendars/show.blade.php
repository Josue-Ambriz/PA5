@extends('adminlte::page')

@section('title', 'Calendar Event')

@section('content_header')
    <h1>Event</h1>
@stop

@section('content')
  <h2>{{ $calendars->title; }}</h2>
  <p>{{ $calendars->starting; }}</p>
  <p>{{ $calendars->ending; }}</p>
@stop
