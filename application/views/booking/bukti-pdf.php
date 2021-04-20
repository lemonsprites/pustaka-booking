<table border=1>
	<?php
	foreach ($useraktif as $u) {
	?>
		<tr>
			<th>Nama Anggota : <?= $u->nama; ?></th>
		</tr>
		<tr>
			<th>Buku Yang dibooking:</th>
		</tr>
	<?php } ?>
	<tr>
		<td>
			<div class="table-responsive">
				<table border=1>
					<tr>
						<th>No.</th>
						<th>Buku</th>
						<th>Penulis</th>
						<th>penerbit</th>
						<th>Tahun</th>
					</tr>
					<?php
					$no = 1;
					foreach ($items as $i) {
					?>
						<tr>
							<td><?= $no; ?></td>
							<td>
								<?= $i['judul_buku']; ?>
							</td>
							<td><?= $i['pengarang']; ?></td>
							<td><?= $i['penerbit']; ?></td>
							<td><?= $i['tahun_terbit']; ?></td>
						</tr>
					<?php $no++;
					} ?>
				</table>
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<hr>
		</td>
	</tr>
	<tr>
		<td align="center">
			<?= md5(date('d M Y H:i:s')); ?>
		</td>
	</tr>
</table>
