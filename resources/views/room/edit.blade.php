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
                                <form action="/room/{{$room->id}}/update" method="POST">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor Kamar</label>
                                    <input name="nomor_kamar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$room->nomor_kamar}}">
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Kamar</label>
                                    <input name="nama_kamar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$room->nama_kamar}}">
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
                                    <input name="harga" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$room->harga}}">
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
                                    <textarea name="keterangan" type="text" class="form-control" id="exampleFormControlTextarea1" aria-describedby="emailHelp" rows="3">{{$room->keterangan}}</textarea>
                                </div>
                                <button type="submit" class="btn btn-warning">Edit</button>
                                </form>								</div>
							</div>



                    </div>
                </div>
            </div>
        </div>
    </div>


@stop
@section('content1')

        <h1>Edit Room</h1>
        @if(session('sukses'))

        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
            </div>
        @endif
            <div class="row">
            <div class="col-lg-12">

            <form action="/room/{{$room->id}}/update" method="POST">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor Kamar</label>
                                    <input name="nomor_kamar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$room->nomor_kamar}}">
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Kamar</label>
                                    <input name="nama_kamar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$room->nama_kamar}}">
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                </div> -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tipe Kamar</label>
                                    <input name="tipe_kamar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$room->tipe_kamar}}">
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Harga</label>
                                    <input name="harga" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$room->harga}}">
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                </div>
                                <div class="form-group">
                                    <!-- <label for="exampleInputEmail1">Status</label>
                                    <input name="status" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$room->status}}">
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                </div> -->


                                <label class="fancy-radio"><h5><b>Status</h5></b>
										<input name="status" value="Tersedia" type="radio">
										<span><i></i>Tersedia</span>
                                        <input name="status" value="Tidak Tersedia" type="radio">
										<span><i></i>Tidak Tersedia</span>
									</label>

                                </div>

                                <!-- <div class="form-group">
                                <label class="fancy-radio">
										
									</label>

                                </div> -->


                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                                    <textarea name="keterangan" type="text" class="form-control" id="exampleFormControlTextarea1" aria-describedby="emailHelp" rows="3">{{$room->keterangan}}</textarea>
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


