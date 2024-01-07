<?php
namespace App;


use MF\Route\Bootstrap;
class Route extends Bootstrap{
	

	protected function initRoutes(){
		$routes['home']=array(
			'route'=>"/",
			'controller'=>'indexControllers',
			'acao'=>'index'
		);

		
		$this->setRoutes($routes);
	}


	

	
}



?>