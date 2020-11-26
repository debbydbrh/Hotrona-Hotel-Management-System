@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                    <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Edit Data</h3>
								</div>
								<div class="panel-body">
                                <form action="/karyawan/{{$karyawan->id}}/update" method="POST">
                                {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Karyawan</label>
                                <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$karyawan->nama}}">
                                <small id="emailHelp" class="form-text text-muted" ></small>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                           
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Alamat</label>
                                <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$karyawan->alamat}}">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Nomor Handphone</label>
                                <input name="no_hp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$karyawan->no_hp}}">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>

                            <button type="submit" class="btn btn-warning">Edit</button>
                            </form>
								</div>
							</div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@stop




@section('content1')        
        
        <h1>Edit Data Karyawan</h1>
        @if(session('sukses'))

        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
            </div>
        @endif    

            <div class="row">

            <div class="col-lg-12">


                <form action="/karyawan/{{$karyawan->id}}/update" method="POST">
                                {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Karyawan</label>
                                <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$karyawan->nama}}">
                                <small id="emailHelp" class="form-text text-muted" ></small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jenis Kelamin</label>
                                <input name="jenis_kelamin" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$karyawan->jenis_kelamin}}">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                
                            <button type="submit" class="btn btn-warning">Edit</button>
                            </form>
                            
            </div>


                </div>
                

               
            </div>

@endsection