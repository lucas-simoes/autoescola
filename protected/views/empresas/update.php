<?php
$this->breadcrumbs=array(
	'Empresases'=>array('index'),
	$model->empresasId=>array('view','id'=>$model->empresasId),
	'Update',
);

$this->menu=array(
	array('label'=>'List empresas', 'url'=>array('index')),
	array('label'=>'Create empresas', 'url'=>array('create')),
	array('label'=>'View empresas', 'url'=>array('view', 'id'=>$model->empresasId)),
	array('label'=>'Manage empresas', 'url'=>array('admin')),
);
?>

<h1>Update empresas <?php echo $model->empresasId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>