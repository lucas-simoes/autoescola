<?php
$this->breadcrumbs=array(
	'Orcamentoses'=>array('index'),
	'Create',
);
?>

<h1>Novo Orçamento</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'cliente'=>$cliente, 'itens'=>$itens)); ?>