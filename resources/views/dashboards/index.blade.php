

@extends('layouts.master')

@section('content')

<div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    <!-- <div class="profile-left">
                    <div class="col-md-10">
									<div class="metric">
										<span class="icon"><i class="fa fa-eye"></i></span>
										<p>
											<span class="number">1,252</span>
											<span class="title">Total Transaksi</span>
										</p>
									</div>
                                           
                            
                    </div>
                    <div class="panel">
                            <div id="chartReport"></div>
                        </div>    
                      
                 

                        </div> -->
                              
                        <div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Weekly Overview</h3>
							<p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-eye"></i></span>
										<p>
											<span class="number">3</span>
											<span class="title">Total Transaksi</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-eye"></i></span>
										<p>
											<span class="number">2,300,000</span>
											<span class="title">Total Pendapatan</span>
										</p>
									</div>
								</div>
								<!-- <div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-eye"></i></span>
										<p>
											<span class="number">274,678</span>
											<span class="title">Visits</span>
										</p>
									</div>

            
								</div> -->
								
								</div>
							</div>
							
                            <div class="panel">
                            <!-- <div id="chartReport"> -->
                            
                            </div>


                            
                        </div>                     


						</div>
                        <div class="col-md-7">
							<!-- TODO LIST -->
							<div class="panel">
								<div class="panel-heading">
                                              
                     
                                <h1 class="panel-title"><span class="lnr lnr-bullhorn"> Pengumuman</h1></span>

                                
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body">
                                
                                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Tambah Pengumuman
                                </button> -->


                                <div class="panel-body">
                                



                           
											<label class="control-inline fancy-checkbox">
                                   
											</label>
											<p>
                                            
											</p>
											<div class="controls">
												<a href="#"><i class="icon-software icon-software-pencil"></i></a> <a href="#"><i class="icon-arrows icon-arrows-circle-remove"></i></a>
											</div>
								









									
									
									
                                        @foreach($pengumuman ?? '' as $pengumuman)
                                        <h4 class="card-title"><b>{{$pengumuman->judul}}</b></h5>
    									<p class="card-text">{{$pengumuman->isi}}</p>
										<p class="card-text">{{$pengumuman->tanggal_berakhir}}</p>
										<br>
										@endforeach
   	 						
                                       
										


                        

           
							
									<ul class="list-unstyled todo-list">
	
										<li>
											<label class="control-inline fancy-checkbox">
                                   
											</label>
											<p>
                                            
											</p>
											<div class="controls">
												<a href="#"><i class="icon-software icon-software-pencil"></i></a> 
												<a href="#"><i class="icon-arrows icon-arrows-circle-remove"></i></a>
											</div>
										</li>
										@foreach($pengumuman as $result =>$hasil )
										<li>
                                   
										
											<div class="controls">
												<a href="#"><i class="icon-software icon-software-pencil"></i>Gas</a><a href="#"><i class="icon-arrows icon-arrows-circle-remove"></i></a>
											</div>
										</li>
										@endforeach
								
									
									</ul>
									
								</div>
								
							</div>
							<!-- END TODO LIST -->
						</div>
					</div>



                        
                    </div>
                </div>
            </div>
        </div>
</div>

@stop 

@section('footer')
<!-- <script src="https://code.highcharts.com/highcharts.js"></script>
<script>

Highcharts.chart('chartReport', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Laporan Pendapatan'
    },
    // subtitle: {
    //     text: 'Source: WorldClimate.com'
    // },
    xAxis: {
        categories: [
            'Januari',
            'Febuari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Pendapatan'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Bulan',
        data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

    }]
});

</script> -->




<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Tambah Pengumuman</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <div class="modal-body">
     


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@stop