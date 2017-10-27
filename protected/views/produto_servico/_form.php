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
                                'id'=>'produto-servico-form',
                                'enableAjaxValidation'=>false,
                          )); 
                    ?>
                        <?php echo $form->errorSummary($model); ?>
                    <div class="box-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <?php echo $form->labelEx($model,'descricao'); ?>
                                <?php echo $form->textField($model,'descricao',array('size'=>60,'maxlength'=>150, 'class'=>'form-control')); ?>
                                <?php echo $form->error($model,'descricao'); ?>    
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <?php echo $form->labelEx($model,'valorAvista'); ?>
                                <?php echo $form->textField($model,'valorAvista',array('class'=>'form-control')); ?>
                                <?php echo $form->error($model,'valorAvista'); ?>    
                            </div> 
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <?php echo $form->labelEx($model,'valorAprazo'); ?>
                                <?php echo $form->textField($model,'valorAprazo',array('class'=>'form-control')); ?>
                                <?php echo $form->error($model,'valorAprazo'); ?>
                            </div>
                        </div>
                        <?php if (Yii::app()->user->isAdmin){  ?>
                        <div class="col-md-12">
                            <div class="form-group">
                                <?php echo $form->labelEx($model,'empresasId'); ?>
                                <?php echo $form->dropDownList($model, 'empresasId', CHtml::listData(empresas::model()->findAll(), 'empresasId', 'nome'), array('class'=>'form-control select2', 'empty'=>'', 'style'=>'width: 100%')); ?>
                                <?php echo $form->error($model,'empresasId'); ?>
                            </div>
                        </div>
                        <?php 
                            }else{  
                                echo $form->hiddenField($model,'empresasId', array('value' => Yii::app()->user->Empresa)); 
                            }
                        ?>
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <?php echo $form->checkbox($model,'produtoAutoEscola', array('class'=>'checkbox-inline')); ?> <b>Produto da Auto Escola?</b>
                                <?php echo $form->error($model,'produtoAutoEscola'); ?>
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


