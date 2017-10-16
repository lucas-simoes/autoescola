<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'itensorcamento-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

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

	<div class="row">
		<?php echo $form->labelEx($model,'quantidade'); ?>
		<?php echo $form->textField($model,'quantidade',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'quantidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valorUnitario'); ?>
		<?php echo $form->textField($model,'valorUnitario',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'valorUnitario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valorDesconto'); ?>
		<?php echo $form->textField($model,'valorDesconto',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'valorDesconto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valorTotalLiquido'); ?>
		<?php echo $form->textField($model,'valorTotalLiquido',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'valorTotalLiquido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valorTotalPrazo'); ?>
		<?php echo $form->textField($model,'valorTotalPrazo',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'valorTotalPrazo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modalidadesId'); ?>
		<?php echo $form->textField($model,'modalidadesId'); ?>
		<?php echo $form->error($model,'modalidadesId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->