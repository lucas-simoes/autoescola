<?php
$this->breadcrumbs=array(
	'Usuarioses',
);

$this->menu=array(
	array('label'=>'Create usuarios', 'url'=>array('create')),
	array('label'=>'Manage usuarios', 'url'=>array('admin')),
);
?>

<h1>Usuarioses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
