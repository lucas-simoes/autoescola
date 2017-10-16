<?php
$this->breadcrumbs=array(
	'Orcamentoses'=>array('index'),
	$model->orcamentosId,
);

$this->menu=array(
	array('label'=>'List orcamentos', 'url'=>array('index')),
	array('label'=>'Create orcamentos', 'url'=>array('create')),
	array('label'=>'Update orcamentos', 'url'=>array('update', 'id'=>$model->orcamentosId)),
	array('label'=>'Delete orcamentos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->orcamentosId),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage orcamentos', 'url'=>array('admin')),
);
?>

<h1>View orcamentos #<?php echo $model->orcamentosId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'orcamentosId',
		'data',
		'clientesId',
		'valorBruto',
		'valorDesconto',
		'valorLiquido',
		'status',
		'usuariosId',
		'validade',
		'valorPrazo',
		'inclusao',
		'empresasId',
	),
)); ?>
