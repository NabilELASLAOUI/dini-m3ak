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
 					if (($this->request->data->PASSWORD == $this->request->data->PASSWORD_CONFIRM) && !empty($this->request->data->EMAIL)) {
 						$this->request->data->PASSWORD = sha1($this->request->data->PASSWORD);
						$this->request->data->PASSWORD_CONFIRM = sha1($this->request->data->PASSWORD_CONFIRM);
									$token = $this->str_random(60);
									$this->request->data->ETAT_COMPTE = '0';
									$this->request->data->DATE_INSCRIPTION	=  date("Y-m-d H:i:s");
									$this->request->data->CODE_ACTIVATION	= $token;
									$this->Personne->save($this->request->data);

									$uid = $this->Personne->last_insert();
									mail($this->request->data->EMAIL, "Confirmation de votre compte", "Afin de valider votre compte merci de cliquer sur ce lien \n \nhttp://localhost/dini-m3ak/personnes/confirm/$uid/$token");
									$this->Session->setFlash('La Personne a bien été ajoutée'); 
 					}else{
 						$this->Session->setFlash('Merci de corriger vos informations','error');
 					}
									
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

	function 	confirm($id,$token)
	{
		$this->loadModel('Personne'); 
		$personne = $this->Personne->findFirst(array(
			'conditions'     => array('id' =>$id)
		));
		//$data = array('ID'=> $id,'ETAT_COMPTE' => '1', 'CODE_ACTIVATION' => 'NULL');
		$personne->ETAT_COMPTE = '1';
		$personne->CODE_ACTIVATION = 'NULL';
		$this->Personne->save($personne);
		$this->Session->setFlash('Votre compte a bien été activé'); 
		$this->redirect('');
	}
}
