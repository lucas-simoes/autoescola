<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);
?>
<h1>Cliente #<?php echo $model->id; ?></h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>