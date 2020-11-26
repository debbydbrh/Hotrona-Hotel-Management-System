@extends('layouts.master')


@section('content')

        <div class="main">
            <div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                        
                        <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Pengumuman</h3>
                                    <div class="right">

                                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                                    </div>
                               
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
                                            <th>Judul</th>
                                            <th>Isi</th>
                                            <!-- <th>Status</th> -->
                                            <th>Tanggal Berakhir</th>     
                                            <th>Aksi</th> 
											</tr>
										</thead>
										<tbody>
                                        @foreach($data_pengumuman as $pengumuman)
                                        <tr>
                                            <td>{{$pengumuman->judul}}</td>
                                            <td>{{$pengumuman->isi}}</td>
                                            <!-- <td>{{$pengumuman->status}}</td> -->
                                            <td>{{$pengumuman->tanggal_berakhir}}</td>
                                            <td>
                                            <a href="/pengumuman/{{$pengumuman->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="/pengumuman/{{$pengumuman->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin data akan dihapus?')">Delete</a>
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
                            <h2 class="modal-title" id="exampleModalLabel">Data Pengumuman</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form action="/pengumuman/create" method="POST">
                                        {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Judul</label>
                                        <input name="judul" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="exampleInputEmail1">Isi</label>
                                        <input name="isi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div> -->

                                    <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Isi</label>
                                    <textarea name="isi" type="text" class="form-control" id="exampleFormControlTextarea1" aria-describedby="emailHelp" rows="3"></textarea>
                                </div>

<!-- 
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Status</label>
                                        <input name="status" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div> -->
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal Berakhir</label>
                                        <input name="tanggal_berakhir" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <small id="emailHelp" class="form-text text-muted"></small>
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

