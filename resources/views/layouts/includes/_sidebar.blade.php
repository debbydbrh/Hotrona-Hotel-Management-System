<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
					
		
						<li><a href="/dashboard" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
				
						
						@if(auth()->user()->role == 'admin')
						<li><a href="/karyawan" class=""><i class="lnr lnr-user"></i> <span>Karyawan</span></a></li>
						@endif	

						@if(auth()->user()->role == 'admin')
						<li><a href="/room" class=""><i class="lnr lnr-apartment"></i> <span>Room</span></a></li>						
						<li><a href="/transaksi" class=""><i class="lnr lnr-apartment"></i> <span>Room Transactions</span></a></li>
						@endif

						@if(auth()->user()->role == 'resepsionis')
						<li><a href="/room" class=""><i class="lnr lnr-apartment"></i> <span>Room</span></a></li>						
						<li><a href="/transaksi" class=""><i class="lnr lnr-apartment"></i> <span>Room Transactions</span></a></li>
						@endif


						@if(auth()->user()->role == 'admin')
                        <li><a href="/item" class=""><i class="lnr lnr-dice"></i> <span>Item</span></a></li>
                        <li><a href="/transaksibarang" class=""><i class="lnr lnr-dice"></i> <span>Item Transactions</span></a></li>
						@endif

						@if(auth()->user()->role == 'inventaris')
                        <li><a href="/item" class=""><i class="lnr lnr-dice"></i> <span>Item</span></a></li>
                        <li><a href="/transaksibarang" class=""><i class="lnr lnr-dice"></i> <span>Item Transactions</span></a></li>
						@endif

						
						@if(auth()->user()->role == 'admin')
                        <!-- <li><a href="charts.html" class=""><i class="lnr lnr-chart-bars"></i> <span>Reports</span></a></li> -->
                        <li><a href="/pengumuman" class=""><i class="lnr lnr-eye"></i> <span>Announcements</span></a></li>
						@endif
						<li>
							
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="page-profile.html" class="">Profile</a></li>
									<li><a href="page-login.html" class="">Login</a></li>
									<li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
								</ul>
							</div>
						</li>
						
					</ul>
				</nav>
			</div>
		</div>