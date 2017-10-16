<?php
$this->breadcrumbs=array(
	'Cidades',
);

$this->menu=array(
	array('label'=>'Create cidades', 'url'=>array('create')),
	array('label'=>'Manage cidades', 'url'=>array('admin')),
);
?>

<h1>Cidades</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
