<div class="col-sm-12">

	<a href="<?= base_url('dashboard/tambah') ?>" class="btn btn-success">Add New</a>
	<br><br>


	<?php
	if (!empty(session()->getFlashdata('success'))) { ?>
		<div class="alert alert-success">
			<?= session()->getFlashdata('success'); ?>
		</div>
	<?php } ?>

	<table id="example1" class="table table-bordered table-striped">
		<thead>
			<th>No.</th>
			<th>Provinsi</th>
			<th>Kabupaten/Kota</th>
			<th>NIK</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Agama</th>
		</thead>
		<tbody>
			<?php $no = 1;
			foreach ($ktp as $key => $value) { ?>

				<tr>
					<td><?= $no++; ?></td>
					<td><?= $value['nama_provinsi']; ?></td>
					<td><?= $value['kabupaten_kota']; ?></td>
					<td><?= $value['NIK']; ?></td>
					<td><?= $value['nama']; ?></td>
					<td><?= $value['jenis_kelamin']; ?></td>
					<td><?= $value['agama']; ?></td>
					<td>
						<?php
						$enkrip = urlencode(base64_encode($value['ktp_id']));
						?>
						<a href="<?= base_url('ktp/edit/' . $enkrip) ?>" class="btn btn-sm btn-warning">Edit</a>
						<a href="<?= base_url('dashboard/delete/' . $value['ktp_id']) ?>" class="btn btn-sm btn-danger" onClick="return confirm('Apakah Ingin Hapus Data...?')">Delete</a>
					</td>
				</tr>
			<?php 	} ?>
		</tbody>
	</table>

</div>