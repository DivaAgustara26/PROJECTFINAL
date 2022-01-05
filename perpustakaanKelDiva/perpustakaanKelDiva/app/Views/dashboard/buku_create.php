<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="col-md-10">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Buku</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-light alert-dismissible fade show" role="alert">
                <h4 class="alert-heading">Periksa Entrian Form</h4>
                </hr />
                <?php echo session()->getFlashdata('error'); ?>

                <button type="button" class="close" data-dismiss="alert" aria- label="Close">

                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <form class="form-horizontal" method="post" action="<?= base_url('buku/store') ?>">
            <?= csrf_field(); ?>
            <div class="card-body">

                <div class="form-group row">

                    <label for="id" class="col-sm-2 col-form-label">Kode buku</label>

                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="kode_buku" name="kode_buku" value="<?= old('kode_buku'); ?>">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="nama_buku" class="col-sm-2 col-form-label">Judul Buku</label>

                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="nama_buku" name="nama_buku" value="<?= old('nama_buku'); ?>">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="jenis_buku" class="col-sm-2 col-form-label">Jenis Buku</label>

                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="jenis_buku" name="jenis_buku" value="<?= old('jenis_buku'); ?>">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="stok" name="stok" value="<?= old('stok'); ?>">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="no_rak" class="col-sm-2 col-form-label">No Rak</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="no_rak" name="no_rak" value="<?= old('no_rak') ?>" />
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">

                <button type="submit" class="btn btn-primary">Simpan</button>

            </div>
            <!-- /.card-footer -->
        </form>
    </div>
    <!-- /.card -->
</div>
<?= $this->endSection('content'); ?>