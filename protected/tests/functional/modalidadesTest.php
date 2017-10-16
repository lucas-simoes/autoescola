<?php

class modalidadesTest extends WebTestCase
{
	public $fixtures=array(
		'modalidades'=>'modalidades',
	);

	public function testShow()
	{
		$this->open('?r=modalidades/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=modalidades/create');
	}

	public function testUpdate()
	{
		$this->open('?r=modalidades/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=modalidades/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=modalidades/index');
	}

	public function testAdmin()
	{
		$this->open('?r=modalidades/admin');
	}
}
