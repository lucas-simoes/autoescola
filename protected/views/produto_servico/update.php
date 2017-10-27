<?php
$this->breadcrumbs=array(
	'Produto Servicos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);
?>
<h1>Produto/Serviço #<?php echo $model->id; ?></h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>