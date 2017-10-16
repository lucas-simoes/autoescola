<?php
$this->breadcrumbs=array(
	'Orcamentoses',
);

$this->menu=array(
	array('label'=>'Create orcamentos', 'url'=>array('create')),
	array('label'=>'Manage orcamentos', 'url'=>array('admin')),
);
?>

<h1>Orcamentoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
