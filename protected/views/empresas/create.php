<?php
$this->breadcrumbs=array(
	'Empresases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List empresas', 'url'=>array('index')),
	array('label'=>'Manage empresas', 'url'=>array('admin')),
);
?>

<h1>Create empresas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>