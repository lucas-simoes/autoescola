<?php
$this->breadcrumbs=array(
	'Produto Servicos',
);

$this->menu=array(
	array('label'=>'Create produto_servico', 'url'=>array('create')),
	array('label'=>'Manage produto_servico', 'url'=>array('admin')),
);
?>

<h1>Produto Servicos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
