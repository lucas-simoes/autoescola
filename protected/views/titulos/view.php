<?php
$this->breadcrumbs=array(
	'Tituloses'=>array('index'),
	$model->titulosId,
);

$this->menu=array(
	array('label'=>'List titulos', 'url'=>array('index')),
	array('label'=>'Create titulos', 'url'=>array('create')),
	array('label'=>'Update titulos', 'url'=>array('update', 'id'=>$model->titulosId)),
	array('label'=>'Delete titulos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->titulosId),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage titulos', 'url'=>array('admin')),
);
?>

<h1>View titulos #<?php echo $model->titulosId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'titulosId',
		'valor',
		'parcelas',
		'vencimento',
		'orcamentosId',
		'produtosId',
	),
)); ?>
