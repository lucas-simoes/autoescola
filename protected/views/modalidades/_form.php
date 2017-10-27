<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Dados</h3>
                </div>
                <div class="form" role="form">

                    <?php $form=$this->beginWidget('CActiveForm', array(
                            'id'=>'cidades-form',
                            'enableAjaxValidation'=>false,
                    )); ?>
                        <?php echo $form->errorSummary($model); ?>
                    <div class="box-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <?php echo $form->labelEx($model,'nome'); ?>
                                <?php echo $form->textField($model,'nome',array('size'=>20,'maxlength'=>20, 'class'=>'form-control')); ?>
                                <?php echo $form->error($model,'nome'); ?>
                            </div>
                        </div> 
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <?php echo $form->checkbox($model,'prazo', array('class'=>'checkbox-inline')); ?> <b>A Prazo?</b>
                                <?php echo $form->error($model,'prazo'); ?>
                            </div>
                        </div>
                                                                       
                    </div>
                    <div class="box-footer"> 
                        <?php echo CHtml::submitButton($model->isNewRecord ? 'Salvar' : 'Atualizar', array('class'=>'btn btn-info pull-right', 'onclick'=>'loading()')); ?>
                    </div>

                    <?php $this->endWidget(); ?>

                </div><!-- form -->
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    function loading() {
        document.getElementById('loading').style.display = 'block';
    }    
          
});
</script>
