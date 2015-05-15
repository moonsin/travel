<?php

	 
	//旅游志模块


	class travelBookAction extends Action{

		public function index(){  //显示旅游志模块的首页 ， 

			$list = M("travelbook");
			$count = $list->count();
			import('ORG.Util.Page');
			$page = new Page($count,2);
			$show = $page->show();
			$this->assign('page',$show);

			$list = $list->limit($page->firstRow.','.$page->listRows)->order('id desc')->select();

			$this->assign('list',$list);


			$this->display('travelBook');
		}

		public function felling() //得到一个旅游志和作者的数据
		{
			$id = I('id');

			$this->updateReadNumber($id); 

			$this->data = M('travelbook')->find($id);  //travelbook 包含的usertable 和 travelnote的数据是一个视图

			$this->note = M('travelnote')->field('note')->find($id); // 包含旅游志的内容

			//分页查看评论
			$list = M("notecommentview");
			$count = $list->where('noteId='.$id)->count();

			$this->assign('count',$count);  //品论的条数

			import('ORG.Util.Page');

			$page = new Page($count,2);
			$show = $page->show();
			$this->assign('page',$show);
			$list = $list->where('noteId='.$id)->limit($page->firstRow.','.$page->listRows)->order('id desc')->select();
			$this->assign('list',$list);

		
			$this->display();
		}

		public function updateReadNumber($id){
			
			$list = M('travelnote');
			$data = $list -> find($id);
			$data['readNumber'] = $data['readNumber'] + 1;

			$list->save($data);	
	
		}

		public function upadateLikeNumber(){ //更新喜欢的数据
			$id = I('id');  //得到旅游志的id
			$list = M('travelnote');
			$data = $list -> find($id);
			$data['likeNumber'] = $data['likeNumber'] + 1;

			$list->save($data);	

			$this->ajaxReturn($data['likeNumber']);		
		}

		public function fellingComment()
		{	
			session('id','2');
			if(session('id')){
				if(I('content') && I('content') != null){
					$data['noteId'] = I('id');
					$data['content'] = I('content');
					$data['userId'] =	session('id');
					$data['time'] = date("Y-m-d");

					if(M('notecomment')->add($data)){
						$msg['code'] = 1;
						$msg['msg'] = 'sussess';
					}else{
						$msg['code'] = 0;
						$msg['msg'] = 'error';
					}

				}else{
					$msg['code'] = 0;
					$msg['msg'] = '内容为空';
				}
			}else{
				$msg['code'] = 0;
				$msg['msg'] = '请登录';
			}
			
			$this->ajaxReturn($msg,'json');
		}

		public function letterList(){

			$listLetters = M("letterlist");
			$count = $listLetters->count();
			import('ORG.Util.NPage');
			$pageLetters = new NPage($count,2);
			$show = $pageLetters->show();
			$this->assign('pageLetters',$show);

			$listLetters = $listLetters->limit($pageLetters->firstRow.','.$pageLetters->listRows)->order('id desc')->select();
			$this->assign('listLetters',$listLetters);

			$this->display();
		}

		public function letter()
		{
			$id = I('id');
			$this->data = M('letterlist')->find($id);  //信头部分
			$this->note = M('letter')->field('content')->find($id); // 信的内容
			$this->display('letter');
		}

	}


?>