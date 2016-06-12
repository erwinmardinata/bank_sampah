<div class="row">
	<h3 class="page-header">Tabungan Nasabah</h3>
</div>
<!-- /.row -->
<div class="row">
	<div class="col-md-6">
	<form method="post" action="#">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th colspan="2" class="info">Data Nasabah</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>No. Rekening</td>
					<td>
						<div class="input-group">
						  <input type="text" class="form-control">
						  <span class="input-group-btn">
							<button class="btn btn-default" type="submit">Go!</button>
						  </span>
						</div><!-- /input-group -->
					</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>Erwin Mardinata</td>
				</tr>
				<tr>
					<td>Saldo Terakhir</td>
					<td>Rp. 700000000</td>
				</tr>
			</tbody>
		</table>
	</form>
	</div>
	<div class="col-md-6">
	<form method="post" action="#">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th colspan="2" class="info">Form Transaksi</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Jenis Transaksi</td>
					<td>
						<select class="form-control">
							<option></option>
							<option>Menabung</option>
							<option>Pengambilan</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Sampah Plastik</td>
					<td>
						<input type="number" min="0" value="0" class="form-control">
					</td>
				</tr>
				<tr>
					<td>Sampah Kertas</td>
					<td>
						<input type="number" min="0" value="0" class="form-control">
					</td>
				</tr>
				<tr>
					<td>Sampah Besi / Tembaga</td>
					<td>
						<input type="number" min="0" value="0" class="form-control">
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<button class="btn btn-info">Simpan</button>
						<button type="reset" class="btn btn-info">Reset</button>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
	</div>
</div>
<table class="table table-bordered">
	<thead>
		<tr>
			<th colspan="5" class="info">Riwayat Transaksi</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>No</th>
			<th>Debit</th>
			<th>Kredit</th>
			<th>Saldo</th>
			<th>Tanggal</th>
		</tr>
		<?php for($x = 1; $x <= 20; $x++){ ?>
		<tr>
			<td><?php echo $x; ?></td>
			<td>20000</td>
			<td>-</td>
			<td>5000000</td>
			<td>12 March 2016</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
