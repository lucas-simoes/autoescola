<?php
$this->breadcrumbs=array(
	'Itensorcamentos'=>array('index'),
	$model->itensId=>array('view','id'=>$model->itensId),
	'Update',
);

$this->menu=array(
	array('label'=>'List itensorcamento', 'url'=>array('index')),
	array('label'=>'Create itensorcamento', 'url'=>array('create')),
	array('label'=>'View itensorcamento', 'url'=>array('view', 'id'=>$model->itensId)),
	array('label'=>'Manage itensorcamento', 'url'=>array('admin')),
);
?>

<h1>Update itensorcamento <?php echo $model->itensId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>