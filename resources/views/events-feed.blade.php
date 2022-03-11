@extends('adminlte::page')

@section('title', 'Events')

@section('content')
    @foreach($calendarEvents AS $event)
        {{ $event->id }}
        {{ $event->title }}
        {{ $event->starting }}
        {{ $event->ending }}
    @endforeach
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
