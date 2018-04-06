<table class="table table-striped table-hover table-bordered" id="table-role">
    <thead>
    <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Nomor Sertikat</th>
        <th>Produsen</th>
        <th>Berlaku</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $key => $item)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$item['title']}}</td>
            <td>{{$item['nomor_sertifikat']}}</td>
            <td>{{$item['produsen']}}</td>
            <td>{{$item['berlaku_hingga']}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

