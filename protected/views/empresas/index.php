<?php
$this->breadcrumbs=array(
	'Empresases',
);

$this->menu=array(
	array('label'=>'Create empresas', 'url'=>array('create')),
	array('label'=>'Manage empresas', 'url'=>array('admin')),
);
?>

<h1>Empresases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
