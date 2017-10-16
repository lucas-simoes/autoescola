<?php
$this->breadcrumbs=array(
	'Itensorcamentos'=>array('index'),
	$model->itensId,
);

$this->menu=array(
	array('label'=>'List itensorcamento', 'url'=>array('index')),
	array('label'=>'Create itensorcamento', 'url'=>array('create')),
	array('label'=>'Update itensorcamento', 'url'=>array('update', 'id'=>$model->itensId)),
	array('label'=>'Delete itensorcamento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->itensId),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage itensorcamento', 'url'=>array('admin')),
);
?>

<h1>View itensorcamento #<?php echo $model->itensId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'itensId',
		'orcamentosId',
		'produtosId',
		'quantidade',
		'valorUnitario',
		'valorDesconto',
		'valorTotalLiquido',
		'valorTotalPrazo',
		'modalidadesId',
	),
)); ?>
