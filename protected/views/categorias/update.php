<?php
$this->breadcrumbs=array(
	'Categoriases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);
?>

<h1>Categorias <?php echo $model->nome; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'itens'=>$itens)); ?>