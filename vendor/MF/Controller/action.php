<?php
namespace MF\Controller;

abstract class Action{
	protected $data;
	public function __construct(){
		
	}


	protected function render($view){
		
		require_once "../app/Views/layout.phtml";
	}

	protected function content($view){
		$data=$this->data;
		$classAtual=get_class($this);
		$classAtual=str_replace("App\\Controllers\\", "", $classAtual);
		$classAtual=strtolower(str_replace("Controllers","",$classAtual));
		require_once "../app/Views/".$classAtual."/".$view.".phtml";

	}


}

?>