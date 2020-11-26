@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    <div class="panel">
								<div class="panel-heading">
                                    <h3 class="panel-title">Data Karyawan</h3>
                                    <div class="right">
                                   
                                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                                    </div>
                                        
                                   
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
                                            <th>Nama Karyawan</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Nomor Handphone</th>
                                            <th>Aksi</th>
                              
											</tr>
										</thead>
										<tbody>
                                        @foreach($data_karyawan as $karyawan)
                                        <tr>
                                            <td>{{$karyawan->nama}}</td>
                                            <td>{{$karyawan->jenis_kelamin}}</td>
                                            <td>{{$karyawan->alamat}}</td>
                                            <td>{{$karyawan->no_hp}}</td>

                                            <td>
                                            <a href="/karyawan/{{$karyawan->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="/karyawan/{{$karyawan->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin data akan dihapus?')">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
										</tbody>
									</table>
								</div>
							</div>

                    </div>
            
                </div>
            
        
            </div>



        </div>

    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="exampleModalLabel">Form Data Karyawan</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            
                            <form action="/karyawan/create" method="POST">
                                {{csrf_field()}}
                            <div class="form-group {{$errors->has('nama') ? ' has-error' : ''}}">
                                <label for="exampleInputEmail1">Nama Karyawan</label>
                                <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('nama')}}">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            
                            
                                @if($errors->has('nama'))
                                        <span class="help-block">{{$errors->first('nama')}}</span>

                                    @endif
                                    
                            </div>
                            <div class="form-group {{$errors->has('email') ? ' has-error' : ''}}">
                                <label for="exampleInputEmail1">Email</label>
                                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('email')}}">
                                <small id="emailHelp" class="form-text text-muted"></small>

                                @if($errors->has('email'))
                                        <span class="help-block">{{$errors->first('email')}}</span>

                                    @endif
                            </div>
                            <div class="form-group {{$errors->has('jenis_kelamin') ? ' has-error' : ''}}">
                                <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                    <option value ="Laki-laki"{{(old('jenis_kelamin') == 'Laki-laki') ? ' selected' : ''}}>Laki-laki</option>
                                    <option value="Perempuan"{{(old('jenis_kelamin') == 'Perempuan') ? ' selected' : ''}}>Perempuan</option>
                                </select>

                                @if($errors->has('jenis_kelamin'))
                                        <span class="help-block">{{$errors->first('jenis_kelamin')}}</span>

                                    @endif
                            </div>

                            <div class="form-group {{$errors->has('alamat') ? ' has-error' : ''}}">
                                <label for="exampleInputEmail1">Alamat</label>
                                <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('alamat')}}">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            
                                @if($errors->has('alamat'))
                                        <span class="help-block">{{$errors->first('alamat')}}</span>

                                    @endif
                            
                            </div>

                            <div class="form-group {{$errors->has('no_hp') ? ' has-error' : ''}}">
                                <label for="exampleInputEmail1">Nomor Handphone</label>
                                <input name="no_hp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('no_hp')}}">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            
                                @if($errors->has('no_hp'))
                                        <span class="help-block">{{$errors->first('no_hp')}}</span>

                                    @endif
                            </div>
                              
                        
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        </div>
                    </div>

@stop

