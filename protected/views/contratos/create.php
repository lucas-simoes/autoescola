<?php
$this->breadcrumbs=array(
	'Contratoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List contratos', 'url'=>array('index')),
	array('label'=>'Manage contratos', 'url'=>array('admin')),
);
?>

<h1>Create contratos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>