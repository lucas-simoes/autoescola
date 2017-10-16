<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descricao'); ?>
		<?php echo $form->textField($model,'descricao',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valorAvista'); ?>
		<?php echo $form->textField($model,'valorAvista'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valorAprazo'); ?>
		<?php echo $form->textField($model,'valorAprazo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'produtoAutoEscola'); ?>
		<?php echo $form->textField($model,'produtoAutoEscola'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->