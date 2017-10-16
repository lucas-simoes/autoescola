<?php

class itensorcamentoTest extends WebTestCase
{
	public $fixtures=array(
		'itensorcamentos'=>'itensorcamento',
	);

	public function testShow()
	{
		$this->open('?r=itensorcamento/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=itensorcamento/create');
	}

	public function testUpdate()
	{
		$this->open('?r=itensorcamento/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=itensorcamento/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=itensorcamento/index');
	}

	public function testAdmin()
	{
		$this->open('?r=itensorcamento/admin');
	}
}
