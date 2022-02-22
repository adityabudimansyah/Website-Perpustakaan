<div class="container">
<a href="<?=base_url()?>" class="btn btn-primary mt-3">Tambah Data</a>
<div class="card card-body mt-3">
    <h4>Data Buku Perpustakaan</h4>

<table class="table">
    <thead>
        <tr>
        <th scope="col">No</th>
        <th scope="col">Judul Buku</th>
        <th scope="col">Penulis</th>
        <th scope="col">Penerbit</th>
        <th scope="col">Tanggal Terbit</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1 ; foreach($perpustakaan as $mhs);?>
        <tr>
        <th scope="row"><?=$i++?></th>
        <td><?=$mhs['judul']?></td>
        <td><?=$mhs['penulis']?></td>
        <td><?=$mhs['penerbit']?></td>
        <td><?=$mhs['tanggal_terbit']?></td>
        <td>
            <a href="<?=base_url('example/deleteData')?>/<?=$mhs['id_mahasiswa']?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you Sure?')"></a>
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$mhs['id_mahasiswa']?>">
                Edit 
            </button>
        </td>
        </tr>
        <tr>
    </tbody>
    </table>
    </div>
    </div>