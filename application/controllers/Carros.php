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
		$emf = new EntityManagerFactory();
		$em = $emf->getEntityManager();

		$carro = new CarrosModel();
		
		$descricao = $this->input->post('descricao');
		$marca = $this->input->post('marca');
		$modelo = $this->input->post('modelo');
		$placa = $this->input->post('placa');
		$anoFab = $this->input->post('anoFab');
		$anoMod = $this->input->post('anoMod');
		$km = $this->input->post('km');
		$obsCarro = $this->input->post('obsCarro');
		
		try{
				if(!$descricao){
					throw new \Exception("Você não ")
					
				}
				if(!$marca){

				}
				if(!$modelo){

				}
				if(!$placa){

				}
				if(!$anoFab){

				}
				if(!$anoMod){

				}
				if(!$km){

				}
				if(!$obsCarro){
					
				}

	}catch(\Exception $e){

	}
		$carro->setDescricao($descricao)
				->setMarca($marca)
				->setModelo($modelo)
				->setPlaca($placa)
				->setAnoFab($anoFab)
				->setAnoMod($anoMod)
				->setKm($km)
				->setObsCarro($obsCarro);
		
		
		$em->persist($carro);
		$em->flush();

		$this->template->show('carros');
		
	}
}

