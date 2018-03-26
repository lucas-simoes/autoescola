<?php

class cofiguracoesTest extends WebTestCase
{
	public $fixtures=array(
		'cofiguracoes'=>'cofiguracoes',
	);

	public function testShow()
	{
		$this->open('?r=cofiguracoes/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=cofiguracoes/create');
	}

	public function testUpdate()
	{
		$this->open('?r=cofiguracoes/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=cofiguracoes/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=cofiguracoes/index');
	}

	public function testAdmin()
	{
		$this->open('?r=cofiguracoes/admin');
	}
}
