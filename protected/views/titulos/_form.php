<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'titulos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'valor'); ?>
		<?php echo $form->textField($model,'valor',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parcelas'); ?>
		<?php echo $form->textField($model,'parcelas'); ?>
		<?php echo $form->error($model,'parcelas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vencimento'); ?>
		<?php echo $form->textField($model,'vencimento'); ?>
		<?php echo $form->error($model,'vencimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'orcamentosId'); ?>
		<?php echo $form->textField($model,'orcamentosId'); ?>
		<?php echo $form->error($model,'orcamentosId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'produtosId'); ?>
		<?php echo $form->textField($model,'produtosId'); ?>
		<?php echo $form->error($model,'produtosId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->