<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>        
	<div>
		<?php echo $form->textField($model,'username', array('class'=>'form-control', 'placeholder'=>'Login')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div>
		<?php echo $form->passwordField($model,'password', array('class'=>'form-control', 'placeholder'=>'Senha')); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
        
	<div>
            <?php echo CHtml::submitButton('Login', array('class'=>'btn btn-primary btn-block btn-fla')); ?>
            <?php echo $form->checkBox($model,'rememberMe'); ?>
            <?php echo $form->label($model,'rememberMe'); ?>
            <?php echo $form->error($model,'rememberMe'); ?>
	</div>

<?php $this->endWidget(); ?>
