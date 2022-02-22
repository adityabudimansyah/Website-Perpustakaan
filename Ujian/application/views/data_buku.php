<div class="container">
  <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('example/index'); ?>">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Data Buku</li>
    </ol>
  </nav>
  <h2 class="text-center">Data Buku Perpustakaan</h2>
  <hr>
  <a href="<?= base_url('example/index'); ?>" class="btn btn-success mt-3 mb-4" style="background-image: linear-gradient(rgba(91, 203, 173, 1), rgba(39, 194, 153, 1)); "><i class="bi bi-plus-lg"></i>&nbsp;Tambah Data</a>
  <div class="row">
    <div class="scroll col-md">
    <table id="example" class="table table-striped">
        <thead>
            <tr class="text-center">
                <th scope="col">No</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Penulis</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Tanggal Terbit</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $i = 1;
        foreach ($perpustakaan as $row) : ?>
            <tr class="text-center">
                <th scope="row"><?= $i++; ?></th>
                <td><?= $row['judul']; ?></td>
                <td><?= $row['penulis']; ?></td>
                <td><?= $row['penerbit']; ?></td>
                <td><?= $row['tanggal_terbit']; ?></td>
                <td>
                
                  <button type="button" class="btn btn-success btn-sm px-2" data-bs-toggle="modal" data-bs-target="#exampleModal2<?=$row['id_perpustakaan']?>">
                    <i class="bi bi-info-circle"></i> Details 
                  </button>
                    <button type="button" class="btn btn-primary btn-sm px-2" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$row['id_perpustakaan']?>">
                        <i class="bi bi-pencil-square"></i> Edit 
                    </button> 
                    <a href="<?=base_url('example/deleteData')?>/<?=$row['id_perpustakaan']?>" class="btn btn-danger btn-sm px-2" onclick="return confirm('Are you Sure?')">
                    <i class="bi bi-trash"></i> Hapus 
                    </a>
              </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
</table>
    </div>
  </div>
  
</div>

<?php $i=1 ; foreach($perpustakaan as $edit):?>
    <div class="modal fade" id="exampleModal<?=$edit['id_perpustakaan']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data Buku Perpustakaan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="<?=base_url('example/editData')?>" method="post">

          <div class="form-group mb-2">
            <label for="">Judul Buku</label>
            <input type="hidden" name="id_perpustakaan" class="form-control" value="<?=$edit['id_perpustakaan']?>">
            <input type="text" name="judul" class="form-control" value="<?=$edit['judul']?>">
          </div>

          <div class="form-group mb-2">
            <label for="">Penulis</label>
            <input type="text" name="penulis" class="form-control" value="<?=$edit['penulis']?>">
          </div>

          <div class="form-group mb-2">
            <label for="">Penerbit</label>
            <input type="text" name="penerbit" class="form-control" value="<?=$edit['penerbit']?>">
          </div>

          <div class="form-group mb-2">
            <label for="">Tanggal Terbit</label>
            <input type="date" name="tgl_terbit" class="form-control" value="<?=$edit['tanggal_terbit']?>">
          </div>

          <div class="form-group mb-2">
            <label for="">Kota Terbit</label>
            <input type="text" name="kota" class="form-control" value="<?=$edit['kota_terbit']?>">
          </div>

          <div class="form-group mb-2">
            <label for="">Tebal Halaman</label>
            <input type="text" name="tebal" class="form-control" value="<?=$edit['tebal']?> ">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-tutup" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <?php endforeach;?>

  <?php $i=1 ; foreach($perpustakaan as $detail):?>
    <div class="modal fade" id="exampleModal2<?=$detail['id_perpustakaan']?>" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel2">Detail Data Buku Perpustakaan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="<?=base_url('example/editData')?>" method="post">

          <div class="form-group mb-2">
            <div class="row g-0">
              <div class="col-4">
                <input class="form-control form-border form-tulisan" type="text" name="judul" value="Judul Buku" aria-label="Disabled input example" disabled readonly>
              </div>
              <div class="col-8">            
                <input type="hidden" name="id_perpustakaan" class="form-control" value="<?=$detail['id_perpustakaan']?>">
                <input class="form-control form-border bg-transparent" type="text" name="judul" value="<?=$detail['judul']?>" aria-label="Disabled input example" disabled readonly>
              </div>
            </div>
          </div>

          <div class="form-group mb-2">
            <div class="row g-0">
              <div class="col-4">
                <input class="form-control form-border form-tulisan" type="text" name="judul" value="Penulis" aria-label="Disabled input example" disabled readonly>
              </div>
              <div class="col-8">            
                <input class="form-control form-border bg-transparent" type="text" name="penulis" value="<?=$detail['penulis']?>" aria-label="Disabled input example" disabled readonly>
              </div>
            </div>
          </div>

          <div class="form-group mb-2">
            <div class="row g-0">
              <div class="col-4">
                <input class="form-control form-border form-tulisan" type="text" name="penerbit" value="Penerbit" aria-label="Disabled input example" disabled readonly>
              </div>
              <div class="col-8">            
                <input class="form-control form-border bg-transparent" type="text" name="penerbit" value="<?=$detail['penerbit']?>" aria-label="Disabled input example" disabled readonly>
              </div>
            </div>
          </div>

          <div class="form-group mb-2">
            <div class="row g-0">
              <div class="col-4">
                <input class="form-control form-border form-tulisan" type="text" name="penerbit" value="Tanggal Terbit" aria-label="Disabled input example" disabled readonly>
              </div>
              <div class="col-8">            
                <input class="form-control form-border bg-transparent" type="date" name="tgl_terbit" value="<?=$detail['tanggal_terbit']?>" aria-label="Disabled input example" disabled readonly>
              </div>
            </div>
          </div>

          <div class="form-group mb-2">
            <div class="row g-0">
              <div class="col-4">
                <input class="form-control form-border form-tulisan" type="text" name="kota" value="Kota Terbit" aria-label="Disabled input example" disabled readonly>
              </div>
              <div class="col-8">            
                <input class="form-control form-border bg-transparent" type="text" name="kota" value="<?=$detail['kota_terbit']?> " aria-label="Disabled input example" disabled readonly>
              </div>
            </div>
          </div>
          
          <div class="form-group mb-2">
            <div class="row g-0">
              <div class="col-4">
                <input class="form-control form-border form-tulisan" type="text" name="tebal" value="Tebal Halaman" aria-label="Disabled input example" disabled readonly>
              </div>
              <div class="col-8">            
                <input class="form-control form-border bg-transparent" type="text" name="tebal" value="<?=$detail['tebal']?> Halaman" aria-label="Disabled input example" disabled readonly>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-tutup" data-bs-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <?php endforeach;?>

  