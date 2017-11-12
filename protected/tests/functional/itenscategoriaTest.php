<?php

class itenscategoriaTest extends WebTestCase
{
	public $fixtures=array(
		'itenscategorias'=>'itenscategoria',
	);

	public function testShow()
	{
		$this->open('?r=itenscategoria/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=itenscategoria/create');
	}

	public function testUpdate()
	{
		$this->open('?r=itenscategoria/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=itenscategoria/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=itenscategoria/index');
	}

	public function testAdmin()
	{
		$this->open('?r=itenscategoria/admin');
	}
}
