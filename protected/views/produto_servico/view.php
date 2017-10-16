<?php
$this->breadcrumbs=array(
	'Produto Servicos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List produto_servico', 'url'=>array('index')),
	array('label'=>'Create produto_servico', 'url'=>array('create')),
	array('label'=>'Update produto_servico', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete produto_servico', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage produto_servico', 'url'=>array('admin')),
);
?>

<h1>View produto_servico #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descricao',
		'valorAvista',
		'valorAprazo',
		'produtoAutoEscola',
	),
)); ?>
