<?php

class produto_servicoTest extends WebTestCase
{
	public $fixtures=array(
		'produto_servicos'=>'produto_servico',
	);

	public function testShow()
	{
		$this->open('?r=produto_servico/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=produto_servico/create');
	}

	public function testUpdate()
	{
		$this->open('?r=produto_servico/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=produto_servico/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=produto_servico/index');
	}

	public function testAdmin()
	{
		$this->open('?r=produto_servico/admin');
	}
}
