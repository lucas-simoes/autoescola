<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'itensId'); ?>
		<?php echo $form->textField($model,'itensId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'categoriasId'); ?>
		<?php echo $form->textField($model,'categoriasId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'produtosId'); ?>
		<?php echo $form->textField($model,'produtosId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quantidade'); ?>
		<?php echo $form->textField($model,'quantidade',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valorUnitario'); ?>
		<?php echo $form->textField($model,'valorUnitario',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valorDesconto'); ?>
		<?php echo $form->textField($model,'valorDesconto',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valorTotalLiquido'); ?>
		<?php echo $form->textField($model,'valorTotalLiquido',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valorTotalPrazo'); ?>
		<?php echo $form->textField($model,'valorTotalPrazo',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modalidadesId'); ?>
		<?php echo $form->textField($model,'modalidadesId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->