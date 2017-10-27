<?php
$this->breadcrumbs=array(
	'Produto Servicos'=>array('index'),
	'Create',
);
?>
<h1>Novo Produto/Serviço</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>