<?php


	//旅游超市


	class travelStoreAction extends Action{

		public function travelStore(){
			if(IS_POST){
				$shifadi = I('smshifadi');
				$mudidi= I('smmudidi');
				$qishiri= I('smqishiri');
				$jiezhiri= I('smjiezhiri');
				 
				if($shifadi!=''){
					$data['startPos'] = array('LIKE',"%".I('smshifadi')."%"); 
				}
				if($mudidi!=''){
					$data['endPos'] = array('LIKE',"%".I('smmudidi')."%"); 
				}
				if($qishiri!=''){
					$data['startTime'] = array('EGT',I('smqishiri')); 
				}
				if($jiezhiri!=''){
					$data['endTime'] = array('ELT',I('smjiezhiri')); 
				}

				$store = M('travelscency')->where($data)->order("id DESC")->select();
				$this->assign("store",$store);

			}else{
				$store = M('travelscency')->where($data)->order("id DESC")->select();
				$this->assign("store",$store);
			}
			$this->display();
		}
	}


?>