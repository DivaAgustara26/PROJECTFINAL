<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="col-md-10">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Peminjam</h3>
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
        <form class="form-horizontal" method="post" action="<?= base_url('peminjaman/store') ?>">
            <?= csrf_field(); ?>
            <div class="card-body">

                <div class="form-group row">

                    <label for="n_mhsiswa" class="col-sm-2 col-form-label">Nama Mahasiswa</label>

                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="n_mhsiswa" name="n_mhsiswa" value="<?= old('nama'); ?>">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>

                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= old('alamat'); ?>">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>

                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= old('jurusan'); ?>">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="buku" class="col-sm-2 col-form-label">buku</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="buku" name="buku" value="<?= old('buku') ?>" />
                    </div>

                </div>
                <div class="form-group row">
                    <label for="t_pinjam" class="col-sm-2 col-form-label">Tanggal Pinjam
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="t_pinjam" name="t_pinjam" value="<?= old('t_pinjam') ?>" />
                    </div>

                </div>
                <div class="form-group row">

                    <label for="t_kembali" class="col-sm-2 col-form-label">Tanggal Kembali</label>

                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="t_kembali" name="t_kembali" value="<?= old('t_kembali') ?>" />
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