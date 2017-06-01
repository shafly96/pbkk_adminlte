@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')
    <h1>Dashboard</h1>
@stop
@section('content')
<div class="panel panel-default"><div class="panel-body">
<h4><i class="fa fa-university"></i> DAFTAR Anak Wali Dosen : {{$dsn->namadosen}}  
Jumlah Anak Wali = {{$dsn->mhsnya->count()}}</h4><hr>
@if($dsn->count())
<div class="table-responsive">
<table class="table table-bordered table-striped table-hover table-condensed tfix">
<thead align="center"><tr>
 <td><b>NRP</b></td><td><b>Nama Mhs</b></td></tr></thead>
 @foreach($dsn->mhsnya as $m)
 <tr><td>{{ $m->nrp }}</td><td>{{ $m->namamhs }}</td></tr>
 @endforeach
</table></div>
@else
 <div class="alert alert-warning">
 <i class="fa fa-exclamation-triangle"></i> Data Dosen tidak ditemukan </div>
@endif
</div></div>
@stop