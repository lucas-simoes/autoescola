<?php
$this->breadcrumbs=array(
	'Cidades'=>array('index'),
	'Create',
);
?>
<h1>Nova Cidade</h1>    
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>    

