<div class="x_panel" align="center">
    <div class="x_content">
        <div class="row">
            <div class="col-sm-3 col-md-3">
                <div class="thumbnail" style="height: auto; position: relative; left: 100%; width: 200%;">
                    <img src="<?php echo base_url(); ?>assets/img/upload/<?= $gambar; ?>" style="max-width:100%; max-height: 100%; height: 150px; width: 120px">
                    <div class="caption">
                        <h5 style="min-height:40px;" align="center"><?= $pengarang ?></h5>
                        <center>
                            <table class="table table-stripped">
                                <tr>
                                    <th nowrap>Judul Buku: </th>
                                    <td nowrap><?= $judul; ?></td>
                                    <td>&nbsp;</td>
                                    <th>Kategori: </th>
                                    <td><?= $kategori ?></td>
                                </tr>
                                <tr>
                                    <th nowrap>Penerbit: </th>
                                    <td><?= $penerbit ?></td>
                                    <td>&nbsp;</td>
                                    <th>Dipinjam: </th>
                                    <td><?= $dipinjam ?></td>
                                </tr>
                                <tr>
                                    <th nowrap>Tahun Terbit: </th>
                                    <td><?= substr($tahun, 0, 4) ?></td>
                                    <td>&nbsp;</td>
                                    <th>Dibooking: </th>
                                    <td><?= $dibooking ?></td>
                                </tr>
                                <tr>
                                    <th>ISBN: </th>
                                    <td><?= $isbn ?></td>
                                    <td>&nbsp;</td>
                                    <th>Tersedia: </th>
                                    <td><?= $stok ?></td>
                                </tr>
                            </table>
                        </center>
                        <p>
                            <a class="btn btn-outline-primary fas fw fa-shoppingcart" href="<?= base_url('booking/tambahBooking/' . $id); ?>"> Booking</a>
                            <span class="btn btn-outline-secondary fas fw fareply" onclick="window.history.go(-1)"> Kembali</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>