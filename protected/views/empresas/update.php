<?php
$this->breadcrumbs=array(
	'Empresases'=>array('index'),
	$model->empresasId=>array('view','id'=>$model->empresasId),
	'Update',
);
?>
<h1>Empresa #<?php echo $model->empresasId; ?></h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>