<?php
$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List usuarios', 'url'=>array('index')),
	array('label'=>'Create usuarios', 'url'=>array('create')),
	array('label'=>'Update usuarios', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete usuarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage usuarios', 'url'=>array('admin')),
);
?>

<h1>View usuarios #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'cpf',
		'nascimento',
		'fixo',
		'celular',
		'endereco',
		'numero',
		'bairro',
		'cidadeId',
		'cep',
		'email',
		'empresasId',
	),
)); ?>
