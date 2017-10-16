<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'orcamentos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'data'); ?>
		<?php echo $form->textField($model,'data'); ?>
		<?php echo $form->error($model,'data'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clientesId'); ?>
		<?php echo $form->textField($model,'clientesId'); ?>
		<?php echo $form->error($model,'clientesId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valorBruto'); ?>
		<?php echo $form->textField($model,'valorBruto',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'valorBruto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valorDesconto'); ?>
		<?php echo $form->textField($model,'valorDesconto',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'valorDesconto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valorLiquido'); ?>
		<?php echo $form->textField($model,'valorLiquido',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'valorLiquido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuariosId'); ?>
		<?php echo $form->textField($model,'usuariosId'); ?>
		<?php echo $form->error($model,'usuariosId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'validade'); ?>
		<?php echo $form->textField($model,'validade'); ?>
		<?php echo $form->error($model,'validade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valorPrazo'); ?>
		<?php echo $form->textField($model,'valorPrazo',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'valorPrazo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inclusao'); ?>
		<?php echo $form->textField($model,'inclusao'); ?>
		<?php echo $form->error($model,'inclusao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'empresasId'); ?>
		<?php echo $form->textField($model,'empresasId'); ?>
		<?php echo $form->error($model,'empresasId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->