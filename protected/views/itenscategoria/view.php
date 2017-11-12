<?php
$this->breadcrumbs=array(
	'Itenscategorias'=>array('index'),
	$model->itensId,
);

$this->menu=array(
	array('label'=>'List itenscategoria', 'url'=>array('index')),
	array('label'=>'Create itenscategoria', 'url'=>array('create')),
	array('label'=>'Update itenscategoria', 'url'=>array('update', 'id'=>$model->itensId)),
	array('label'=>'Delete itenscategoria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->itensId),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage itenscategoria', 'url'=>array('admin')),
);
?>

<h1>View itenscategoria #<?php echo $model->itensId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'itensId',
		'categoriasId',
		'produtosId',
		'quantidade',
		'valorUnitario',
		'valorDesconto',
		'valorTotalLiquido',
		'valorTotalPrazo',
		'modalidadesId',
	),
)); ?>
