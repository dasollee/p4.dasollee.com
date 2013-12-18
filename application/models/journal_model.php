<?php
class Journal_model extends CI_Model {
	function load_page($month,$date){
		$this->load->view('journal');
		$this->load->database();
		$this->load->helper('form');
		$this->load->library('session');
		$mon_arr=Array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec");
		
		$uid=$this->session->userdata('uid');
		$qur="select * from journal where month='$month' and date='$date' and uid='$uid'";
		$result=$this->db->query($qur);
		$t2013=$t2014=$t2015=$t2016=$t2017="";
			if($result->num_rows() > 0){
				foreach($result->result() as $row){
					switch($row->year){
					case '2013' : $t2013=$row->text; break;
					case '2014' : $t2014=$row->text; break;
					case '2015' : $t2015=$row->text; break;
					case '2016' : $t2016=$row->text; break;
					case '2017' : $t2017=$row->text; break;
					}
				}
			}else{
			$qur1="insert into journal value('2013','$month','$date','','$uid')";
			$qur2="insert into journal value('2014','$month','$date','','$uid')";
			$qur3="insert into journal value('2015','$month','$date','','$uid')";
			$qur4="insert into journal value('2016','$month','$date','','$uid')";
			$qur5="insert into journal value('2017','$month','$date','','$uid')";
			$this->db->query($qur1);
			$this->db->query($qur2);
			$this->db->query($qur3);
			$this->db->query($qur4);
			$this->db->query($qur5);
		}
		echo form_open('/journal/view/'.$month.'/'.$date);
		echo "<span id='header'>".$mon_arr[$month-1].". ".$date."</span><br>";
		echo "2013<br>";
		echo form_textarea(array('name' => 't2013', 'placeholder' => '2013 journal area', 'value' => $t2013));
		echo "<br>";
		echo "2014<br>";
		echo form_textarea(array('name' => 't2014', 'placeholder' => '2014 journal area', 'value' => $t2014));
		echo "<br>";
		echo "2015<br>";
		echo form_textarea(array('name' => 't2015', 'placeholder' => '2015 journal area', 'value' => $t2015));
		echo "<br>";
		echo "2016<br>";
		echo form_textarea(array('name' => 't2016', 'placeholder' => '2016 journal area', 'value' => $t2016));
		echo "<br>";
		echo "2017<br>";
		echo form_textarea(array('name' => 't2017', 'placeholder' => '2017 journal area', 'value' => $t2017));
		echo "<br>";
		echo form_hidden('hidden','hidden');

		echo form_submit('submit','SAVE');
		echo form_close();
		echo "</body></html>";
		
	}


	function journal_save($month,$date,$a,$b,$c,$d,$e){
		$this->load->database();
		$this->load->library('session');
		$uid=$this->session->userdata('uid');
		$qur1="update journal set text='$a' where year=2013 and month='$month' and date='$date' and uid='$uid'";
		$qur2="update journal set text='$b' where year=2014 and month='$month' and date='$date' and uid='$uid'";
		$qur3="update journal set text='$c' where year=2015 and month='$month' and date='$date' and uid='$uid'";
		$qur4="update journal set text='$d' where year=2016 and month='$month' and date='$date' and uid='$uid'";
		$qur5="update journal set text='$e' where year=2017 and month='$month' and date='$date' and uid='$uid'";
		$this->db->query($qur1);
		$this->db->query($qur2);
		$this->db->query($qur3);
		$this->db->query($qur4);
		$this->db->query($qur5);
	}
}
