<?php

class clientesTest extends WebTestCase
{
	public $fixtures=array(
		'clientes'=>'clientes',
	);

	public function testShow()
	{
		$this->open('?r=clientes/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=clientes/create');
	}

	public function testUpdate()
	{
		$this->open('?r=clientes/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=clientes/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=clientes/index');
	}

	public function testAdmin()
	{
		$this->open('?r=clientes/admin');
	}
}
