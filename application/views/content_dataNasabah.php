<div class="row">
	<h1 class="page-header">Data Nasabah</h1>
</div>
<!-- /.row -->
<div>
	<button class="btn btn-info" style="float: right" onclick="location.href='<?php echo site_url('banksampah/tambahNasabah'); ?>'">Tambah Nasabah</button>
</div><br><br>
<table class="table table-bordered">
	<thead>
		<tr class="info">
			<th>No</th>
			<th>No. Rekening</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
	<?php if($query == null) { ?>
		<tr>
			<td colspan="5" align="center"> - NO DATA - </td>
		</tr>
	<?php 
		} else {
			$x=1; foreach($query as $row):
	?>
		<tr>
			<td><?php echo $x; ?></td>
			<td><?php echo $row->no_rekening; ?></td>
			<td><?php echo $row->nama; ?></td>
			<td><?php echo $row->rt_rw_kelas; ?></td>
			<td style="width: 103px">
				<a href="#" class="btn btn-default" title="edit"><span class="glyphicon glyphicon-edit"></span></a>
				<a href="#" onclick="return confirm('anda yakin ?')" class="btn btn-default" title="delete"><span class="glyphicon glyphicon-trash"></span></a>
			</td>
		</tr>
	<?php
			$x++; endforeach;
		}
	?>
	</tbody>
</table>
