<?php
$this->breadcrumbs=array(
	'Orcamentoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List orcamentos', 'url'=>array('index')),
	array('label'=>'Manage orcamentos', 'url'=>array('admin')),
);
?>

<h1>Create orcamentos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>