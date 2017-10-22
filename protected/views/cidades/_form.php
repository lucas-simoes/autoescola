<div class="box box-primary">
    <div class="box-header with-border">
        <h2>Cidade</h2>
    </div>

    <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'cidades-form',
            'enableAjaxValidation'=>false,
    )); ?>

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