<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

use Igor\Carrosjr\helpers\EntityManagerFactory;
use Igor\Carrosjr\models\CarrosModel;

include_once 'vendor/autoload.php';


class Carros extends CI_Controller {

	public function index()
	{

		$this->template->show('carros');
	}
	
	public function adicionaCarro()
	{
		$carro = new CarrosModel();
		
		$emf = new EntityManagerFactory();
		$em = $emf->getEntityManager();
		
		$em->persist($carro);
		$em->flush();
		
	}
}

