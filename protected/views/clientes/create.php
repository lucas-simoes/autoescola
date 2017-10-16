<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List clientes', 'url'=>array('index')),
	array('label'=>'Manage clientes', 'url'=>array('admin')),
);
?>

<h1>Create clientes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>