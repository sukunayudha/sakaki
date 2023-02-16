<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        Aplikasi Management Pegawai
    </header>
    <div class="container">
      <aside>
        <ul class="menu">  
        </ul><ul class="menu">
            <li><a href=""> Dashboard</a></li>
            <li><a href=""> Data Pegawai</a></li>
            <li><a href=""> Data Jabatan</a></li>
        </ul>
      </aside>
      <section class="main">
        <h2 class="judul">data Pegawai</h2>
        <a href="from.html" class="tombol">tambah</a>
        <table class="table">
            <thead>
                <tr>
                    <td>No</td>
                    <td>foto</td>
                    <td>nama</td>
                    <td>jenis kelamin</td>
                    <td>tanggal lahir</td>
                    <td>Jabatan</td>
                    <td>keterangan</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                $quary= mysqli_query($icon,"selecet * from jabatan order by id jabatan desc");
                <tr>
                    <td>1</td>
                    <td><img src="css/akagami.jpg" width=""></td>
                    <td>Yudha T</td>
                    <td>L</td>
                    <td>Tanggal lahir</td>
                    <td>proplyer</td>
                    <td>-</td>
                    <td>
                        <a href="" class="tombol edit">edit</a>
                        <a href="" class="tombol hapus">hapus</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td><img src="css/akagami.jpg" width=""></td>
                    <td>Yudha T</td>
                    <td>L</td>
                    <td>Tanggal lahir</td>
                    <td>proplyer</td>
                    <td>-</td>
                    <td>
                        <a href="css/akagami.jpg" class="tombol edit">edit</a>
                        <a href="" class="tombol hapus">hapus</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td><img src="css/akagami.jpg" width=""></td>
                    <td>Yudha T</td>
                    <td>L</td>
                    <td>Tanggal lahir</td>
                    <td>proplyer</td>
                    <td>-</td>
                    <td>
                        <a href="" class="tombol edit">edit</a>
                        <a href="" class="tombol hapus">hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
      </section>
    </div>
</body>
</html>