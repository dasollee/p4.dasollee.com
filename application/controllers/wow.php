<?php
	class Wow extends CI_Controller{
		function index(){
			$this->load->helper('form');
			echo form_open('login');
			$d=array( 'name' => 'email', 'id' => 'email', 'placeholder' => 'email' );
			echo form_input($d);
		}
		public function comments(){
			echo 'LOOOOK ATTTHIS!';
		}
		function shoes($sho, $id){
			echo $sho;
			echo $id;
		}
		function lod($a='out'){
			$this->load->view($a);
		}
		function logg(){
			echo $_POST['uid'];
			echo $_POST['upw'];
		}
		function regis(){
			$this->load->view('register');

			if(isset($_POST['uid'])){
				echo $_POST['uid'];
			}
		}
	}




?>
