<?php
$this->breadcrumbs=array(
	'Itenscategorias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List itenscategoria', 'url'=>array('index')),
	array('label'=>'Manage itenscategoria', 'url'=>array('admin')),
);
?>

<h1>Create itenscategoria</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>