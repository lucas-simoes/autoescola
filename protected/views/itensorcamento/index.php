<?php
$this->breadcrumbs=array(
	'Itensorcamentos',
);

$this->menu=array(
	array('label'=>'Create itensorcamento', 'url'=>array('create')),
	array('label'=>'Manage itensorcamento', 'url'=>array('admin')),
);
?>

<h1>Itensorcamentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
