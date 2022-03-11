@extends('adminlte::page')

@section('title', 'Calendar')

@section('content_header')
    <h1>Create an Event</h1>
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
