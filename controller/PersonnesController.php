<?php 
class PersonnesController extends Controller{
	
	/**
	* ajouter un conducteur ou passager
	**/
	function ajouter(){
		$this->loadModel('Personne'); 
		
		if($this->request->data){
 			if($this->Personne->validates($this->request->data)){
 				$this->request->data->PASSWORD = sha1($this->request->data->PASSWORD);
				$this->request->data->ETAT_COMPTE = '0';
				$this->request->data->DATE_INSCRIPTION	=  date("Y-m-d H:i:s");
				$this->Personne->save($this->request->data);
				$this->Session->setFlash('La Personne a bien été ajoutée'); 
				$this->redirect(''); 
			}else{
				$this->Session->setFlash('Merci de corriger vos informations','error'); 
			}
			
		}elseif($id){
			$this->request->data = $this->Personne->findFirst(array(
				'conditions' => array('id'=>$id)
			));
		}
		$d['id'] = $id; 
		$this->set($d);
	}
}
