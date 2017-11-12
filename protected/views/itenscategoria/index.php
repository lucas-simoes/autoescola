<?php
$this->breadcrumbs=array(
	'Itenscategorias',
);

$this->menu=array(
	array('label'=>'Create itenscategoria', 'url'=>array('create')),
	array('label'=>'Manage itenscategoria', 'url'=>array('admin')),
);
?>

<h1>Itenscategorias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
