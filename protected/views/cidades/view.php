<?php
$this->breadcrumbs=array(
	'Cidades'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List cidades', 'url'=>array('index')),
	array('label'=>'Create cidades', 'url'=>array('create')),
	array('label'=>'Update cidades', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete cidades', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage cidades', 'url'=>array('admin')),
);
?>

<h1>View cidades #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
	),
)); ?>
