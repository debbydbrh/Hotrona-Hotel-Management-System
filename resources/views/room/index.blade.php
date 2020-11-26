@extends('layouts.master')


@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                    <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Kamar</h3>
                                    <div class="right">

                                 

                                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                                  
                                
                                    </div>
                              


								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
                                            <th>Nomor Kamar</th>
                                            <!-- <th>Nama Kamar</th> -->
                                            <th>Tipe Kamar</th>
                                            <th>Harga</th>
                                            <th>Status</th>
                                            <th>Keterangan</th>

                                            </td>
                                          
                                            <th>Aksi</th>
                                     
											</tr>
										</thead>
										<tbody>
                                        @foreach($data_room as $room)
                                        <tr>
                                            <td>{{$room->nomor_kamar}}</td>
                                            <!-- <td>{{$room->nama_kamar}}</td> -->
                                            <td>{{$room->tipe_kamar}}</td>
                                            <td>{{$room->harga}}</td>
                                            <td>{{$room->status}}</td>
                                            <td>{{$room->keterangan}}</td>
                                           
                                         
                                              

                                            <td>
                                            <a href="/room/{{$room->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="/room/{{$room->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin data akan dihapus?')">Delete</a>
                                  
                                            
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
                            <h2 class="modal-title" id="exampleModalLabel">Form Data Kamar</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                           
                            <form action="/room/create" method="POST">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor Kamar</label>
                                    <input name="nomor_kamar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Kamar</label>
                                    <input name="nama_kamar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                </div> -->
                                <!-- <div class="form-group">
                                    <label for="exampleInputEmail1">Tipe Kamar</label>
                                    <input name="tipe_kamar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                </div> -->

                                <div class="form-group">
                                <label for="exampleFormControlSelect1">Tipe Kamar</label>
                                <select name="tipe_kamar" class="form-control" id="exampleFormControlSelect1">
                                    <option value="Standard Room (STD)">Standard Room (STD)</option>
                                    <option value="Superior Room (SUP)">Superior Room (SUP)</option>
                                    <option value="Deluxe Room (DLX)">Deluxe Room (DLX)</option>
                                </select>
                           
                            </div>

                               <div class="form-group">
                                    <label for="exampleInputEmail1">Harga</label>
                                    <input name="harga" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                </div>

                             

                                <div class="form-group">
                                <!-- <label for="exampleFormControlSelect1">Status</label>
                                <select name="status" class="form-control" id="exampleFormControlSelect1">
                                    <option value="Tersedia">Tersedia</option>
                                    <option value="Tidak Tersedia">Tidak Tersedia</option>
                                   
                                </select> -->

                                <label class="fancy-radio"><h5><b>Status</h5></b>
										<input name="status" value="Tersedia" type="radio">
										<span><i></i>Tersedia</span>
                                   
									</label>

                                </div>
                                    
                                <div class="form-group">
                                <label class="fancy-radio">
										<input name="status" value="Tidak Tersedia" type="radio">
										<span><i></i>Tidak Tersedia</span>
									</label>

                                </div> 
                                
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                                    <textarea name="keterangan" type="text" class="form-control" id="exampleFormControlTextarea1" aria-describedby="emailHelp" rows="3"></textarea>
                                </div>
                            
                                <!-- <div class="form-group">
                                    <label for="exampleInputEmail1">Status</label>
                                    <input name="status" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                </div> -->


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        </div>
                    </div>





@stop




