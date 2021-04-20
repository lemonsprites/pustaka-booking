<div class="container">
	<center>
		<table>
			<tr>
				<td>
					<div class="table-responsive full-width">
						<table class="table table-bordered table-striped table-hover" id="table-datatable">
							<tr>
								<th>No.</th>
								<th>Buku</th>
								<th>Penulis</th>
								<th>penerbit</th>
								<th>Tahun</th>
								<th>Pilihan</th>
							</tr>
							<?php
							$no = 1;
							foreach ($temp as $t) 
							{
							?>
								<tr>
									<td><?= $no; ?></td>
									<td>
										<img src="<?= base_url('assets/img/upload/' . $t['image']); ?>" class="rounded" alt="No Picture" width="10%">
									</td>46
									<td nowrap><?= $t['penulis']; ?></td>
									<td nowrap><?= $t['penerbit']; ?></td>
									<td nowrap><?= substr(
													$t['tahun_terbit'],
													0,
													4
												); ?></td>
									<td nowrap>
										<a href="<?= base_url('booking/hapusbooking/' . $t['id_buku']); ?>" onclick="return_konfirm('Yakin tidak Jadi Booking '.$t['judul_buku'])"><i class="btn btn-sm btn-outline-danger fas fw fa-trash"></i></a>
									</td>
								</tr>
							<?php $no++;
							} ?>
						</table>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<hr>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<a class="btn btn-sm btn-outline-primary" href="<?php echo base_url(); ?>"><span class="fas fw fa-play"></span> Lanjutkan Booking Buku</a>
					<a class="btn btn-sm btn-outline-success" href="<?php echo base_url() . 'booking/bookingSelesai/' . $this->session->userdata('id_user'); ?>"><span class="fas fw fa-stop"></span> Selesaikan Booking</a>
				</td>
			</tr>
		</table>
	</center>
</div>
