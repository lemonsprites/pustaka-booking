<div class="container">
	<center>
		<table>
			<tr>
				<td>
					<div class="table-responsive full-width">
						<table class="table table-bordered table-striped table-hover" id="table-datatable">
							<tr>
								<th>No.</th>
								<th>ID Booking</th>
								<th>Tanggal Booking</th>
								<th>ID User</th>
								<th>Aksi</th>
								<th>Denda / Buku /Hari</th>
								<th>Lama Pinjam</th>
							</tr>
							<?php
							$no = 1;
							foreach ($pinjam as $p) 
							{
							?>
								<tr>
									<td><?= $no; ?></td>
									<td><a class="btn btn-link" href="<?= base_url('pinjam/bookingDetail/' . $p['id_booking']); ?>"><?= $p['id_booking']; ?></a></td>
									<td><?= $p['tgl_booking']; ?></td>
									<td><?= $p['id_user']; ?></td>
									<form action="<?= base_url('pinjam/pinjamAct/' . $p['id_booking']); ?>" method="post">
										<td nowrap>
											<button type="submit" class="btn btn-sm btn-outline-info"><i class="fas fa-fw fa-cart-plus"></i> Pinjam</button>
										</td>
										<td>
											<input class="form-check-user rounded-sm" style="width:100px" type="text" name="denda" id="denda" value="5000">
											<?= form_error(); ?>
										</td>
										<td>
											<input class="form-check-user rounded-sm" style="width:100px" type="text" name="lama" id="lama" value="3">
											<?= form_error(); ?>
										</td>
									</form>
								</tr>
							<?php $no++;
							} ?>
						</table>
					</div>
				</td>
			</tr>
			<tr>
				<td align="center"><a href="<?= base_url('pinjam/daftarBooking');?>" class="btn btn-link"><i class="fas fa-fw fa-refresh"></i> Refresh</a></td>
			</tr>
		</table>
	</center>
</div>
