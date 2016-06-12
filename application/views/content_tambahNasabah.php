<div class="row">
	<h1 class="page-header">Input Nasabah Baru</h1>
</div>
<form class="form-horizontal" role="form" method="post" action="<?php echo site_url("banksampah/prosesInputNasabah"); ?>">
  <div class="form-group">
    <label class="col-sm-2 control-label">No. Rekening</label>
    <div class="col-sm-6">
      <input type="text" name="no_rekening" class="form-control" readonly value="<?php echo $no_rekening; ?>" placeholder="No. Rekening">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Nama</label>
    <div class="col-sm-6">
      <input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>" placeholder="Nama">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">RT / RW / Kelas</label>
    <div class="col-sm-6">
      <input type="text" name="rt_rw_kelas" class="form-control" value="<?php echo $rt_rw_kelas; ?>" placeholder="RT / RW / Kelas">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Kelurahan / Sekolah</label>
    <div class="col-sm-6">
      <input type="text" name="kelurahan_sekolah" class="form-control" value="<?php echo $kelurahan_sekolah; ?>" placeholder="Kelurahan / Sekolah">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Kelompok</label>
    <div class="col-sm-6">
      <input type="text" name="kelompok" class="form-control" value="<?php echo $kelompok; ?>" placeholder="Kelompok">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Jenis</label>
    <div class="col-sm-6">
      <input type="text" name="jenis" class="form-control" value="<?php echo $jenis; ?>" placeholder="Jenis">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-6">
      <button type="submit" class="btn btn-info">Daftar</button>
      <button type="reset" class="btn btn-info">Cencel</button>
    </div>
  </div>
</form>
