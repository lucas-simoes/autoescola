<?php

class orcamentosTest extends WebTestCase
{
	public $fixtures=array(
		'orcamentoses'=>'orcamentos',
	);

	public function testShow()
	{
		$this->open('?r=orcamentos/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=orcamentos/create');
	}

	public function testUpdate()
	{
		$this->open('?r=orcamentos/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=orcamentos/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=orcamentos/index');
	}

	public function testAdmin()
	{
		$this->open('?r=orcamentos/admin');
	}
}
