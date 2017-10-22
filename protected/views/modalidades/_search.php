<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
        <div class="row">
            <div class="col-md-4">
                <?php echo $form->label($model,'modalidadesId'); ?>
		<?php echo $form->textField($model,'modalidadesId', array('class'=>'form-control input-sm')); ?>
            </div>		
            <div class="col-md-6">
                <?php echo $form->label($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>20,'maxlength'=>20, 'class'=>'form-control input-sm')); ?>
            </div>
            
            <div class="col-md-2">
                <div class="row buttons" style="padding-top: 20px">
                    <?php echo CHtml::submitButton('Filtrar', array('class'=>'btn btn-default')); ?>
                </div>
            </div>		
	</div>
	

<?php $this->endWidget(); ?>

</div><!-- search-form -->