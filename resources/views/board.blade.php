@extends('adminlte::page')

@section('title', 'Board')

@section('content_header')
    <h1>Board</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Backlog</th><th>Create Labels</th><th style="width: 40px">Label</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>3.</td>
          <td>Bug</td>
          <td>Feature</td>
          <td>Enchancement</td>
          <td>Documentation</td>
          <td>Examples</td>
          //<td><div class="progress progress-xs"><div class="progress-bar progress-bar-danger" style="width: 55%"></div></div></td>
          //<td><span class="badge bg-danger">55%</span></td>
        </tr>
        <tr>
          <td>2.</td>
          <td>Create Issue Template</td>
          //<td><div class="progress progress-xs"><div class="progress-bar bg-warning" style="width: 70%"></div></div></td>
          //<td><span class="badge bg-warning">70%</span></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop
