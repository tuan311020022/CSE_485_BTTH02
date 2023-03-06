<?php
Class index extends ManagerAuthorController{
    function __construct(){
        index::__construct();
    }
    function index(){
        $this->view->allrecords = $this->model->getAllrecords();
		$this->view->render('index/index');
		
	}
	function edit_index() 
	{
	
		$data = $_GET;
		
		if($_GET['id']=='')
		    {
				$this->view->pick='';
				$this->view->data=$data;
			} 
		else 
			{
				$this->view->pick=$_GET['id'];
				$this->view->content= $this->model->getOnerecord($_GET['id']);
			}
		
		$this->view->render('index/edit_index');

		
	}
	function edit_submit_index(){
	$arg=$_POST['id'];
		$data = array(
		'ma_tgia' =>$_POST['ma_tgia'],
		'ten_tgia' =>$_POST['ten_tgia'],
		'hinh_tgia' => $_POST['hinh_tgia']
		);
		$this->model->edit_submit_index($data,$arg);
		}
		header('location: index');
		}
 