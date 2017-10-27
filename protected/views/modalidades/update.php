<?php
$this->breadcrumbs=array(
	'Modalidades'=>array('index'),
	$model->modalidadesId=>array('view','id'=>$model->modalidadesId),
	'Update',
);
?>
<h1>Modalidade #<?php echo $model->modalidadesId; ?></h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>