<?php
$this->breadcrumbs=array(
	'Modalidades'=>array('index'),
	$model->modalidadesId=>array('view','id'=>$model->modalidadesId),
	'Update',
);

$this->menu=array(
	array('label'=>'List modalidades', 'url'=>array('index')),
	array('label'=>'Create modalidades', 'url'=>array('create')),
	array('label'=>'View modalidades', 'url'=>array('view', 'id'=>$model->modalidadesId)),
	array('label'=>'Manage modalidades', 'url'=>array('admin')),
);
?>

<h1>Update modalidades <?php echo $model->modalidadesId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>