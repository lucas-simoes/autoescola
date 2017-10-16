<?php
$this->breadcrumbs=array(
	'Itensorcamentos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List itensorcamento', 'url'=>array('index')),
	array('label'=>'Manage itensorcamento', 'url'=>array('admin')),
);
?>

<h1>Create itensorcamento</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>