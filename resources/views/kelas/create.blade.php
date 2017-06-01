@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')
    <h1>Dashboard</h1>
@stop
@section('content')
<div class="panel panel-default"><div class="panel-body">
<h4><i class="fa fa-plus-square"></i> TAMBAH Kuliah</h4><hr>
<div class="panel panel-default"><div class="panel-body">
{!! Form::open(array('url' => '/kelas')) !!}
<div class="form-group">
{!! Form::label('kode_kelas', 'Kode Kelas') !!}
{!! Form::text('kode_kelas',null, array('class' => 'form-control','placeholder'=>'Kode Kelas')) !!}</div>
<div class="form-group">
{!! Form::label('kuliah_pemakai', 'Mata Kuliah') !!}
{!! Form::select('kuliah_pemakai', $klh ,null , array('class' => 'form-control')) !!}
</div>
<div class="form-group">
{!! Form::label('nip_pengajar', 'Dosen Pengajar') !!}
{!! Form::select('nip_pengajar', $dsn ,null , array('class' => 'form-control')) !!}
</div>
{!! Form::button('<i class="fa fa-plus-square"></i>'. ' Simpan', array('type' => 'submit', 'class' => 'btn btn-primary'))!!}
{!! Form::button('<i class="fa fa-times"></i>'. ' Reset', array('type' => 'reset', 'class' => 'btn btn-danger'))!!}
{!! Form::close()!!}
</div></div></div></div>
@stop