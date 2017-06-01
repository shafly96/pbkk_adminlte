@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')
    <h1>Dashboard</h1>
@stop
@section('content')
<div class="panel panel-default"><div class="panel-body">
<h4><i class="fa fa-plus-square"></i> TAMBAH Mahasiswa</h4><hr>
<div class="panel panel-default"><div class="panel-body">
{!! Form::open(array('url' => '/mhs')) !!}
<div class="form-group">
{!! Form::label('nrp', 'NRP') !!}
{!! Form::text('nrp',null, array('class' => 'form-control','placeholder'=>'NRP')) !!}
</div>
<div class="form-group">
{!! Form::label('nama', 'Nama Mahasiswa') !!}
{!! Form::text('nama', null, array('class' => 'form-control','placeholder'=>'Nama Mahasiswa')) !!}
</div>
<div class="form-group">
{!! Form::label('nipdosenwali', 'Dosen Wali') !!}
{!! Form::select('nipdosenwali', $dsn ,null , array('class' => 'form-control')) !!}
</div>
{!! Form::button('<i class="fa fa-plus-square"></i>'. ' Simpan', array('type' => 'submit', 'class' => 'btn btn-primary'))!!}
{!! Form::button('<i class="fa fa-times"></i>'. ' Reset', array('type' => 'reset', 'class' => 'btn btn-danger'))!!}
{!! Form::close()!!}
</div></div></div></div>
@stop