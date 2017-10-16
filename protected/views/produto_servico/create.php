<?php
$this->breadcrumbs=array(
	'Produto Servicos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List produto_servico', 'url'=>array('index')),
	array('label'=>'Manage produto_servico', 'url'=>array('admin')),
);
?>

<h1>Create produto_servico</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>