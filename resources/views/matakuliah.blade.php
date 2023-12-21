<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

    <img src="img/IMG1.JPG" alt="" height="60px" width="47px">

    <h3>
    <p>Biodata</p>
        <p>
            
            <table>
                <tr>
                    <td>NIM</td>
                    <td>: 200170272</td>
                </tr>
                <tr>
                    <td>NAMA</td>
                    <td>: ZULFAJRI</td>
                </tr>
                <tr>
                    <td>JURUSAN</td>
                    <td>: INFORMATIKA</td>
                </tr>
                <tr>
                    <td>PROGRAM STUDI</td>
                    <td>: TEKNIK INFORMATIKA</td>
                </tr>
                <tr>
                    <td>MATA KULIAH</td>
                    <td>: PEMROGRAMAN LANJUT</td>
                </tr>
            </table>
        </p>
    </h3>
    <h1>List Matakuliah Semester Ganjil 2023/2024</h1>
        <h3>Jumlah Pada List Sebanyak : {{ $jumlah }}</h3>
        <ul>
            @foreach ($matakuliah as $b)
            <li>{{ $b }}</li>
            @endforeach
        </ul>
     
    </body>
</html>