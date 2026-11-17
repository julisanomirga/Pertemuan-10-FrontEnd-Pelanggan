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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tambah kota</h5>

                            <p class="card-text">
                                <form method="post">
                                    <div class="mb-3">
                                        <label for="nama_kota044" class="form-label">Nama Kategori</label>
                                        <input type="text" class="form-control" name="nama_kota044" id="nama_kota044" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="jenis_kota044" class="form-label">Deskripsi</label>
                                        <textarea name="jenis_kota044" id="jenis_kota044" class="form-control" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="provinsi044" class="form-label">Deskripsi</label>
                                        <textarea name="provinsi044" id="provinsi044" class="form-control" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="status044" class="form-label">Deskripsi</label>
                                        <textarea name="status044" id="status044" class="form-control" cols="30" rows="10"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                    <a href="<?= base_url('admin/kota2422500044') ?>" class="btn btn-danger">Kembali</a>
                                </form>
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
<!-- /.content-wrapper -->