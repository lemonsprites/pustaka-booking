<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use Dompdf\Dompdf;

class Dompdf_gen {
		
	public function __construct() {
		
		require_once APPPATH.'third_party/dompdf/autoload.inc.php';
		
		$pdf = new Dompdf();
		
		$CI =& get_instance();
		$CI->dompdf = $pdf;
	}
}
