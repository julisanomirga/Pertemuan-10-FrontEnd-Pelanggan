```php
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
                            <h5 class="card-title">Ubah Ongkir</h5>

                            <p class="card-text">
                                <form method="post">
                                    <div class="mb-3">
                                        <label for="nama_ekspedisi044" class="form-label">Nama Ekspedisi</label>
                                        <input type="text"
                                            class="form-control"
                                            value="<?= $ongkir044['nama_ekspedisi044']; ?>"
                                            name="nama_ekspedisi044"
                                            id="nama_ekspedisi044">
                                    </div>

                                    <div class="mb-3">
                                        <label for="kota_tujuan044" class="form-label">Kota Tujuan</label>
                                        <textarea name="kota_tujuan044"
                                            id="kota_tujuan044"
                                            class="form-control"
                                            cols="30"
                                            rows="10"><?= $ongkir044['kota_tujuan044']; ?></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="tarif_per_kg044" class="form-label">Tarif Per kg</label>
                                        <textarea name="tarif_per_kg044"
                                            id="tarif_per_kg044"
                                            class="form-control"
                                            cols="30"
                                            rows="10"><?= $ongkir044['tarif_per_kg044']; ?></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="estimasi_hari044" class="form-label">Estimasi</label>
                                        <textarea name="estimasi_hari044"
                                            id="estimasi_hari044"
                                            class="form-control"
                                            cols="30"
                                            rows="10"><?= $ongkir044['estimasi_hari044']; ?></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                    <a href="<?= base_url('admin/ongkir044') ?>" class="btn btn-danger">Kembali</a>
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