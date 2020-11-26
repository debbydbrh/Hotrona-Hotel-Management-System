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
                                <form action="/transaksibarang/{{$transaksibarang->id}}/update" method="POST">
                                        {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Barang</label>
                                        <input name="nama_barang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$transaksibarang->nama_barang}}">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Jumlah Barang</label>
                                        <input name="jumlah_barang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$transaksibarang->jumlah_barang}}">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal Masuk Barang</label>
                                        <input name="tanggal_masuk_barang" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$transaksibarang->tanggal_masuk_barang}}">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Kategori</label>
                                        <input name="kategori" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$transaksibarang->kategori}}">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Biaya</label>
                                        <input name="biaya" ype="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$transaksibarang->biaya}}">
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

        <h1>Edit Transaksi Barang</h1>
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
            </div>
        @endif
            <div class="row">
            <div class="col-lg-12">
            <form action="/transaksibarang/{{$transaksibarang->id}}/update" method="POST">
                                        {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Barang</label>
                                        <input name="nama_barang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$transaksibarang->nama_barang}}">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Jumlah Barang</label>
                                        <input name="jumlah_barang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$transaksibarang->jumlah_barang}}>
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal Masuk Barang</label>
                                        <input name="tanggal_masuk_barang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$transaksibarang->tanggal_masuk_barang}}>
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Kategori</label>
                                        <input name="kategori" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$transaksibarang->kategori}}>
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Biaya</label>
                                        <input name="biaya" ype="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$transaksibarang->biaya}}>
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <button type="submit" class="btn btn-warning">Edit</button>
                                    </form>
                                    </div>
                        </div>
 
                                  

            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>

</html>    

@endsection

