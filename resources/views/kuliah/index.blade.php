@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')<h1>Dashboard</h1>@stop
@section('content')
<div class="panel panel-default"><div class="panel-body">
  <h4><i class="fa fa-university"></i> DAFTAR Kuliah</h4><hr>
  <div class=row><div class="col-md-6">
   <a href="{{url('')}}/kuliah/create" class="btn btn-primary">
     <i class="fa fa-plus-circle"></i> Tambah Data</a></div>
     <div class="col-md-2"> </div>
     <!-- Form Pencarian -->
     <div class="col-md-4">
     {!! Form::open(['method'=>'GET','url'=>'carikuliah','role'=>'search'])  !!}
       <div class="input-group custom-search-form">
        <input type="text" class="form-control" name="search" placeholder="Search...">
        <span class="input-group-btn">
         <span class="input-group-btn">
           <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> Cari</button>
         </span></span>
       </div>
       {!! Form::close() !!}
     </div>
   </div>
   <br>
 </div>
 <br>
 
 @if($kuliah->count())
 <div class="table-responsive">
  <table class="table table-bordered table-striped table-hover table-condensed tfix">
   <thead align="center"> <tr> 
     <td><b>Kode Kuliah</b></td> <td><b>Mata Kuliah</b></td> 
     <td><b>SKS</b></td> <td colspan="2"><b>MENU</b></td>
   </tr></thead>
   @foreach($kuliah as $m)
   <tr><td>{{ $m->kodekuliah }}</td><td>{{ $m->matakuliah }}</td><td>{{ $m->sks }}</td>
        <td align="center" width="30px">
         <a href="{{url('')}}/kuliah/{{$m->kodekuliah}}/edit" class="btn btn-warning btn-sm" 
          role="button"><i class="fa fa-pencil-square"></i> Edit</a></td>
          <td align="center" width="30px">
           {!! Form::open(array(
           'route' => array('kuliah.destroy', $m->kodekuliah),
           'method' => 'delete',
           'style' => 'display:inline')) !!}
           <button class='btn btn-sm btn-danger delete-btn' type='submit'>
            <i class='fa fa-times-circle'></i> Delete</button>
            {!! Form::close() !!}</td></tr>
            @endforeach
          </table>
          {{$kuliah->render()}}
        </div>
        @else
        <div class="alert alert-warning">
         <i class="fa fa-exclamation-triangle"></i> Data Kuliah tidak ditemukan</div>
         @endif
       </div></div>
       @stop


