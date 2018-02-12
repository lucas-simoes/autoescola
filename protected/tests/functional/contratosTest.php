<?php

class contratosTest extends WebTestCase
{
	public $fixtures=array(
		'contratoses'=>'contratos',
	);

	public function testShow()
	{
		$this->open('?r=contratos/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=contratos/create');
	}

	public function testUpdate()
	{
		$this->open('?r=contratos/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=contratos/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=contratos/index');
	}

	public function testAdmin()
	{
		$this->open('?r=contratos/admin');
	}
}
