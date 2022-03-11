@extends('adminlte::page')

@section('title', 'Calendar')

@section('content_header')
    <h1>Create Calendar Event</h1>
@stop

@section('content')
<form method="post" action="{{ route('calendar.store') }}" >
    @csrf
    <x-adminlte-input name="title" label="Title" />
    <x-adminlte-input name="begin" type="datetime-local" label="Start" />
    <x-adminlte-input name="finish" type="datetime-local" label="Finish" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop

@section('js')
<script>
$( document ).ready(function() {
    let d = new Date();
    let dcalc = (-1)*(d.getTimezoneOffset() / 60);
    const dsign = Math.sign(dcalc) >= 0 ? "+" : "-";
    document.getElementById("hiddenoffsetinput").value = dsign + Math.abs(dcalc).toString().padStart(2, '0');
})
</script>
@stop
