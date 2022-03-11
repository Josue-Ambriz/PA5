//@extends('adminlte::page')

@section('title', 'Calendar')

@section('content_header')
    <h1>Calendar</h1>
@stop

@section('content')
  //<h2>{{ $calendar->title; }}</h2>
  <div>Starts: <x-adminlte-input name="begin" id="begin" type="datetime-local" label="Start date and time" value="" /></div>
  <div>Ends: <x-adminlte-input name="finish" id="finish" type="datetime-local" label="End date and time" value="" /></div>
//@stop

@section('js')
<script>
$( document ).ready(function() {
    var start = new Date("{{$calendar->begin;}}");
    var end = new Date("{{$calendar->finish;}}");
    let z = start.getTimezoneOffset() * 60 * 1000;
    let tStart = start-z;
    let tEnd = end-z;
    tStart = new Date(tStart);
    tEnd = new Date(tEnd);
    document.getElementById("begin").value=tStart.toISOString().slice(0, 16);
    document.getElementById("finish").value=tEnd.toISOString().slice(0, 16);
})
</script>
@stop
