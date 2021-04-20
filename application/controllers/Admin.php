<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		cek_login();
		cek_user();
	}

	public function index()
	{
		$data['judul'] = 'Dashboard';
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['anggota'] = $this->ModelUser->getUserLimit()->result_array();
		$data['buku'] = $this->ModelBuku->getLimitBuku()->result_array();
		
		//mengupdate stok dan dibooking pada tabel buku
		$detail = $this->db->query("SELECT*FROM booking,booking_detail WHERE DAY(curdate()) < DAY(batas_ambil) AND booking.id_booking=booking_detail.id_booking")->result_array();
		foreach ($detail as $key) 
		{
			$id_buku = $key['id_buku'];
			$batas = $key['tgl_booking'];
			$tglawal = date_create($batas);
			$tglskrg = date_create();
			$beda = date_diff($tglawal, $tglskrg);
			
			
			if ($beda->days > 2)
				$this->db->query("UPDATE buku SET stok=stok+1, dibooking=dibooking-1 WHERE id='$id_buku'");
		}

		//menghapus otomatis data booking yang sudah lewat dari 2 hari
		$booking = $this->ModelBooking->getData('booking');
		if (!empty($booking)) 
		{
			foreach ($booking as $bo) 
			{
				$id_booking = $booking->id_booking;
				$tglbooking = $booking->tgl_booking;
				$tglawal = date_create($tglbooking);
				$tglskrg = date_create();
				$beda = date_diff($tglawal, $tglskrg);
				if ($beda->days > 2) 
				{
					$this->db->query("DELETE FROM booking WHERE id_booking='$id_booking'");
					$this->db->query("DELETE FROM booking_detail WHERE id_booking='$id_booking'");
				}
			}
		}


		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer');
	}
}
