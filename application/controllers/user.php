<?php
class User extends CI_Controller {
	public function index(){
		$this->load->view('main');
	}
	function login() {
		$this->load->view('login');

		if(isset($_POST['uid'])){
			//do login --db
			$id=$_POST['uid'];
			$pw=md5($_POST['upw']);
			$this->load->model('user_model');
			$qur="select * from user where uid='$id' and upw='$pw'";
			$this->user_model->user_login($id,$pw,$qur);

		}
	}
	function register(){
		$this->load->view('register');

		if(isset($_POST['uid'])){
			//do register --db
			$id=$_POST['uid'];
			$pw=md5($_POST['upw']);
			$qur="insert into user value('$id','$pw')";
			$this->load->model('user_model');
			$this->user_model->user_register($id,$pw,$qur);
		}
	}
}
