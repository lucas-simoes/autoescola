<?php
$this->breadcrumbs=array(
	'Empresases'=>array('index'),
	'Create',
);
?>
<h1>Nova Empresa</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>