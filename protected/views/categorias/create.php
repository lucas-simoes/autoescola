<?php
$this->breadcrumbs=array(
	'Categoriases'=>array('index'),
	'Create',
);
?>

<h1>Nova Categoria</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'itens'=>$itens)); ?>