<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); 
   
    $categoria = new categorias();
    $objCategorias = $categoria->findAll();
    
    $categorias = array();
    
    foreach ($objCategorias as $rst) {
        $categorias[$rst['id']] = $rst['nome'];
    }
?>

	<div class="row">
            <div class="col-md-1">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id', array('class'=>'form-control input-sm')); ?>
            </div>	
            <div class="col-md-2">
		<?php echo $form->label($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('class'=>'form-control input-sm')); ?>
            </div>                        		
            <div class="col-md-2">
                <?php echo $form->label($model,'categoria'); ?>                
                <?php  echo $form->dropDownList($model, 'categoria', CHtml::listData(categorias::model()->findAll(), 'id', 'nome'), array('class'=>'form-control select2', 'empty'=>'', 'style'=>'width: 100%')); ?>                
            </div>		
            <div class="col-md-2">
                <div class="row buttons" style="padding-top: 20px">
                   <?php echo CHtml::submitButton('Filtrar', array('class'=>'btn btn-default')); ?>
                </div>
            </div>           		
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->