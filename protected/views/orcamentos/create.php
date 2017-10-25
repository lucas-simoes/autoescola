<?php
$this->breadcrumbs=array(
	'Orcamentoses'=>array('index'),
	'Create',
);

Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/bower_components/select2/dist/css/select2.min.css', CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/bower_components/select2/dist/js/select2.full.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/orcamentos.js', CClientScript::POS_END);
?>

<h1>Novo Orçamento</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>