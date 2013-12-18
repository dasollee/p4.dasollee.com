<?php
class Journal extends CI_Controller {
	public function index(){
		$this->load->helper('url');
		if(isset($_POST['month'])){
			redirect('/journal/view/'.$_POST['month'].'/'.$_POST['date']);
		}
	}
	function view( $month, $date ){
		$this->load->model('journal_model');
		if(isset($_POST['hidden'])){
			$this->journal_model->journal_save($month,$date,$_POST['t2013'],$_POST['t2014'],$_POST['t2015'],$_POST['t2016'],$_POST['t2017']);
		}
		$this->journal_model->load_page($month,$date);
		
	}
}
