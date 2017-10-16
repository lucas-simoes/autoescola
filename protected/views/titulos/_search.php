<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'titulosId'); ?>
		<?php echo $form->textField($model,'titulosId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor'); ?>
		<?php echo $form->textField($model,'valor',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parcelas'); ?>
		<?php echo $form->textField($model,'parcelas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vencimento'); ?>
		<?php echo $form->textField($model,'vencimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'orcamentosId'); ?>
		<?php echo $form->textField($model,'orcamentosId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'produtosId'); ?>
		<?php echo $form->textField($model,'produtosId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->