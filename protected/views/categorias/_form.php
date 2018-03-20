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
                        'id' => 'categorias-form',
                        'enableAjaxValidation' => false,
                    ));
                    ?>
                        <?php echo $form->errorSummary($model); ?>
                    
                        <?php if (Yii::app()->user->isAdmin){  ?>
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo $form->labelEx($model,'nome'); ?>
                                    <?php echo $form->textField($model,'nome',array('size'=>20,'maxlength'=>20,'class'=>'form-control')); ?>
                                    <?php echo $form->error($model,'nome'); ?>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo $form->labelEx($model,'empresasId'); ?>
                                    <?php echo $form->dropDownList($model, 'empresasId', CHtml::listData(empresas::model()->findAll(), 'empresasId', 'nome'), array('class'=>'form-control select2', 'empty'=>'', 'style'=>'width: 100%')); ?>
                                    <?php echo $form->error($model,'empresasId'); ?>
                                </div> 
                            </div>      

                        </div>
                        <?php 
                            }else{  
                                echo $form->hiddenField($model,'empresasId', array('value' => Yii::app()->user->Empresa)); 
                            
                        ?>
                        
                        <div class="box-body">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?php echo $form->labelEx($model,'nome'); ?>
                                    <?php echo $form->textField($model,'nome',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
                                    <?php echo $form->error($model,'nome'); ?>
                                </div>
                            </div>                                
                        </div>
                        
                        <?php 
                            }
                        ?>
                    
                    <div class="box-footer">                        
                        <?php echo CHtml::link('Cancelar', Yii::app()->createUrl('categorias/admin'), array('class'=>'btn btn-default')) ?>
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
                        'id' => 'itenscategoria-form',
                        'enableAjaxValidation' => false,
                        'action'=>  Yii::app()->createUrl('categorias/inserirItem'),
                    ));
                    ?>
                    <?php echo $formItens->errorSummary($model); ?>
                    <?php echo $formItens->hiddenField($itens,'categoriasId'); ?>

                    <div class="col-md-4">
                        <div class="form-group">
                            <?php echo $formItens->labelEx($itens,'produtosId'); ?>
                            <?php 
                                if($model->empresasId == ''){
                                    $empresasId = Yii::app()->user->Empresa; 
                                }
                                else{
                                    $empresasId = $model->empresasId;
                                }
                            
                                echo $formItens->dropDownList($itens,
                                                                'produtosId', 
                                                                CHtml::listData(produto_servico::model()->findAll(array("condition"=>"empresasId = $empresasId")), 
                                                                                'id', 
                                                                                'descricao'), 
                                                                array('class'=>'form-control select2', 
                                                                      'empty'=>'', 
                                                                      'style'=>'width: 100%',
                                                                      'ajax'=>array('type'=>'POST',
                                                                                    'dataType'=>'json',
                                                                                    'url'=> Yii::app()->createUrl('categorias/getDadosProduto'),
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
                            <?php echo $formItens->textField($itens,'valorTotalPrazo',array('size'=>11,'maxlength'=>11, 'class'=>'form-control', 'readOnly'=>TRUE)); ?>
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
                        'id'=>'itenscategoria-grid',
                        'dataProvider'=>$itens->search(),
                        'columns'=>array(
                                //'itensId',
                                //'categoriasId',
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
                                                'url'=>'Yii::app()->createUrl("categorias/deleteItem", array("id"=>"$data->itensId"))',
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
    document.getElementById('itenscategoria_valorUnitario').value = data.valorUnitario;
    document.getElementById('itenscategoria_quantidade').value = data.quantidade;
    document.getElementById('itenscategoria_valorDesconto').value = data.valorDesconto;
    document.getElementById('itenscategoria_valorTotalLiquido').value = data.valorTotalLiquido;
    document.getElementById('itenscategoria_valorTotalPrazo').value = data.valorTotalPrazo;
}

function updateValores() {
    var valorUn = document.getElementById('itenscategoria_valorUnitario');
    var qtd = document.getElementById('itenscategoria_quantidade');
    var desconto = document.getElementById('itenscategoria_valorDesconto');
    var liq = document.getElementById('itenscategoria_valorTotalLiquido');
    var prazo = document.getElementById('itenscategoria_valorTotalPrazo');
    
    var descPerc = desconto.value / 100;
    
    if (qtd.value <= 0) {
        qtd.value = 1;
    }
    
    prazo.value = qtd.value * valorUn.value;
    liq.value = prazo.value - (prazo.value * descPerc);
}

function calculaDesconto() {
    var valorUn = document.getElementById('itenscategoria_valorUnitario');
    var qtd = document.getElementById('itenscategoria_quantidade');
    var desconto = document.getElementById('itenscategoria_valorDesconto');
    var liq = document.getElementById('itenscategoria_valorTotalLiquido');
    var prazo = document.getElementById('itenscategoria_valorTotalPrazo');
    
    if (qtd.value <= 0) {
        qtd.value = 1;
    }
    
    var valorDesc = prazo.value - liq.value;
    
    desconto.value = roun (valorDesc / prazo.value) * 100; 
}
</script>