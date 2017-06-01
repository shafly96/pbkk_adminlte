@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')
   <h1>Dashboard</h1>
@stop
@section('content')
 <div class="panel panel-default">    <div class="panel-body">
 <h4><i class="fa fa-check-square"></i> EDIT DATA Mahasiswa</h4><hr>
 <div class="panel panel-default"><div class="panel-body">
 {!! Form::model($mhs,['method'=>'PATCH','action'=>['MhsController@update',$mhs->nrp]]) !!} 
 <div class="form-group">
{!! Form::label('nrp', 'NRP') !!}
{!! Form::text('nrp',null, array('class' => 'form-control','placeholder'=>'NRP')) !!}
</div><div class="form-group">
{!! Form::label('nama', 'Nama Mahasiswa') !!}
{!! Form::text('nama', null, array('class' => 'form-control','placeholder'=>'Nama Mahasiswa')) !!}
</div>
<div class="form-group">
{!! Form::label('nipdosenwali', 'Dosen Wali') !!}
{!! Form::select('nipdosenwali', $dsn ,null , array('class' => 'form-control')) !!}
</div>
{!! Form::button('<i class="fa fa-check-square"></i>'. ' Update', array('type' => 'submit', 'class' => 'btn btn-primary'))!!}
{!! Form::close()!!}
</div></div></div></div>    
@stop