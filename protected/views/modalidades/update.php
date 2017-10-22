<?php
$this->breadcrumbs=array(
	'Modalidades'=>array('index'),
	$model->modalidadesId=>array('view','id'=>$model->modalidadesId),
	'Update',
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>