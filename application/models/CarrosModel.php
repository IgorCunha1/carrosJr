<?php

namespace Igor\Carrosjr\models;

/**
 * @Entity
 * @Table (name="carros")
 * 
 */

class CarrosModel{
	
	/**
	 * @Id
	 * @GeneratedValue
	 * @Column(type="integer")
	 */
	private $id;

	/**
	 * @Column(type="string")
	 */
	private $descricao;

	/**
	 * @Column(type="string")
	 */
	private $placa;

	/**
	 * @Column(type="string")
	 */
	private $obsCarro;

	/**
	 * @Column(type="integer")
	 */
	private $km;

	/**
	 * @Column(type="integer")
	 */
	private $anoFab;

	/**
	 * @Column(type="integer")
	 */
	private $anoMod;
	

	/**
	 * @Column(type="string")
	 */
	private $marca;
	
	/**
	 * @Column(type="string")
	 * 
	 */
	private $modelo;


	

	public function getId(){
		return $this->id;
	}

	public function setMarca($marca){
		$this->marca = $marca;
		return $this;
	}
	public function getMarca(){
		return $this->marca;
	}

	public function setModelo($modelo){
		$this->modelo = $modelo;
		return $this;
	}

	public function getModelo(){
		return $this->modelo;
	}

}
