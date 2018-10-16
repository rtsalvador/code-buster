<?php

class Index extends Controller
{

	function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->view->render('views/home/index.php');
	}
	
	public function pagination() {
		$this->view->render('views/index/pager.php');
	}

	public function step1() {
		$this->model->step1();
	}

	public function step2() {
		$this->model->step2();
	}

}

?>