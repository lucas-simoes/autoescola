<?php
$this->breadcrumbs=array(
	'Orcamentoses'=>array('index'),
	$model->orcamentosId=>array('view','id'=>$model->orcamentosId),
	'Update',
);
?>

<h1>Orcamento #<?php echo $model->orcamentosId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'cliente'=>$cliente, 'itens'=>$itens)); ?>