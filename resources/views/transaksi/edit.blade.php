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
                                <form action="/transaksi/{{$transaksi->id}}/update" method="POST">
                                        {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">NIK Pemesan</label>
                                        <input name="nik_pemesan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$transaksi->nik_pemesan}}">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Pemesan</label>
                                        <input name="nama_pemesan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$transaksi->nama_pemesan}}">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Alamat</label>
                                        <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$transaksi->alamat}}">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Jumlah Kamar</label>
                                        <input name="jumlah_kamar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$transaksi->jumlah_kamar}}">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>


<!--                                     
                                    <div class="form-group">
                                <label for="exampleFormControlSelect1">Jumlah Kamar</label>
                                <select name="jumlah_kamar" class="form-control" id="exampleFormControlSelect1">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select> -->
                                
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal Check In</label>
                                        <input name="tanggal_check_in" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$transaksi->tanggal_check_in}}">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal Check Out</label>
                                        <input name="tanggal_check_out" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$transaksi->tanggal_check_out}}">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group">
                                <label for="exampleFormControlSelect1">Tipe Kamar</label>
                                <select name="tipe_kamar" class="form-control" id="exampleFormControlSelect1">
                                    <option value="Standard Room (STD)">Standard Room (STD)</option>
                                    <option value="Superior Room (SUP)">Superior Room (SUP)</option>
                                    <option value="Deluxe Room (DLX)">Deluxe Room (DLX)</option>
                                </select>
                           
                            </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Harga Kamar</label>
                                        <input name="harga_kamar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$transaksi->harga_kamar}}">
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
        <h1>Edit Transaksi</h1>
        @if(session('sukses'))

        <div class="alert alert-success" role="alert">
           {{session('sukses')}}
            </div>
        @endif    

            <div class="row">

            <div class="col-lg-12">
            <form action="/transaksi/{{$transaksi->id}}/update" method="POST">
                                        {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">NIK Pemesan</label>
                                        <input name="nik_pemesan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$transaksi->nik_pemesan}}">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Pemesan</label>
                                        <input name="nama_pemesan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$transaksi->nama_pemesan}}">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Alamat</label>
                                        <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$transaksi->alamat}}">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Jumlah Kamar</label>
                                        <input name="jumlah_kamar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$transaksi->jumlah_kamar}}">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal Check In</label>
                                        <input name="tanggal_check_in" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$transaksi->tanggal_check_in}}">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal Check Out</label>
                                        <input name="tanggal_check_out" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$transaksi->tanggal_check_out}}">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group">
                                <label for="exampleFormControlSelect1">Tipe Kamar</label>
                                <select name="tipe_kamar" class="form-control" id="exampleFormControlSelect1">
                                    <option value="Standard Room (STD)">Standard Room (STD)</option>
                                    <option value="Superior Room (SUP)">Superior Room (SUP)</option>
                                    <option value="Deluxe Room (DLX)">Deluxe Room (DLX)</option>
                                </select>
                           
                            </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Harga Kamar</label>
                                        <input name="harga_kamar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$transaksi->harga_kamar}}">
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

