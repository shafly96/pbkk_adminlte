@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')
    <h1>Dashboard</h1>
@stop
@section('content')
<div class="panel panel-default"><div class="panel-body">
<h4><i class="fa fa-plus-square"></i> TAMBAH Kuliah</h4><hr>
<div class="panel panel-default"><div class="panel-body">
{!! Form::open(array('url' => '/kuliah')) !!}
<div class="form-group">
{!! Form::label('kodekuliah', 'Kode Kuliah') !!}
{!! Form::text('kodekuliah',null, array('class' => 'form-control','placeholder'=>'Kode Kuliah')) !!}
</div>
<div class="form-group">
{!! Form::label('matakuliah', 'Mata Kuliah') !!}
{!! Form::text('matakuliah', null, array('class' => 'form-control','placeholder'=>'Mata Kuliah')) !!}
</div>
<div class="form-group">
{!! Form::label('sks', 'SKS') !!}
{!! Form::text('sks', null, array('class' => 'form-control','placeholder'=>'SKS')) !!}
</div>
{!! Form::button('<i class="fa fa-plus-square"></i>'. ' Simpan', array('type' => 'submit', 'class' => 'btn btn-primary'))!!}
{!! Form::button('<i class="fa fa-times"></i>'. ' Reset', array('type' => 'reset', 'class' => 'btn btn-danger'))!!}
{!! Form::close()!!}
</div></div></div></div>
@stop