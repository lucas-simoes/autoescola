<?php
$this->breadcrumbs=array(
	'Empresases'=>array('index'),
	$model->empresasId,
);

$this->menu=array(
	array('label'=>'List empresas', 'url'=>array('index')),
	array('label'=>'Create empresas', 'url'=>array('create')),
	array('label'=>'Update empresas', 'url'=>array('update', 'id'=>$model->empresasId)),
	array('label'=>'Delete empresas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->empresasId),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage empresas', 'url'=>array('admin')),
);
?>

<h1>View empresas #<?php echo $model->empresasId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'empresasId',
		'nome',
		'endereco',
		'bairro',
		'cidadeId',
		'cep',
		'telefone',
		'cnpj',
		'email',
		'uf',
	),
)); ?>
