<?php
    Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/bower_components/select2/dist/js/select2.full.min.js', CClientScript::POS_END);
    Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/orcamentos.js', CClientScript::POS_END);
    Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/dist/css/skins/_all-skins.min.css', CClientScript::POS_HEAD);
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

    <div class="row">
        <div class="col-md-4">
            <?php echo $form->label($model,'data'); ?>
            <?php echo $form->dateField($model,'data', array('class'=>'form-control input-sm')); ?>
        </div>

        <div class="col-md-6">
            <?php echo $form->label($model,'clientesId'); ?>
            <?php echo $form->dropDownList($model, 'clientesId', CHtml::listData(clientes::model()->findAll(), 'id', 'nome'), array('class'=>'form-control select2', 'empty'=>'', 'style'=>'width: 100%')); ?>
        </div>       

        <div class="col-md-2">
            <div class="row buttons" style="padding-top: 20px">
                <?php echo CHtml::submitButton('Filtrar', array('class'=>'btn btn-default')); ?>
            </div>
        </div>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->