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
                    <h3 class="box-title">Cabeçalho</h3>
                </div>
                <div class="form" role="form">

                    <?php
                    $form = $this->beginWidget('CActiveForm', array(
                        'id' => 'orcamentos-form',
                        'enableAjaxValidation' => false,
                    ));
                    ?>
                        <?php echo $form->errorSummary($model); ?>
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'usuariosId'); ?>
                                <?php echo $form->dropDownList($model, 'usuariosId', CHtml::listData(usuarios::model()->findAll(), 'id', 'nome'), array('class'=>'form-control select2', 'empty'=>'', 'style'=>'width: 100%')); ?>
                                <?php echo $form->error($model, 'usuariosId'); ?>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'data'); ?>
                                <?php echo $form->dateField($model, 'data', array('class'=>'form-control')); ?>
                                <?php echo $form->error($model, 'data'); ?>
                            </div> 
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'validade'); ?>
                                <?php echo $form->dateField($model, 'validade', array('class'=>'form-control')); ?>
                                <?php echo $form->error($model, 'validade'); ?>
                            </div>
                        </div>
                        
                        <div class="col-md-2">
                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'status'); ?>
                                <?php echo $form->dropDownList($model, 'status', array(1=>'Em Aberto', 2=>'Fechado', 3=>'Perdido'), array('class'=>'form-control')); ?>
                                <?php echo $form->error($model, 'status'); ?>
                            </div>
                        </div>
                        
                        <div class="col-md-8">
                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'clientesId'); ?>
                                <?php echo $form->dropDownList($model, 'clientesId', CHtml::listData(clientes::model()->findAll(), 'id', 'nome'), array('class'=>'form-control select2', 'empty'=>'', 'style'=>'width: 100%')); ?>
                                <?php echo $form->error($model, 'clientesId'); ?>
                            </div>  
                        </div>
                        
                        <div class="col-md-4">
                            <div class="row">
                                <?php echo $form->labelEx($cliente, 'telefone'); ?>
                                <?php echo $form->textField($cliente, 'telefone', array('size' => 20, 'maxlength' => 20, 'class'=>'form-control', 'data-inputmask'=>'\"mask\": \"\(999\) 999\-9999\"')); ?>
                            </div> 
                        </div>                       
                            
                        <?php echo $form->hiddenField($model, 'valorPrazo'); ?>                        
                        <?php echo $form->hiddenField($model, 'valorBruto'); ?>                        
                        <?php echo $form->hiddenField($model, 'valorDesconto'); ?>
                        <?php echo $form->hiddenField($model, 'valorLiquido'); ?>
                        <?php echo $form->hiddenField($model, 'inclusao'); ?>
                        <?php echo $form->hiddenField($model, 'empresasId'); ?>
                    </div>
                    <div class="box-footer">                        
                        <?php echo CHtml::link('Cancelar', Yii::app()->createUrl('orcamentos/admin'), array('class'=>'btn btn-default')) ?>
                        <?php echo CHtml::submitButton('Salvar Cabeçalho', array('class'=>'btn btn-info pull-right')); ?>
                    </div>

                    <?php $this->endWidget(); ?>

                </div><!-- form -->
            </div>
        </div>
    </div>
</section>

