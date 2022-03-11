@extends('adminlte::page')

@section('title', 'Calendar Event')

@section('content_header')
    <h1>Add an Event</h1>
@stop

@section('content')
<form method="post" action="{{ route('calendar-events.store') }}" >
    @csrf
    <x-adminlte-input name="title" label="Title" />
    <x-adminlte-input name="start_at" type="datetime-local" label="Start" />
    <x-adminlte-input name="end_at" type="datetime-local" label="End" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop
