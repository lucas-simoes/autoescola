<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List clientes', 'url'=>array('index')),
	array('label'=>'Create clientes', 'url'=>array('create')),
	array('label'=>'View clientes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage clientes', 'url'=>array('admin')),
);
?>

<h1>Update clientes <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>