<section class="content" style="display: <?php echo $model->isNewRecord?'none':'block'; ?>">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Itens</h3>
                </div>
                <div class="form" role="form">
                    <?php
                    $formItens = $this->beginWidget('CActiveForm', array(
                        'id' => 'itens-form',
                        'enableAjaxValidation' => false,
                        'action'=>  Yii::app()->createUrl('orcamentos/inserirItem'),
                    ));
                    ?>
                    <?php echo $formItens->errorSummary($model); ?>
                    <?php echo $formItens->hiddenField($itens,'orcamentosId'); ?>

                    <div class="col-md-4">
                        <div class="form-group">
                            <?php echo $formItens->labelEx($itens,'produtosId'); ?>
                            <?php echo $formItens->dropDownList($itens,
                                                                'produtosId', 
                                                                CHtml::listData(produto_servico::model()->findAll(), 
                                                                                'id', 
                                                                                'descricao'), 
                                                                array('class'=>'form-control select2', 
                                                                      'empty'=>'', 
                                                                      'style'=>'width: 100%',
                                                                      'ajax'=>array('type'=>'POST',
                                                                                    'dataType'=>'json',
                                                                                    'url'=> Yii::app()->createUrl('orcamentos/getDadosProduto'),
                                                                                    'success'=>'updateForm',

                                                                   ))); ?>
                            <?php echo $formItens->error($itens,'produtosId'); ?>
                        </div>
                    </div>

                    <div class="col-md-1">
                        <div class="form-group">
                            <?php echo $formItens->labelEx($itens,'quantidade'); ?>
                            <?php echo $formItens->textField($itens,'quantidade',array('size'=>11,'maxlength'=>11, 'class'=>'form-control', 'onfocusout'=>'updateValores()')); ?>
                            <?php echo $formItens->error($itens,'quantidade'); ?>
                        </div>
                    </div>

                    <div class="col-md-1">
                        <div class="form-group">
                            <?php echo $formItens->labelEx($itens,'valorUnitario'); ?>
                            <?php echo $formItens->textField($itens,'valorUnitario',array('size'=>11,'maxlength'=>11, 'class'=>'form-control', 'onfocusout'=>'updateValores()')); ?>
                            <?php echo $formItens->error($itens,'valorUnitario'); ?>
                        </div>
                    </div>

                    <div class="col-md-1">
                        <div class="form-group">
                            <?php echo $formItens->labelEx($itens,'valorDesconto'); ?>
                            <?php echo $formItens->textField($itens,'valorDesconto',array('size'=>11,'maxlength'=>11, 'class'=>'form-control', 'onfocusout'=>'updateValores()')); ?>
                            <?php echo $formItens->error($itens,'valorDesconto'); ?>
                        </div>
                    </div>

                    <div class="col-md-1">
                        <div class="form-group">
                            <?php echo $formItens->labelEx($itens,'valorTotalLiquido'); ?>
                            <?php echo $formItens->textField($itens,'valorTotalLiquido',array('size'=>11,'maxlength'=>11, 'class'=>'form-control', 'onfocusout'=>'calculaDesconto()')); ?>
                            <?php echo $formItens->error($itens,'valorTotalLiquido'); ?>
                        </div>
                    </div>

                    <div class="col-md-1">
                        <div class="form-group">
                            <?php echo $formItens->labelEx($itens,'valorTotalPrazo'); ?>
                            <?php echo $formItens->textField($itens,'valorTotalPrazo',array('size'=>11,'maxlength'=>11, 'class'=>'form-control', /*'disabled'=>true*/)); ?>
                            <?php echo $formItens->error($itens,'valorTotalPrazo'); ?>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <?php echo $formItens->labelEx($itens,'modalidadesId'); ?>
                            <?php echo $formItens->dropDownList($itens,'modalidadesId', CHtml::listData(modalidades::model()->findAll(), 'modalidadesId', 'nome'), array('class'=>'form-control select2', 'empty'=>'')); ?>
                            <?php echo $formItens->error($itens,'modalidadesId'); ?>
                        </div>
                    </div>
                    
                    <div class="col-md-1">
                        <div class="form-group">
                            <?php echo CHtml::submitButton('Inserir Item', array('class'=>'btn btn-info pull-right')); ?>
                        </div>
                    </div>
                    
                    <?php $this->endWidget(); ?>
                </div>
                
                <?php $this->widget('zii.widgets.grid.CGridView', array(
                        'id'=>'itensorcamento-grid',
                        'dataProvider'=>$itens->search(),
                        'columns'=>array(
                                //'itensId',
                                //'orcamentosId',
                                'produtosId',
                                'produtos.descricao',
                                'quantidade',
                                'valorUnitario',
                                'valorDesconto',
                                'valorTotalLiquido',
                                'valorTotalPrazo',
                                'modalidades.nome',
                                array(
                                        'class'=>'CButtonColumn',
                                        'template'=>'{deletar}',
                                        'deleteButtonLabel' => '<i class="fa fa-trash"></i>',
                                        'deleteButtonImageUrl'=> false,
                                        'buttons' => array (
                                            'deletar' => array(
                                                'label'=>'<i class="fa fa-trash"></i>',
                                                'url'=>'Yii::app()->createUrl("orcamentos/deleteItem", array("id"=>"$data->itensId"))',
                                                'options'=>array('title'=>'Excluir', 'class'=>'btn btn-default' ),
                                            ),
                                        ),
                                ),
                            ),
                        'htmlOptions'=>array('class'=>'table table-responsive'),
                        'itemsCssClass' => 'table table-hover',
                        'pagerCssClass' => 'text-center',
                        'pager' => array(
                            'htmlOptions'=> array('class'=>'pagination pagination-sm no-margin pull-right'),
                            'header'=>'',
                            ),
                )); ?>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    function updateForm(data) {        
    document.getElementById('itensorcamento_valorUnitario').value = data.valorUnitario;
    document.getElementById('itensorcamento_quantidade').value = data.quantidade;
    document.getElementById('itensorcamento_valorDesconto').value = data.valorDesconto;
    document.getElementById('itensorcamento_valorTotalLiquido').value = data.valorTotalLiquido;
    document.getElementById('itensorcamento_valorTotalPrazo').value = data.valorTotalPrazo;
}

function updateValores() {
    var valorUn = document.getElementById('itensorcamento_valorUnitario');
    var qtd = document.getElementById('itensorcamento_quantidade');
    var desconto = document.getElementById('itensorcamento_valorDesconto');
    var liq = document.getElementById('itensorcamento_valorTotalLiquido');
    var prazo = document.getElementById('itensorcamento_valorTotalPrazo');
    
    var descPerc = desconto.value / 100;
    
    if (qtd.value <= 0) {
        qtd.value = 1;
    }
    
    prazo.value = qtd.value * valorUn.value;
    liq.value = prazo.value - (prazo.value * descPerc);
}

function calculaDesconto() {
    var valorUn = document.getElementById('itensorcamento_valorUnitario');
    var qtd = document.getElementById('itensorcamento_quantidade');
    var desconto = document.getElementById('itensorcamento_valorDesconto');
    var liq = document.getElementById('itensorcamento_valorTotalLiquido');
    var prazo = document.getElementById('itensorcamento_valorTotalPrazo');
    
    if (qtd.value <= 0) {
        qtd.value = 1;
    }
    
    var valorDesc = prazo.value - liq.value;
    
    desconto.value = (valorDesc / prazo.value) * 100; 
}
</script>