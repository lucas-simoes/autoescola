<?php

class usuariosTest extends WebTestCase
{
	public $fixtures=array(
		'usuarioses'=>'usuarios',
	);

	public function testShow()
	{
		$this->open('?r=usuarios/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=usuarios/create');
	}

	public function testUpdate()
	{
		$this->open('?r=usuarios/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=usuarios/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=usuarios/index');
	}

	public function testAdmin()
	{
		$this->open('?r=usuarios/admin');
	}
}
