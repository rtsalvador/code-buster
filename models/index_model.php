<?php

class Index_model extends Model
{

	function __construct()
	{
		parent::__construct();
	}
	
	public function step1() {
	
		$data = DAOFactory::getAuthorsDAO()->step1();
		echo json_encode($data);
	}

	public function step2() {
		$data = DAOFactory::getAuthorsDAO()->step2($_POST['startPage'], $_POST['perPage']);
		echo json_encode($data);
	}

}

?>