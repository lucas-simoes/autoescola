<?php
$this->breadcrumbs=array(
	'Categoriases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List categorias', 'url'=>array('index')),
	array('label'=>'Create categorias', 'url'=>array('create')),
	array('label'=>'Update categorias', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete categorias', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage categorias', 'url'=>array('admin')),
);
?>

<h1>View categorias #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'empresasId',
	),
)); ?>
