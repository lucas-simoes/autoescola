<?php
$this->breadcrumbs=array(
	'Modalidades'=>array('index'),
	$model->modalidadesId,
);

$this->menu=array(
	array('label'=>'List modalidades', 'url'=>array('index')),
	array('label'=>'Create modalidades', 'url'=>array('create')),
	array('label'=>'Update modalidades', 'url'=>array('update', 'id'=>$model->modalidadesId)),
	array('label'=>'Delete modalidades', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->modalidadesId),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage modalidades', 'url'=>array('admin')),
);
?>

<h1>View modalidades #<?php echo $model->modalidadesId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'modalidadesId',
		'nome',
		'prazo',
	),
)); ?>
