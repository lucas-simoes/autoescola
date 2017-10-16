<?php
$this->breadcrumbs=array(
	'Produto Servicos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List produto_servico', 'url'=>array('index')),
	array('label'=>'Create produto_servico', 'url'=>array('create')),
	array('label'=>'View produto_servico', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage produto_servico', 'url'=>array('admin')),
);
?>

<h1>Update produto_servico <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>