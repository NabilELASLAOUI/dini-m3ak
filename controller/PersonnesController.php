<?php 
class PersonnesController extends Controller{
	
	/**
	* ajouter un conducteur ou passager
	**/
	function ajouter(){
		$this->loadModel('Personne'); 
		
		if($this->request->data){
 			if($this->Personne->validates($this->request->data)){

 				$personne = $this->Personne->findFirst(array(
				'conditions' => array('EMAIL'=>$this->request->data->EMAIL)
				));

 				if ($personne) {
 					
 					$this->Session->setFlash('Cet email déjà utilisé pour un autre compte'); 
 					
 				}else{
					$this->request->data->PASSWORD = sha1($this->request->data->PASSWORD);
									$token = $this->str_random(60);
									$this->request->data->ETAT_COMPTE = '0';
									$this->request->data->DATE_INSCRIPTION	=  date("Y-m-d H:i:s");
									$this->request->data->CODE_ACTIVATION	= $token;
									$this->Personne->save($this->request->data);

									$uid = $this->Personne->last_insert();
									mail($this->request->data->EMAIL, "Confirmation de votre compte", "Afin de valider votre compte merci de cliquer sur ce lien \n \nhttp://localhost/dini-m3ak/personne/confirm.php?id=$uid&CODE_ACTIVATION=$token");
									$this->Session->setFlash('La Personne a bien été ajoutée'); 
 				}
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
