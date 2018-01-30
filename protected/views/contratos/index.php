<?php
$this->breadcrumbs=array(
	'Contratoses',
);

$this->menu=array(
	array('label'=>'Create contratos', 'url'=>array('create')),
	array('label'=>'Manage contratos', 'url'=>array('admin')),
);
?>

<h1>Contratoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
