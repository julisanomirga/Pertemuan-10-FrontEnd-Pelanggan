php
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Starter Page</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ubah Kota</h5>

                            <p class="card-text">
                                <form method="post">
                                    <div class="mb-3">
                                        <label for="nama_kota044" class="form-label">Nama Ekspedisi</label>
                                        <input type="text"
                                            class="form-control"
                                            value="<?= $kota2422500044['nama_kota044']; ?>"
                                            name="nama_kota044"
                                            id="nama_kota044">
                                    </div>

                                    <div class="mb-3">
                                        <label for="jenis_kota044" class="form-label">Kota Tujuan</label>
                                        <textarea name="jenis_kota044"
                                            id="jenis_kota044"
                                            class="form-control"
                                            cols="30"
                                            rows="10"><?= $kota2422500044['jenis_kota044']; ?></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="provinsi044" class="form-label">Tarif Per kg</label>
                                        <textarea name="provinsi044"
                                            id="provinsi044"
                                            class="form-control"
                                            cols="30"
                                            rows="10"><?= $kota2422500044['provinsi044']; ?></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="status044" class="form-label">Estimasi</label>
                                        <textarea name="status044"
                                            id="status044"
                                            class="form-control"
                                            cols="30"
                                            rows="10"><?= $kota2422500044['status044']; ?></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                    <a href="<?= base_url('admin/kota2422500044') ?>" class="btn btn-danger">Kembali</a>
                                </form>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content-wrapper -->
```