<?php
$this->breadcrumbs=array(
	'Orcamentoses'=>array('index'),
	$model->orcamentosId=>array('view','id'=>$model->orcamentosId),
	'Update',
);

$this->menu=array(
	array('label'=>'List orcamentos', 'url'=>array('index')),
	array('label'=>'Create orcamentos', 'url'=>array('create')),
	array('label'=>'View orcamentos', 'url'=>array('view', 'id'=>$model->orcamentosId)),
	array('label'=>'Manage orcamentos', 'url'=>array('admin')),
);
?>

<h1>Update orcamentos <?php echo $model->orcamentosId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>