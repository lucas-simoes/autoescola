<?php
$this->breadcrumbs=array(
	'Modalidades'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List modalidades', 'url'=>array('index')),
	array('label'=>'Manage modalidades', 'url'=>array('admin')),
);
?>

<h1>Create modalidades</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>