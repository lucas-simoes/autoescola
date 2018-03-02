<?php
    Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/bower_components/select2/dist/js/select2.full.min.js', CClientScript::POS_END);
    Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/orcamentos.js', CClientScript::POS_END);
    Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/dist/css/skins/_all-skins.min.css', CClientScript::POS_HEAD);
?>
<style type="text/css">
    .looad {
        border: 10px solid #f3f3f3; /* Light grey */
        border-top: 10px solid #3498db; /* Blue */
        border-radius: 50%;
        width: 1px;
        height: 1px;
        animation: spin 2s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>
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
                        <?php echo $form->hiddenField($model, 'orcamentosId'); ?>
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
                            <div class="form-group"  id="tel">
                                <?php echo $form->labelEx($cliente, 'telefone'); ?>
                                <?php echo $form->textField($cliente, 'telefone', array('size' => 20, 'maxlength' => 20, 'class'=>'form-control', 'data-inputmask'=>'\"mask\": \"\(999\) 999\-9999\"')); ?>
                                <?php echo CHtml::label('', 'telefone', array('id'=>'validation', 'style'=>'display: none')); ?>
                            </div> 
                        </div>  
                        
                        <?php 
                            if (!Yii::app()->user->isAdmin) {
                                if ($model->isNewRecord) {
                                    echo CHtml::hiddenField('empresasId', Yii::app()->user->Empresa);
                                } else {
                                    echo $form->hiddenField($model, 'empresasId');
                                } 
                            } else {
                                echo '<div class="col-md-12"><div class="form-group">';
                                echo $form->labelEx($model, 'empresasId');
                                echo CHtml::dropDownList('empresasId', $model->empresasId, CHtml::listData(empresas::model()->findAll(), 'empresasId', 'nome'), array('class'=>'form-control', 'empty'=>''));
                                echo '</div></div>';
                            }
                        ?>
                        
                        <?php if ($model->isNewRecord) : ?>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo CHtml::label('Categoria', 'categoria'); ?>
                                    <?php echo CHtml::dropDownList('categoria', '', CHtml::listData(categorias::model()->findAll(), 'id', 'nome'), array('class'=>'form-control', 'empty'=>'')); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <?php echo $form->labelEx($model,'valorBruto'); ?>
                                <?php echo $form->textField($model,'valorBruto',array('class'=>'form-control', 'readOnly'=>TRUE, 'type' => 'number')); ?>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <?php echo $form->labelEx($model,'valorLiquido'); ?>
                                <?php echo $form->textField($model,'valorLiquido',array('class'=>'form-control', 'readOnly'=>TRUE, 'type' => 'number')); ?>
                            </div>
                        </div>
                            
                        <?php echo $form->hiddenField($model, 'valorPrazo'); ?>                        
                        <?php echo $form->hiddenField($model, 'valorBruto'); ?>                        
                        <?php echo $form->hiddenField($model, 'valorDesconto'); ?>
                        <?php echo $form->hiddenField($model, 'valorLiquido'); ?>
                        <?php echo $form->hiddenField($model, 'inclusao'); ?>
                    </div>
                    <div class="box-footer">                        
                        <?php echo CHtml::link('Cancelar', Yii::app()->createUrl('orcamentos/admin'), array('class'=>'btn btn-default')) ?>
                        <?php   if (!$model->isNewRecord) { 
                                    echo CHtml::ajaxLink('Enviar Notificação <span class="label label-primary" id="info" style="display: none"><div id="hide" class="looad"></div></span>', 
                                                       Yii::app()->createUrl('orcamentos/sendnotify'), 
                                                       array('type'=>'POST', 
                                                             //'data'=> "js:$('#orcamentos-form').serialize()",
                                                             'dataType'=>'json',
                                                             'success'=>'confirmation', 
                                                             'url' => '#'), 
                                                             array('class'=>'btn btn-default', 'onclick'=>'sendNotify()', 'id'=>'btn-notify')); 
                                }
                        ?>                                                                        
                        <?php echo CHtml::submitButton('Salvar Cabeçalho', array('class'=>'btn btn-info pull-right')); ?>
                        <?php
                        if(isset($model->orcamentosId) && ($model->orcamentosId != '')){
                                echo CHtml::link('Finalizar', Yii::app()->createUrl('orcamentos/showcontract', array('orcamentosID'=>$model->orcamentosId)), array('class'=>'btn btn-default'));
                            }
                        ?>
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

                    <div class="row">
                        <div class="col-md-5">
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
                                <?php echo $formItens->textField($itens,'quantidade',array('size'=>11,'maxlength'=>11, 'class'=>'form-control', 'onfocusout'=>'updateValores()', 'onkeypress'=>'return isNumberKey(event)','type' => 'number')); ?>
                                <?php echo $formItens->error($itens,'quantidade'); ?>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <?php echo $formItens->labelEx($itens,'valorUnitario'); ?>
                                <?php echo $formItens->textField($itens,'valorUnitario',array('size'=>11,'maxlength'=>11, 'class'=>'form-control', 'onfocusout'=>'updateValores()', 'onkeypress'=>'return isNumberKey(event)','type' => 'number')); ?>
                                <?php echo $formItens->error($itens,'valorUnitario'); ?>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <?php echo $formItens->labelEx($itens,'valorDesconto'); ?>
                                <?php echo $formItens->textField($itens,'valorDesconto',array('size'=>11,'maxlength'=>11, 'class'=>'form-control', 'onfocusout'=>'updateValores()', 'onkeypress'=>'return isNumberKey(event)','type' => 'number')); ?>
                                <?php echo $formItens->error($itens,'valorDesconto'); ?>
                            </div>
                        </div>
                        
                         
                        <div class="col-md-2">
                            <div class="form-group">
                                <?php echo $formItens->labelEx($itens,'valorTotalPrazo'); ?>
                                <?php echo $formItens->textField($itens,'valorTotalPrazo',array('size'=>11,'maxlength'=>11, 'class'=>'form-control', 'readOnly'=>TRUE, 'onkeypress'=>'return isNumberKey(event)', 'type' => 'number')); ?>
                                <?php echo $formItens->error($itens,'valorTotalPrazo'); ?>
                            </div>
                        </div>                        
                    </div>
                    
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <?php echo $formItens->labelEx($itens,'valorTotalLiquido'); ?>
                                <?php echo $formItens->textField($itens,'valorTotalLiquido',array('size'=>11,'maxlength'=>11, 'class'=>'form-control', 'onfocusout'=>'calculaDesconto()', 'readOnly'=>TRUE, 'onkeypress'=>'return isNumberKey(event)','type' => 'number')); ?>
                                <?php echo $formItens->error($itens,'valorTotalLiquido'); ?>
                            </div>
                        </div>
                        
                        <?php echo $formItens->hiddenField($titulos, 'produtosId'); ?>
                        
                        <div class="col-md-2">
                            <div class="form-group">
                                <?php echo $formItens->labelEx($itens,'modalidadesId'); ?>                                                              
                                <?php echo $formItens->dropDownList($itens,'modalidadesId', CHtml::listData(modalidades::model()->findAll(), 'modalidadesId', 'nome'), array('class'=>'form-control select2', 'selected'=>true, 'empty'=>'')); ?>
                                <?php echo $formItens->error($itens,'modalidadesId'); ?>
                            </div>
                        </div>
                        
                        <div class="col-md-2">
                            <div class="form-group">
                                <?php echo $formItens->labelEx($titulos, 'parcelas'); ?>
                                <?php echo $formItens->numberField($titulos, 'parcelas', array('class'=>'form-control', 'onfocusout'=>'calculaValorParcela()'));?>
                                <?php echo $formItens->error($titulos, 'parcelas'); ?>
                            </div>
                        </div>
                        
                        <div class="col-md-2">
                            <div class="form-group">
                                <?php echo $formItens->labelEx($titulos, 'valorParcela'); ?>
                                <?php echo $formItens->numberField($titulos, 'valorParcela', array('class'=>'form-control', 'readOnly'=>TRUE, 'type' => 'number'));?>
                                <?php echo $formItens->error($titulos, 'valorParcela'); ?>
                            </div>
                        </div>
                        
                        <div class="col-md-2">
                            <div class="form-group">
                                <?php echo $formItens->labelEx($titulos, 'vencimento'); ?>
                                <?php echo $formItens->dateField($titulos, 'vencimento', array('class'=>'form-control'));?>
                                <?php echo $formItens->error($titulos, 'vencimento'); ?>
                            </div>
                        </div>
                        
                        <div class="col-md-1">
                            <div class="form-group" style="padding-top: 25px">
                                <?php echo CHtml::submitButton('Inserir Item', array('class'=>'btn btn-info pull-right')); ?>
                            </div>
                        </div>
                    </div>
                    
                    <?php echo CHtml::hiddenField('valorUnPrazo'); ?>
                    <?php $this->endWidget(); ?>
                </div>
                
                <?php $this->widget('zii.widgets.grid.CGridView', array(
                        'id'=>'itensorcamento-grid',
                        'dataProvider'=>$titulos->search(),
                        'columns'=>array(                                
                                'produtos.descricao',
                                'itens.quantidade',
                                'itens.valorUnitario',
                                'itens.valorDesconto',
                                'itens.valorTotalLiquido',
                                'itens.valorTotalPrazo',
                                'itens.modalidades.nome',
                                'parcelas',
                                'valorParcela',
                                array(
                                        'class'=>'CButtonColumn',
                                        'template'=>'{deletar}',
                                        'deleteButtonLabel' => '<i class="fa fa-trash"></i>',
                                        'deleteButtonImageUrl'=> false,
                                        'buttons' => array (
                                            'deletar' => array(
                                                'label'=>'<i class="fa fa-trash"></i>',
                                                'url'=>'Yii::app()->createUrl("orcamentos/deleteItem", array("id"=>"$data->itensorcamentoId"))',
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
    document.getElementById('itensorcamento_valorUnitario').value = data.valorTotalPrazo;
    
    document.getElementById('titulos_parcelas').value = 1;
    document.getElementById('titulos_valorParcela').value = document.getElementById('itensorcamento_valorTotalLiquido').value;
    document.getElementById('titulos_vencimento').value = document.getElementById('orcamentos_data').value;
}

function updateValores() {
    var valorUn = document.getElementById('itensorcamento_valorUnitario');
    var qtd = document.getElementById('itensorcamento_quantidade');
    var desconto = document.getElementById('itensorcamento_valorDesconto');
    var liq = document.getElementById('itensorcamento_valorTotalLiquido');
    var prazo = document.getElementById('itensorcamento_valorTotalPrazo');
    var unPrazo = document.getElementById('itensorcamento_valorUnitario');
    var valorParcela = document.getElementById('titulos_valorParcela');
    
    var descPerc = desconto.value / 100;
    
    if (qtd.value <= 0) {
        qtd.value = 1;
    }
    
    prazo.value = qtd.value * valorUn.value;
    liq.value = prazo.value - (prazo.value * descPerc);
    valorParcela.value = liq.value;
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
    
    desconto.value = roun (valorDesc / prazo.value) * 100; 
}

function calculaValorParcela() {
    var valorParcela = document.getElementById('titulos_valorParcela');
    var qtdParcelas = document.getElementById('titulos_parcelas');
    var liq = document.getElementById('itensorcamento_valorTotalLiquido');
    
    valorParcela.value = liq.value / qtdParcelas.value;
}

function confirmation(data) {
    var info = document.getElementById('info');
    
    info.removeChild(info.childNodes[0]);
    info.innerHTML = data.msg;
    
}

function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

function sendNotify(){
    var info = document.getElementById('info');
    var tel = document.getElementById('clientes_telefone');
    var label = document.getElementById('tel');
    var validator = document.getElementById('validation');
    
    if (tel.value == '') {
        label.classList.add('has-error');
        validator.style.display = 'block';
        validator.innerHTML = 'Telefone não configurado para envio de SMS!';
    }
    
    info.style.display = 'block';
}

function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode
    return !(charCode > 31 && (charCode < 48 || charCode > 57));
}
</script>