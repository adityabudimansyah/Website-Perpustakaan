<div class="container const">
    <div class="card card-body border-bordered border-4 col-6 mx-auto">
        <form action="<?=base_url('example/addData')?>" method="post">
            <h3 class="text-center fw-bold">FORM DATA BUKU PERPUSTAKAAN </h3>
            <br>

            <div class="form-group text-end">
                <div class="row mb-3">
                    <div class="col-md-3 my-auto">
                        Judul Buku
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="judul" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="form-group text-end">
                <div class="row mb-3">
                    <div class="col-md-3 my-auto">
                        Penulis
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="penulis" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="form-group text-end">
                <div class="row mb-3">
                    <div class="col-md-3 my-auto">
                        Penerbit
                    </div>
                    <div class="col-md-9">
                    <input class="form-control" list="datalistOptions" name="penerbit" required >
                        <datalist id="datalistOptions">
                        <option value="Benteng Pustaka">
                        <option value="Buku Mojok">
                        <option value="Mizan">
                        <option value="Erlangga">
                        <option value="Gramedia">
                        <option value="Gagas Media">
                        <option value="Rak Buku">
                        <option value="PT. Indahjaya Adhipratama">
                        </datalist>
                    </div>
                </div>
            </div>

            <div class="form-group text-end">
                <div class="row mb-3">
                    <div class="col-md-3 my-auto">
                        Tanggal Terbit
                    </div>
                    <div class="col-md-9">
                        <input type="date" name="tgl_terbit" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="form-group text-end">
                <div class="row mb-3">
                    <div class="col-md-3 my-auto">
                        Kota Terbit
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="kota" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="form-group text-end">
                <div class="row mb-3">
                    <div class="col-md-3 my-auto">
                        Tebal Halaman
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control"  aria-describedby="basic-addon2" name="tebal" required>
                        <span class="input-group-text" id="basic-addon2">Halaman</span>
                    </div>
                </div>
            </div>

            
           <hr class="mb-4">
            <div class="d-grid gap-2">
            <button class="btn float-start" style="background-image: linear-gradient(rgba(91, 203, 173, 1), rgba(39, 194, 153, 1)); color: white"><i class="bi bi-save"></i>&nbsp;&nbsp;Simpan Data</button>
        </div>
                </form>
            </div>
        </div>