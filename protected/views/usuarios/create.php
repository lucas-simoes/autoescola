<?php
$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	'Create',
);
?>
<h1>Novo Usuário</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>