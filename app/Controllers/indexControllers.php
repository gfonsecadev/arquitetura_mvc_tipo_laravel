<?php

namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;
class IndexControllers extends Action{

	
	public function index(){
		
		$this->render('home');
	}


	

}

?>