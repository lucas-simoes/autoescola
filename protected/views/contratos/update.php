<?php
$this->breadcrumbs=array(
	'Contratoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List contratos', 'url'=>array('index')),
	array('label'=>'Create contratos', 'url'=>array('create')),
	array('label'=>'View contratos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage contratos', 'url'=>array('admin')),
);
?>

<h1>Update contratos <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>