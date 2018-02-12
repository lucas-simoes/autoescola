<?php
$this->breadcrumbs=array(
	'Contratoses'=>array('index'),
	'Create',
);?>

<h1>Novo Contrato</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>