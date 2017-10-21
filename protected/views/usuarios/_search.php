<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); 

    $empresas= new empresas();
    $objEmpresas = $empresas->findAll();
    
    $empresas = array();
    
    foreach ($objEmpresas as $rst) {
        $empresas[$rst['empresasId']] = $rst['nome'];
    }

?>  
        <div class="row">
            <div class="col-md-2">
                <?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id', array('class'=>'form-control input-sm')); ?>
            </div>
		
            <div class="col-md-4">
                <?php echo $form->label($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>150, 'class'=>'form-control input-sm')); ?>
            </div>
                
            <div class="col-md-4">
                <?php echo $form->label($model,'empresasId'); ?>
		<?php echo $form->dropDownList($model,'empresasId', $empresas, array('class'=>'form-control')); ?> 
            </div>                
            
            <div class="col-md-2">
                <div class="row buttons" style="padding-top: 20px">
                    <?php echo CHtml::submitButton('Filtrar', array('class'=>'btn btn-default')); ?>
                </div>
            </div>
	</div>       

<?php $this->endWidget(); ?>

</div><!-- search-form -->