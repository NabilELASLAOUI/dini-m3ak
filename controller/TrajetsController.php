<?php 
class TrajetsController extends Controller{
	
	/**
	* Blog, liste les articles
	**/
	function index(){
		$this->loadModel('Trajet');
		$d['villes'] = $this->Trajet->find();
		$this->set($d);
	}

	function ajouter(){
	}
}
