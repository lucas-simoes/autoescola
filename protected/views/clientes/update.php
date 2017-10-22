<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>