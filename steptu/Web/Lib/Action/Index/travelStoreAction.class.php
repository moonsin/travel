<?php


	//旅游超市


	class travelStoreAction extends Action{

		public function travelStore(){
			$this->display();
		}

			

		public function hello(){
			$data['code'] = 1;
			$data['message'] = "hello";
			$data['address'] = array("重庆","长寿","天池");
			
			$this->ajaxReturn($data);
		}
	}


?>