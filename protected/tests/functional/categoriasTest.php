<?php

class categoriasTest extends WebTestCase
{
	public $fixtures=array(
		'categoriases'=>'categorias',
	);

	public function testShow()
	{
		$this->open('?r=categorias/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=categorias/create');
	}

	public function testUpdate()
	{
		$this->open('?r=categorias/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=categorias/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=categorias/index');
	}

	public function testAdmin()
	{
		$this->open('?r=categorias/admin');
	}
}
