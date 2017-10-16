<?php
$this->breadcrumbs=array(
	'Modalidades',
);

$this->menu=array(
	array('label'=>'Create modalidades', 'url'=>array('create')),
	array('label'=>'Manage modalidades', 'url'=>array('admin')),
);
?>

<h1>Modalidades</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
