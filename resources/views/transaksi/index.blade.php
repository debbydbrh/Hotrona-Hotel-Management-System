@extends('layouts.master')



@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">


                        <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Transaksi Kamar</h3>
                                    <div class="right">
                                        

                                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                                    
                                    
                                    </div>
                                  

								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
                                            <th>NIK Pemesan</th>
                                            <th>Nama Pemesan</th>
                                            <th>Alamat</th>
                                            <th>Jumlah Kamar</th>
                                            <th>Tanggal Check In</th>
                                            <th>Tanggal Check Out</th>
                                            <th>Tipe Kamar</th>
                                            <th>Harga Kamar</th>
                                            <th>Aksi</th>

                             
											</tr>
										</thead>
										<tbody>
                                        @foreach($data_transaksi as $transaksi)
                                        <tr>
                                            <td>{{$transaksi->nik_pemesan}}</td>
                                            <td>{{$transaksi->nama_pemesan}}</td>
                                            <td>{{$transaksi->alamat}}</td>
                                            <td>{{$transaksi->jumlah_kamar}}</td>
                                            <td>{{$transaksi->tanggal_check_in}}</td>
                                            <td>{{$transaksi->tanggal_check_out}}</td>
                                            <td>{{$transaksi->tipe_kamar}}</td>
                                            <td>{{$transaksi->harga_kamar}}</td>

                                            

                                            
                                           
                                            <td>
                                           
                                            <a href="/transaksi/{{$transaksi->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="/transaksi/{{$transaksi->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin data akan dihapus?')">Delete</a>
                                            
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
                            <h2 class="modal-title" id="exampleModalLabel">Form Data Transaksi Kamar</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            
                            <form action="/transaksi/create" method="POST">
                                        {{csrf_field()}}
                                    <div class="form-group {{$errors->has('nik_pemesan') ? ' has-error' : ''}}">
                                        <label for="exampleInputEmail1">NIK Pemesan</label>
                                        <input name="nik_pemesan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIK Pemesan">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    @if($errors->has('nik_pemesan'))
                                        <span class="help-block">{{$errors->first('nik_pemesan')}}</span>

                                    @endif
                                    </div>
                                    <div class="form-group {{$errors->has('nama_pemesan') ? ' has-error' : ''}}">
                                        <label for="exampleInputEmail1">Nama Pemesan</label>
                                        <input name="nama_pemesan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pemesan">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                        @if($errors->has('nama_pemesan'))
                                        <span class="help-block">{{$errors->first('nama_pemesan')}}</span>

                                    @endif
                                    
                                    </div>
                                    <div class="form-group {{$errors->has('alamat') ? ' has-error' : ''}}">
                                        <label for="exampleInputEmail1">Alamat</label>
                                        <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    
                                        @if($errors->has('alamat'))
                                        <span class="help-block">{{$errors->first('alamat')}}</span>

                                    @endif
                                    
                                    </div>
                                    <div class="form-group {{$errors->has('jumlah_kamar') ? ' has-error' : ''}}">
                                        <label for="exampleInputEmail1">Jumlah Kamar</label>
                                        <input name="jumlah_kamar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah Kamar">
                                        <small id="emailHelp" class="form-text text-muted"></small>

                                        <!-- <div class="form-group">
                                <label for="exampleFormControlSelect1">Jumlah Kamar</label>
                                <select name="jumlah_kamar" class="form-control" id="exampleFormControlSelect1">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>                                                   -->
                                      
                                        @if($errors->has('jumlah_kamar'))
                                        <span class="help-block">{{$errors->first('jumlah_kamar')}}</span>

                                    @endif

                                    </div>
                                    
                                    
                             
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal Check In</label>
                                        <input name="tanggal_check_in" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal Check Out</label>
                                        <input name="tanggal_check_out" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>

                                    <div class="form-group">
                                <label for="exampleFormControlSelect1">Tipe Kamar</label>
                                <select name="tipe_kamar" class="form-control" id="mySelect" onchange="myFunction()">
                                    <option value="Standard Room (STD)">Standard Room (STD)</option>
                                    <option value="Superior Room (SUP)">Superior Room (SUP)</option>
                                    <option value="Deluxe Room (DLX)">Deluxe Room (DLX)</option>
                                </select>
                                <script>
                                    function myFunction() {
                                      var a = "Standard Room (STD)";
                                      var b = "Superior Room (SUP)";
                                      var c = "Deluxe Room (DLX)";
                                      var x = document.getElementById("mySelect").value;
                                      if(x == a){
                                        document.getElementById("harga").value = "500000";
                                        }
                                      else if(x == b){
                                        document.getElementById("harga").value = "900000";
                                        }
                                      else if(x == c){
                                        document.getElementById("harga").value = "1000000";
                                        }

                                    }
                                </script> 
                            </div>

                                  
                                    
                               <div class="form-group">
                                    <label for="exampleInputEmail1">Harga</label>
                                    <input name="harga_kamar" type="f" class="form-control" id="harga" aria-describedby="emailHelp">
                                    <small id="harga" class="form-text text-muted"></small>
                                </div>
                                                           
                                        <!-- @if($errors->has('harga_kamar'))
                                        <span class="help-block">{{$errors->first('harga_kamar')}}</span>

                                    @endif -->
                                    <!-- {{$errors->has('harga_kamar') ? ' has-error' : ''}} -->
                                 


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    
                        </form>
                    </div>
                    </div>

                </div>




@stop

