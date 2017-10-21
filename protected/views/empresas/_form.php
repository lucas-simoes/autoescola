<div class="box box-primary">
    <div class="box-header with-border">
        <h2>Empresa</h2>
    </div>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'empresas-form',
	'enableAjaxValidation'=>false,
)); 
    
    $cidades = new cidades();
    $objCidades = $cidades->findAll();
    
    $cidades = array();
    
    foreach ($objCidades as $rst) {
        $cidades[$rst['id']] = $rst['nome'];
    }

?>

	<?php echo $form->errorSummary($model); ?>
        
        <div class="box-body">
            <div class="form-group">
                    <?php echo $form->labelEx($model,'nome', array('class'=>'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>150, 'class'=>'form-control')); ?>
                    <?php echo $form->error($model,'nome'); ?>
                </div>		
            </div>    
        </div>
    
        <div class="box-body">
            <div class="form-group">
                    <?php echo $form->labelEx($model,'endereco', array('class'=>'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php echo $form->textField($model,'endereco',array('size'=>60,'maxlength'=>80, 'class'=>'form-control')); ?>
                    <?php echo $form->error($model,'endereco'); ?>
                </div>		
            </div>    
        </div>
    
        <div class="box-body">
            <div class="form-group">
                    <?php echo $form->labelEx($model,'bairro', array('class'=>'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php echo $form->textField($model,'bairro',array('size'=>40,'maxlength'=>40, 'class'=>'form-control')); ?>
                    <?php echo $form->error($model,'bairro'); ?>
                </div>		
            </div>    
        </div>
    
        <div class="box-body">
            <div class="form-group">
                    <?php echo $form->labelEx($model,'cidadeId', array('class'=>'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php echo $form->dropDownList($model,'cidadeId', $cidades, array('class'=>'form-control')); ?> 
                    <?php echo $form->error($model,'cidadeId'); ?>
                </div>		
            </div>    
        </div>
    
        <div class="box-body">
            <div class="form-group">
                    <?php echo $form->labelEx($model,'uf', array('class'=>'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php echo $form->textField($model,'uf',array('size'=>2,'maxlength'=>2, 'class'=>'form-control')); ?>
                    <?php echo $form->error($model,'uf'); ?>
                </div>		
            </div>    
        </div>
    
        <div class="box-body">
            <div class="form-group">
                    <?php echo $form->labelEx($model,'cep', array('class'=>'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php echo $form->textField($model,'cep',array('size'=>10,'maxlength'=>10, 'class'=>'form-control')); ?>
                    <?php echo $form->error($model,'cep'); ?>
                </div>		
            </div>    
        </div>

        <div class="box-body">
            <div class="form-group">
                    <?php echo $form->labelEx($model,'telefone', array('class'=>'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php echo $form->textField($model,'telefone',array('size'=>20,'maxlength'=>20, 'class'=>'form-control fixo_cel')); ?>
                    <?php echo $form->error($model,'telefone'); ?>
                </div>		
            </div>    
        </div>
        
        <div class="box-body">
            <div class="form-group">
                    <?php echo $form->labelEx($model,'cnpj', array('class'=>'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php echo $form->textField($model,'cnpj',array('size'=>20,'maxlength'=>20, 'class'=>'form-control')); ?>
                    <?php echo $form->error($model,'cnpj'); ?>
                </div>		
            </div>    
        </div>
    
        <div class="box-body">
            <div class="form-group">
                    <?php echo $form->labelEx($model,'email', array('class'=>'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>80, 'class'=>'form-control')); ?>
                    <?php echo $form->error($model,'email'); ?>
                </div>		
            </div>    
        </div>  
        
	<div class="box-footer">
            <?php echo CHtml::submitButton('Salvar', array('class'=>'btn btn-primary', 'onclick'=>'loading()')); ?>
        </div>

    <?php $this->endWidget(); ?>

</div>    

<script type="text/javascript">
    function loading() {
        document.getElementById('loading').style.display = 'block';
    }    
          
});
</script>