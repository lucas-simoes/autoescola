<?php
$this->breadcrumbs=array(
	'Contratoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List contratos', 'url'=>array('index')),
	array('label'=>'Create contratos', 'url'=>array('create')),
	array('label'=>'Update contratos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete contratos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage contratos', 'url'=>array('admin')),
);
?>

<h1>View contratos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'texto',
		'categoria',
	),
)); ?>
