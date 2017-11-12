<?php
$this->breadcrumbs=array(
	'Categoriases',
);

$this->menu=array(
	array('label'=>'Create categorias', 'url'=>array('create')),
	array('label'=>'Manage categorias', 'url'=>array('admin')),
);
?>

<h1>Categoriases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
