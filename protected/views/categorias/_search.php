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
            <div class="col-md-2">
                <?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id', array('class'=>'form-control input-sm')); ?>
            </div>
	    
            <?php if (!Yii::app()->user->isAdmin){  ?>
            <div class="col-md-8">
                <?php echo $form->label($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>150, 'class'=>'form-control input-sm')); ?>
            </div>
            
            <?php 
                }else{  
            ?>
            <div class="col-md-4">
                <?php echo $form->label($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>150, 'class'=>'form-control input-sm')); ?>
            </div>
            
            <div class="col-md-4">
                <?php echo $form->label($model,'empresasId'); ?>
		 <?php echo $form->dropDownList($model, 'empresasId', CHtml::listData(empresas::model()->findAll(), 'empresasId', 'nome'), array('class'=>'form-control select2', 'empty'=>'', 'style'=>'width: 100%')); ?>
            </div>
            <?php 
                }
            ?>               
            
            <div class="col-md-2">
                <div class="row buttons" style="padding-top: 20px">
                    <?php echo CHtml::submitButton('Filtrar', array('class'=>'btn btn-default')); ?>
                </div>
            </div>
	</div>       

<?php $this->endWidget(); ?>

</div><!-- search-form -->