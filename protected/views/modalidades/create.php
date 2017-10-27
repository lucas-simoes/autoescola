<?php
$this->breadcrumbs=array(
	'Modalidades'=>array('index'),
	'Create',
);
?>
<h1>Nova Modalidade</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>