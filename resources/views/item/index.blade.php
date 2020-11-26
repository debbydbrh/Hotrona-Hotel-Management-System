@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    <div class="panel">
								<div class="panel-heading">
                                    <h3 class="panel-title">Data Barang</h3>
                                    <div class="right">
                                   
                                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                                
                                    </div>
                                        
                                   
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
                                            <th>Nama Barang</th>
                                            <!-- <th>Status</th> -->
                                            <th>Stok Barang</th>
                                            <th>Keterangan</th>      
                                            
                                            <th>Aksi</th>
                                       
											</tr>
										</thead>
										<tbody>
                                        @foreach($data_item as $item)
                                        <tr>
                                            <td>{{$item->nama_barang}}</td>
                                            <!-- <td>{{$item->status}}</td> -->

                                            @if($item->stok_barang < 2)
                                            <td style="color:red"><b>{{$item->stok_barang}} Stok barang akan habis</b></td>
                                            @else
                                            <td>{{$item->stok_barang}}</td>
                                            @endif
                                            <td>{{$item->keterangan}}</td>
                                            <td>
                                         
                                            <a href="/item/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="/item/{{$item->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin data akan dihapus?')">Delete</a>
                                           
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
                            <h2 class="modal-title" id="exampleModalLabel">Form Data Item</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            
                            <form action="/item/create" method="POST">
                                {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Barang</label>
                                <input name="nama_barang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <!-- <div class="form-group">
                                <label for="exampleInputEmail1">Status</label>
                                <input name="status" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div> -->
                            <div class="form-group">
                                <label for="exampleInputEmail1">Stok Barang</label>
                                <input name="stok_barang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                            <label for="exampleFormControlTextarea1">Keterangan</label>
                            <textarea name="keterangan" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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

<!-- @if(auth()->user()->role=='inventaris'|| auth()->user()->role=='resepsionis') -->
<!-- @endif -->