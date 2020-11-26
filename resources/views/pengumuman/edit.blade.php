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
                                <form action="/pengumuman/{{$pengumuman->id}}/update" method="POST">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Judul</label>
                                        <input name="judul" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pengumuman->judul}}">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="exampleInputEmail1">Isi</label>
                                        <input name="isi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pengumuman->isi}}">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div> -->

                                    <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Isi</label>
                                    <textarea name="isi" type="text" class="form-control" id="exampleFormControlTextarea1" aria-describedby="emailHelp" rows="3" >{{$pengumuman->isi}}</textarea>
                                </div>


                                    <!-- <div class="form-group">
                                        <label for="exampleInputEmail1">Status</label>
                                        <input name="status" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pengumuman->status}}">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div> -->
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal Berakhir</label>
                                        <input name="tanggal_berakhir" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pengumuman->tanggal_berakhir}}">
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

        <h1>Edit Pengumuman</h1>
        @if(session('sukses'))

        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
            </div>
        @endif

            <div class="row">


            <form action="/pengumuman/{{$pengumuman->id}}/update" method="POST">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Judul</label>
                                        <input name="judul" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pengumuman->judul}}">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Isi</label>
                                        <input name="isi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pengumuman->isi}}">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="exampleInputEmail1">Status</label>
                                        <input name="status" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pengumuman->status}}">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div> -->
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal Berakhir</label>
                                        <input name="tanggal_berakhir" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pengumuman->tanggal_berakhir}}">
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
