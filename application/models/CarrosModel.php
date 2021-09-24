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

	public function getAnoMod()
	{
		return $this->anoMod;
	}

	
	public function setAnoMod($anoMod)
	{
		$this->anoMod = $anoMod;

		return $this;
	}

	
	public function getAnoFab()
	{
		return $this->anoFab;
	}

	
	public function setAnoFab($anoFab)
	{
		$this->anoFab = $anoFab;

		return $this;
	}


	public function getKm()
	{
		return $this->km;
	}

	
	public function setKm($km)
	{
		$this->km = $km;

		return $this;
	}
 
	public function getObsCarro()
	{
		return $this->obsCarro;
	}

	
	public function setObsCarro($obsCarro)
	{
		$this->obsCarro = $obsCarro;

		return $this;
	}

	public function getPlaca()
	{
		return $this->placa;
	}


	public function setPlaca($placa)
	{
		$this->placa = $placa;

		return $this;
	}

	public function getDescricao()
	{
		return $this->descricao;
	}
	
	public function setDescricao($descricao)
	{
		$this->descricao = $descricao;

		return $this;
	}
}
