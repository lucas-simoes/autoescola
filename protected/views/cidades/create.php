<?php
$this->breadcrumbs=array(
	'Cidades'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List cidades', 'url'=>array('index')),
	array('label'=>'Manage cidades', 'url'=>array('admin')),
);
?>

<h1>Create cidades</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>