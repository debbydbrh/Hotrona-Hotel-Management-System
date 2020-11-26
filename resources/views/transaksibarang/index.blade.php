@extends('layouts.master')

@section('content')
    <div class="main">
            <div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

                        <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Transaksi Barang</h3>
                                    <div class="right">
                                   
                                 
                                    <a href="/transaksibarang/exportpdf" class="btn btn-sm btn-primary">Export PDF</a>
                                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                                    
                              
                                    </div>


								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
                                            <th>Nama Barang</th>
                                            <th>Jumlah Barang</th>
                                            <th>Tanggal Masuk Barang</th>
                                            <th>Kategori</th>      
                                            <th>Biaya</th>  
                                            
                                           
                                            <th>Aksi</th>
                                           
                                            
											</tr>
										</thead>
										<tbody>
                                        @foreach($data_transaksibarang as $transaksibarang)
                                        <tr>
                                            <td>{{$transaksibarang->nama_barang}}</td>
                                            <td>{{$transaksibarang->jumlah_barang}}</td>
                                            <td>{{$transaksibarang->tanggal_masuk_barang}}</td>
                                            <td>{{$transaksibarang->kategori}}</td>
                                            <td>{{$transaksibarang->biaya}}</td>
                                           
                                           
                                           
                                            
                                            <td>
                                            <a href="/transaksibarang/{{$transaksibarang->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="/transaksibarang/{{$transaksibarang->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin data akan dihapus?')">Delete</a>
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
                            <h2 class="modal-title" id="exampleModalLabel">Form Data Transaksi Barang</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                      
                        </div>
                       
                        <div class="modal-body">
                          
                        <form action="/transaksibarang/create" method="POST">
                                        {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Barang</label>
                                        <input name="nama_barang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group {{$errors->has('jumlah_barang') ? ' has-error' : ''}}">
                                        <label for="exampleInputEmail1">Jumlah Barang</label>
                                        <input name="jumlah_barang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    
                                        @if($errors->has('jumlah_barang'))
                                        <span class="help-block">{{$errors->first('jumlah_barang')}}</span>

                                    @endif
                                    
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal Masuk Barang</label>
                                        <input name="tanggal_masuk_barang" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Kategori</label>
                                        <input name="kategori" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Biaya</label>
                                        <input name="biaya" ype="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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




