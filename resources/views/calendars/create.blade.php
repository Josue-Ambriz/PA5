@extends('adminlte::page')

@section('title', 'Calendar Event')

@section('content_header')
    <h1>Add a New Event</h1>
@stop

@section('content')
<form method="post" action="{{ route('calendarz.store') }}" >
    @csrf
    <x-adminlte-input name="title" label="Title" />
    <x-adminlte-input name="starting" type="datetime-local" label="Start" />
    <x-adminlte-input name="ending" type="datetime-local" label="End" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop
