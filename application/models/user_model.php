<?php
class User_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	function user_login($id,$qw,$qur){
			$this->db->query($qur);
			if($this->db->affected_rows()){
				$this->load->helper('url');
				$this->load->library('session');
				
				$arr=array(
					'uid' => $id,
					'logged_in' => TRUE
				);
				$this->session->set_userdata($arr);
				$month=date('m'); $date=date('d');
				redirect('/journal/view/'.$month.'/'.$date);
			}else{
				echo "login failed. check email or password";
			}
			
	}
	function user_register($id,$pw,$qur){
			$this->db->query($qur);
			if($this->db->affected_rows()<0){
				echo "email duplicated";
			}else{
				echo "successfully registered - $id";
			}
	}
}
