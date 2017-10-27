<?php
    Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/bower_components/select2/dist/js/select2.full.min.js', CClientScript::POS_END);
    Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/orcamentos.js', CClientScript::POS_END);
    Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/dist/css/skins/_all-skins.min.css', CClientScript::POS_HEAD);
?>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Dados</h3>
                </div>
                <div class="form" role="form">

                    <?php $form=$this->beginWidget('CActiveForm', array(
                            'id'=>'usuarios-form',
                            'enableAjaxValidation'=>false,
                        )); 
                    ?>
                        <?php echo $form->errorSummary($model); ?>
                    <div class="box-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <?php echo $form->labelEx($model,'nome'); ?>
                                <?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>150, 'class'=>'form-control')); ?>
                                <?php echo $form->error($model,'nome'); ?>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="form-group">
                                <?php echo $form->labelEx($model,'endereco'); ?>
                                <?php echo $form->textField($model,'endereco',array('size'=>60,'maxlength'=>80, 'class'=>'form-control')); ?>
                                <?php echo $form->error($model,'endereco'); ?>    
                            </div> 
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <?php echo $form->labelEx($model,'bairro'); ?>
                                <?php echo $form->textField($model,'bairro',array('size'=>40,'maxlength'=>40, 'class'=>'form-control')); ?>
                                <?php echo $form->error($model,'bairro'); ?>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <?php echo $form->labelEx($model,'cidadeId'); ?>
                                <?php echo $form->dropDownList($model, 'cidadeId', CHtml::listData(cidades::model()->findAll(), 'id', 'nome'), array('class'=>'form-control select2', 'empty'=>'', 'style'=>'width: 100%')); ?>
                                <?php echo $form->error($model,'cidadeId'); ?>
                            </div>
                        </div>
                        
                        <div class="col-md-2">
                            <div class="form-group">
                                <?php echo $form->labelEx($model,'uf'); ?>
                                <?php echo $form->textField($model,'uf',array('size'=>2,'maxlength'=>2, 'class'=>'form-control')); ?>
                                <?php echo $form->error($model,'uf'); ?>
                            </div>  
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <?php echo $form->labelEx($model,'cep'); ?>
                                <?php echo $form->textField($model,'cep',array('size'=>10,'maxlength'=>10, 'class'=>'form-control')); ?>
                                <?php echo $form->error($model,'cep'); ?>
                            </div> 
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <?php echo $form->labelEx($model,'telefone'); ?>
                                <?php echo $form->textField($model,'telefone',array('size'=>20,'maxlength'=>20, 'class'=>'form-control fixo_cel')); ?>
                                <?php echo $form->error($model,'telefone'); ?>
                            </div> 
                        </div>
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <?php echo $form->labelEx($model,'cnpj'); ?>
                                <?php echo $form->textField($model,'cnpj',array('size'=>20,'maxlength'=>20, 'class'=>'form-control cnpj')); ?>
                                <?php echo $form->error($model,'cnpj'); ?>
                            </div> 
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <?php echo $form->labelEx($model,'email', array('class'=>'col-sm-2 control-label')); ?>
                                <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>80, 'class'=>'form-control')); ?>
                                <?php echo $form->error($model,'email'); ?>
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
