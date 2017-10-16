<?php
$this->breadcrumbs=array(
	'Tituloses'=>array('index'),
	$model->titulosId=>array('view','id'=>$model->titulosId),
	'Update',
);

$this->menu=array(
	array('label'=>'List titulos', 'url'=>array('index')),
	array('label'=>'Create titulos', 'url'=>array('create')),
	array('label'=>'View titulos', 'url'=>array('view', 'id'=>$model->titulosId)),
	array('label'=>'Manage titulos', 'url'=>array('admin')),
);
?>

<h1>Update titulos <?php echo $model->titulosId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>