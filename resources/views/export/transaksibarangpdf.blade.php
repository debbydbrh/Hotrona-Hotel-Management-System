<table class = "table" style="border:1px solid #ddd">

    <thead>
 
        <tr>
        
          
          
            <th>Nama Barang</th>
            <th>Jumlah Barang</th>
            <th>Tanggal Masuk Barang</th>
            <th>Kategori</th>
            <th>Biaya</th>
         
        </tr>
    </thead>
    <tbody>
    @foreach($transaksibarang as $tb)
        <tr>
       
            <td>{{$tb->nama_barang}}</td>
            <td>{{$tb->jumlah_barang}}</td>
            <td>{{$tb->tanggal_masuk_barang}}</td>
            <td>{{$tb->kategori}}</td>
            <td>{{$tb->biaya}}</td>
  
    
        </tr>
        @endforeach

    </tbody>
</table>