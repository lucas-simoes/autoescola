<div class="box box-primary">
    <div class="box-header with-border">
        <h2>Produto/Serviço</h2>
    </div>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'produto-servico-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>
    
        <div class="box-body">
            <div class="form-group">
                    <?php echo $form->labelEx($model,'descricao', array('class'=>'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php echo $form->textField($model,'descricao',array('size'=>60,'maxlength'=>150, 'class'=>'form-control')); ?>
                    <?php echo $form->error($model,'descricao'); ?>
                </div>		
            </div>    
        </div> 
    
        <div class="box-body">
            <div class="form-group">
                    <?php echo $form->labelEx($model,'valorAvista', array('class'=>'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php echo $form->textField($model,'valorAvista',array('class'=>'form-control')); ?>
                    <?php echo $form->error($model,'valorAvista'); ?>
                </div>		
            </div>    
        </div>
    
        <div class="box-body">
            <div class="form-group">
                    <?php echo $form->labelEx($model,'valorAprazo', array('class'=>'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php echo $form->textField($model,'valorAprazo',array('class'=>'form-control')); ?>
                    <?php echo $form->error($model,'valorAprazo'); ?>
                </div>		
            </div>    
        </div>
    
        <div class="box-body">
            <div class="form-group">
                    
                <div class="col-sm-12">
                    <label>
                    <?php echo $form->checkbox($model,'produtoAutoEscola', array('class'=>'checkbox-inline')); ?> Produto da Auto Escola?
                </label>
		<?php echo $form->error($model,'produtoAutoEscola'); ?>
                </div>		
            </div>    
        </div>

	<div class="box-footer">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Salvar' : 'Atualizar', array('class'=>'btn btn-primary', 'onclick'=>'loading()')); ?>
        </div>

    <?php $this->endWidget(); ?>

</div>    

<script type="text/javascript">
    function loading() {
        document.getElementById('loading').style.display = 'block';
    }    
          
});
</script>