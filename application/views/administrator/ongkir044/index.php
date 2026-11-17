<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Starter Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ongkir044</h5>
                            <p class="card-text">
                                <a href="<?= base_url('admin/ongkir044/tambah') ?>" class="btn btn-labeled btn-primary">
                                <span class="btn-label">
                                    <i class="fa fa-plus"></i>
                                </span>
                                ongkir044
                            </a>
                                <div class="card-body">
                                    <?php if ($this->session->flashdata('message')) : ?>
                                        <?= $this->session->flashdata('message') ?>
                                    <?php endif ?>
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>nama_ekspedisi044</th>
                                                <th>kota_tujuan044</th>
                                                <th>tarif_per_kg044</th>
                                                <th>estimasi_hari044</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($list_ongkir044 as $ongkir044) { ?>
                                                <tr data-widget="expandable-table" aria-expanded="false">
                                                    <td><?= $no ?></td>
                                                    <td><?= $ongkir044['nama_ekspedisi044'] ?></td>
                                                    <td><?= $ongkir044['kota_tujuan044'] ?></td>
                                                    <td><?= $ongkir044['tarif_per_kg044'] ?></td>
                                                    <td><?= $ongkir044['estimasi_hari044'] ?></td>
                                                    <td>
                                                        <a href="<?= base_url('admin/ongkir044/ubah/') ?><?= $ongkir044['id_ongkir044'] 
                                                        ?>"><span class="badge bg-success">Ubah</span></a>
                                                        <a href="<?= base_url('admin/ongkir044/hapus/')
                                                        ?><?= $ongkir044['id_ongkir044'] ?>"><span class="badge bg-danger">Hapus</span></a>
                                                    </td>
                                                </tr>
                                                <?php $no++;
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>