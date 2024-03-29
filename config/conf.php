<?php
class Conf{
	
	static $debug = 1; 

	static $databases = array(

		'default' => array(
			'host'		=> 'localhost',
			'database'	=> 'dinim3ak',
			'login'		=> 'root',
			'password'	=> ''
		)
	);


}

Router::prefix('cockpit','admin');


Router::connect('','home/index');
/************* Personne *******************/
Router::connect('personne/ajouter','personnes/ajouter');

/************* Trajet *******************/
Router::connect('trajet','trajets/index');
Router::connect('trajets/ajouter','trajets/ajouter');

/******************************************/
Router::connect('cockpit','cockpit/posts/index');
Router::connect('page/:slug-:id','pages/view/id:([0-9]+)/slug:([a-z0-9\-]+)');
Router::connect('blog/:slug-:id','posts/view/id:([0-9]+)/slug:([a-z0-9\-]+)');
Router::connect('blog/category/:slug','posts/category/slug:([a-z0-9\-]+)');
Router::connect('blog/*','posts/*');
