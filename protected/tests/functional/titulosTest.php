<?php

class titulosTest extends WebTestCase
{
	public $fixtures=array(
		'tituloses'=>'titulos',
	);

	public function testShow()
	{
		$this->open('?r=titulos/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=titulos/create');
	}

	public function testUpdate()
	{
		$this->open('?r=titulos/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=titulos/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=titulos/index');
	}

	public function testAdmin()
	{
		$this->open('?r=titulos/admin');
	}
}
