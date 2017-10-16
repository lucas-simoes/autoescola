<?php
$this->breadcrumbs=array(
	'Tituloses',
);

$this->menu=array(
	array('label'=>'Create titulos', 'url'=>array('create')),
	array('label'=>'Manage titulos', 'url'=>array('admin')),
);
?>

<h1>Tituloses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
