<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <title>Cetak Produk</title> 
    <style> 
        body { 
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif 
        } 
 
        ul li { 
            list-style: none 
        } 
 
        .wrap__page__title { 
            text-align: center 
        } 
 
        .page__title { 
            margin: 8px 0; 
        } 
 
        .title { 
            margin: auto 
        } 
 
        table { 
            width: 100%; 
            border-collapse: collapse; 
        } 
 
        table td, 
        table th { 
            border: 1px solid #ddd; 
            padding: 8px; 
        } 
 
      
 
        table th { 
            padding-top: 12px; 
            padding-bottom: 12px; 
            text-align: left; 
            background-color: blue; 
            color: white; 
        } 
 
    </style> 
</head> 
 
<body> 
 
    <div class="wrap__page__title"> 
        <h3 class="page__title">JURUSAN TEKNOLOGI INFORMASI</h3> 
        <h3 class="page__title">POLITEKNIK NEGERI MALANG</h3> 
    </div> 
    <hr> 
    <div class="wrap__page__title"> 
        <h1>Cetak Data Barang</h1> 
    </div> 
 
    <table> 
        <tr> 
            <th>Id</th> 
            <th>Nama</th> 
            <th>Jumlah</th> 
        </tr> 
        @foreach ($Product as $pg) 
            <tr> 
                <td>{{ $pg->Id }}</td> 
                <td>{{ $pg->Nama }}</td>
                <td>{{ $pg->Jumlah }}</td> 
            </tr> 
        @endforeach 
         
    </table> 
 
</body> 
 
</html>