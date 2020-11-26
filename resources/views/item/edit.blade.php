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
                                <form action="/item/{{$item->id}}/update" method="POST">
                                {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Barang</label>
                                <input name="nama_barang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$item->nama_barang}}">
                                <small id="emailHelp" class="form-text text-muted" ></small>
                            </div>
                            <!-- <div class="form-group">
                                <label for="exampleInputEmail1">Status</label>
                                <input name="status" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$item->status}}">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div> -->
                            <div class="form-group">
                                <label for="exampleInputEmail1">Stok Barang</label>
                                <input name="stok_barang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$item->stok_barang}}">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                            <label for="exampleFormControlTextarea1">Keterangan</label>
                            <textarea name="keterangan" class="form-control" id="exampleFormControlTextarea1" rows="3" ">{{$item->keterangan}}</textarea>
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
        
        <h1>Edit Item</h1>
        @if(session('sukses'))

        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
            </div>
        @endif    

            <div class="row">

            <div class="col-lg-12">


                <form action="/item/{{$item->id}}/update" method="POST">
                                {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Barang</label>
                                <input name="nama_barang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$item->nama_barang}}">
                                <small id="emailHelp" class="form-text text-muted" ></small>
                            </div>
                            <!-- <div class="form-group">
                                <label for="exampleInputEmail1">Status</label>
                                <input name="status" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$item->status}}">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div> -->
                            <div class="form-group">
                                <label for="exampleInputEmail1">Stok Barang</label>
                                <input name="stok_barang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$item->stok_barang}}">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                            <label for="exampleFormControlTextarea1">Keterangan</label>
                            <textarea name="keterangan" class="form-control" id="exampleFormControlTextarea1" rows="3" ">{{$item->keterangan}}</textarea>
                            </div> 

                            <button type="submit" class="btn btn-warning">Edit</button>
                            </form>
                            
            </div>


                </div>
                

               
            </div>

@endsection