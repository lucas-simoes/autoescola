<?php
$this->breadcrumbs=array(
	'Empresases'=>array('index'),
	$model->empresasId=>array('view','id'=>$model->empresasId),
	'Update',
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>