<?php
$this->breadcrumbs=array(
	'Tituloses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List titulos', 'url'=>array('index')),
	array('label'=>'Manage titulos', 'url'=>array('admin')),
);
?>

<h1>Create titulos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>