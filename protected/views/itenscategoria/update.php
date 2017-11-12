<?php
$this->breadcrumbs=array(
	'Itenscategorias'=>array('index'),
	$model->itensId=>array('view','id'=>$model->itensId),
	'Update',
);

$this->menu=array(
	array('label'=>'List itenscategoria', 'url'=>array('index')),
	array('label'=>'Create itenscategoria', 'url'=>array('create')),
	array('label'=>'View itenscategoria', 'url'=>array('view', 'id'=>$model->itensId)),
	array('label'=>'Manage itenscategoria', 'url'=>array('admin')),
);
?>

<h1>Update itenscategoria <?php echo $model->itensId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>