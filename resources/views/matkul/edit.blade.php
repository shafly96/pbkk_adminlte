@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')
   <h1>Dashboard</h1>
@stop
@section('content')
 <div class="panel panel-default">    <div class="panel-body">
 <h4><i class="fa fa-check-square"></i> EDIT DATA AMBIL KULIAH</h4><hr>
 <div class="panel panel-default"><div class="panel-body">
 {!! Form::model($matkul,['method'=>'PATCH','action'=>['AmbilMatkulController@update',$matkul->id]]) !!} 
<div class="form-group">
{!! Form::label('tempat_kelas', 'Kode Kelas') !!}
{!! Form::select('tempat_kelas', $kelas ,null, array('class' => 'form-control','placeholder'=>'Kode Kelas')) !!}</div>
<div class="form-group">
{!! Form::label('nrp_pengambil', 'Nama Mahasiswa') !!}
{!! Form::select('nrp_pengambil', $mhs, null, array('class' =>  'form-control','placeholder'=>'Nama Mahasiswa')) !!}
</div>
<div class="form-group">
{!! Form::label('uts', 'Nilai UTS') !!}
{!! Form::text('uts',null, array('class' => 'form-control','placeholder'=>'Nilai UTS')) !!}</div>
<div class="form-group">
{!! Form::label('uas', 'Nilai UAS') !!}
{!! Form::text('uas',null, array('class' => 'form-control','placeholder'=>'Nilai UAS')) !!}</div>
{!! Form::button('<i class="fa fa-check-square"></i>'. ' Update', array('type' => 'submit', 'class' => 'btn btn-primary'))!!}
{!! Form::close()!!}
</div></div></div></div>    
@stop