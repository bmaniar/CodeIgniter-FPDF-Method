<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fpdf extends CI_Controller {

	/**
	 * Example: FPDF 
	 *
	 * Documentation: 
	 * http://www.fpdf.org/ > Manual
	 *
	 */
	public function index() {	
		$this->load->library('fpdf_master);
		
		$this->fpdf->SetFont('Arial','B',18);
		$this->fpdf->Cell(50,10,'Hello World!');
		//All text which have to print should be goes here
		echo $this->fpdf->Output('hello_world.pdf','D');// Name of PDF file 
	}
}
