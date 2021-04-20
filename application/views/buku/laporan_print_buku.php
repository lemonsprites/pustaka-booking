<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>
	<style type="text/css">
		.table-data {
			width: 100%;
			border-collapse: collapse;
		}

		.table-data tr th,
		.table-data tr td {
			border: 1px solid black;
			font-size: 11pt;
			font-family: Verdana;
			padding: 10px 10px 10px 10px;
		}

		h3 {
			font-family: Verdana;
		}
	</style>
	<h3>
		<center>Laporan Data Buku Perputakaan Online</center>
	</h3>
	<br />
	<table class="table-data">
		<thead>
			<tr>
				<th>No</th>
				<th>Judul Buku</th>
				<th>Pengarang</th>
				<th>Terbit</th>
				<th>Tahun Penerbit</th>
				<th>ISBN</th>
				<th>Stok</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach ($buku as $b) 
			{
			?>
				<tr>
					<th scope="row"><?= $no++; ?></th>
					<td><?= $b['judul_buku']; ?></td>
					<td><?= $b['pengarang']; ?></td>
					<td><?= $b['penerbit']; ?></td>
					<td><?= $b['tahun_terbit']; ?></td>
					<td><?= $b['isbn']; ?></td>
					<td><?= $b['stok']; ?></td>
				</tr>
			<?php
			}
			?>
		</tbody>
	</table>
	<script type="text/javascript">
		window.print();
	</script>
</body>

</html>
