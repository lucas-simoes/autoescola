<?php
$this->breadcrumbs=array(
	'Cidades'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List cidades', 'url'=>array('index')),
	array('label'=>'Create cidades', 'url'=>array('create')),
	array('label'=>'View cidades', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage cidades', 'url'=>array('admin')),
);
?>

<h1>Update cidades <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>