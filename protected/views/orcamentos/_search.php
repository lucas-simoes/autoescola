<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'orcamentosId'); ?>
		<?php echo $form->textField($model,'orcamentosId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data'); ?>
		<?php echo $form->textField($model,'data'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clientesId'); ?>
		<?php echo $form->textField($model,'clientesId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valorBruto'); ?>
		<?php echo $form->textField($model,'valorBruto',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valorDesconto'); ?>
		<?php echo $form->textField($model,'valorDesconto',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valorLiquido'); ?>
		<?php echo $form->textField($model,'valorLiquido',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuariosId'); ?>
		<?php echo $form->textField($model,'usuariosId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'validade'); ?>
		<?php echo $form->textField($model,'validade'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valorPrazo'); ?>
		<?php echo $form->textField($model,'valorPrazo',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inclusao'); ?>
		<?php echo $form->textField($model,'inclusao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'empresasId'); ?>
		<?php echo $form->textField($model,'empresasId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->