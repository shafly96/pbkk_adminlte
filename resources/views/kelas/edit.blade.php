@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')
   <h1>Dashboard</h1>
@stop
@section('content')
 <div class="panel panel-default">    <div class="panel-body">
 <h4><i class="fa fa-check-square"></i> EDIT DATA KELAS</h4><hr>
 <div class="panel panel-default"><div class="panel-body">
 {!! Form::model($kelas,['method'=>'PATCH','action'=>['KelasController@update',$kelas->kode_kelas]]) !!} 
 <div class="form-group">
{!! Form::label('kode_kelas', 'Kode Kelas') !!}
{!! Form::text('kode_kelas',null, array('class' => 'form-control','placeholder'=>'Kode Kelas')) !!}</div>
<div class="form-group">
{!! Form::label('kuliah_pemakai', 'Mata Kuliah') !!}
{!! Form::select('kuliah_pemakai', $kuliah ,null , array('class' => 'form-control')) !!}
</div>
<div class="form-group">
{!! Form::label('nip_pengajar', 'Dosen Pengajar') !!}
{!! Form::select('nip_pengajar', $dosen ,null , array('class' => 'form-control')) !!}
</div>
{!! Form::button('<i class="fa fa-check-square"></i>'. ' Update', array('type' => 'submit', 'class' => 'btn btn-primary'))!!}
{!! Form::close()!!}
</div></div></div></div>    
@stop