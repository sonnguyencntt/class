<?php

require_once '../../modals/group_modal.php';


	 class UserController {


	 	public function getGroup(){
	 		echo "sdfsdfds";
	 		
	 		
	 		

		 }
		
	 	public function datve(){
	 		$khoihanh= filter_input(INPUT_POST, 'khoihanh',FILTER_SANITIZE_STRING);
	 		$diemden= filter_input(INPUT_POST, 'diemden',FILTER_SANITIZE_STRING);
	 		$thoigian= filter_input(INPUT_POST, 'thoigian',FILTER_SANITIZE_STRING);

	 		$acc=User::timchuyendi($khoihanh,$diemden,$thoigian);
	 		
	 		
	 		Base2Controller::render("viewtravel","search",array('acc'=> $acc,'khoihanh'=>$khoihanh,'diemden'=>$diemden,'thoigian'=>$thoigian));

	 		
	 		
	 	}
	 	public function view(){
	 		
	 		Base2Controller::render("view","buslist",array());
	 	}
	 
}

  ?>