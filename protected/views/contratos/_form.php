<section class="content">
    <script src="<?php echo Yii::app()->baseUrl . '/ckeditor/ckeditor.js'; ?>"></script>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Dados</h3>
                </div>
                <div class="form" role="form">

                    <?php
                    $form = $this->beginWidget('CActiveForm', array(
                        'id' => 'contratos-form',
                        'enableAjaxValidation' => false,
                    ));
                    ?>

                    <?php echo $form->errorSummary($model); ?>

                    <div class="box-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'nome'); ?>
                                <?php echo $form->textField($model, 'nome', array('size' => 20, 'maxlength' => 20, 'class' => 'form-control')); ?>
                                <?php echo $form->error($model, 'nome'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <?php echo CHtml::button("CFC", array('class' => 'btn btn-info pull-left', 'id' => 'cfc', 'onclick' => 'alerta("CFC");')); ?>
                                <?php echo CHtml::button("CNPJ", array('class' => 'btn btn-info pull-left', 'id' => 'cfc2', 'onclick' => 'alerta("CNPJ CFC");')); ?>
                                <?php echo CHtml::button("FANTASIA", array('class' => 'btn btn-info pull-left', 'id' => 'cfc3', 'onclick' => 'alerta("NOME FANTASIA");')); ?>                                
                                <?php echo CHtml::button("ENDERECO", array('class' => 'btn btn-info pull-left', 'id' => 'cfc3', 'onclick' => 'alerta("ENDERECO CFC");')); ?>                                                                                               
                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <?php echo CHtml::button("CLIENTE", array('class' => 'btn btn-info pull-left', 'id' => 'cfc', 'onclick' => 'alerta("CLIENTE");')); ?>
                                <?php echo CHtml::button("CPF", array('class' => 'btn btn-info pull-left', 'id' => 'cfc2', 'onclick' => 'alerta("CPF");')); ?>
                                <?php echo CHtml::button("IDENTIDADE", array('class' => 'btn btn-info pull-left', 'id' => 'cfc3', 'onclick' => 'alerta("IDENTIDADE");')); ?>                                
                                <?php echo CHtml::button("ENDERECO CLIENTE", array('class' => 'btn btn-info pull-left', 'id' => 'cfc3', 'onclick' => 'alerta("ENDERECO CLIENTE");')); ?>                                                                                               
                            </div>
                        </div>
                    </div>
                    
                    <div class="box-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <?php echo CHtml::button("VALOR ORÇAMENTO", array('class' => 'btn btn-info pull-left', 'id' => 'cfc', 'onclick' => 'alerta("VALOR CONTRATO");')); ?>                          
                            </div>
                        </div>
                    </div>


                    <div class="box-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'texto'); ?>
                                <?php echo $form->textArea($model, 'texto', array('id' => 'texto', 'rows' => 6, 'cols' => 50, 'class' => 'form-control')); ?>
                                <?php echo $form->error($model, 'texto'); ?>
                            </div>
                        </div>                            
                    </div>    

                    <script type="text/javascript">
                        CKEDITOR.replace('texto');
                    </script>

                    <script type="text/javascript">

                        function alerta(valor) {
                            CKEDITOR.instances['texto'].insertText("#" + valor + "#");
                        }

                    </script>

                    <div class="box-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'categoria'); ?>
                                <?php echo $form->dropDownList($model, 'categoria', CHtml::listData(categorias::model()->findAll(), 'id', 'nome'), array('class' => 'form-control select2', 'empty' => '', 'style' => 'width: 100%')); ?>                                
                                <?php echo $form->error($model, 'categoria'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="box-footer"> 
                        <?php echo CHtml::submitButton($model->isNewRecord ? 'Salvar' : 'Atualizar', array('class' => 'btn btn-info pull-right')); ?>
                    </div>                    

                    <?php $this->endWidget(); ?>

                </div><!-- form -->
            </div>
        </div>
    </div>
</section>