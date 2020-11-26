<table class = "table" style="border:1px solid #ddd">

    <thead>
 
        <tr>
        
          
          
            <th>Nama Pemesan</th>
            <th>Alamat</th>
            <th>Jumlah Kamar</th>
            <th>Tanggal Check In</th>
            <th>Tanggal Check Out</th>
            <th>Tipe Kamar</th>
            <th>Harga Kamar</th>
        </tr>
    </thead>
    <tbody>
    @foreach($transaksi as $t)
        <tr>
       
            <td>{{$t->nama_pemesan}}</td>
            <td>{{$t->alamat}}</td>
            <td>{{$t->jumlah_kamar}}</td>
            <td>{{$t->tanggal_check_in}}</td>
            <td>{{$t->tanggal_check_out}}</td>
            <td>{{$t->tipe_kamar}}</td>
            <td>{{$t->harga_kamar}}</td>

        </tr>
        @endforeach

    </tbody>
</table>