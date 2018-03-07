<?php
$this->breadcrumbs = array(
    'Orcamentoses' => array('index'),
    'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#orcamentos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="box">
    <div class="box-header">
        <h1>Orçamentos</h1>


        <div class="search-form" style="display:none">
            <?php
            $this->renderPartial('_search', array(
                'model' => $model,
            ));
            ?>
        </div><!-- search-form -->
        <div class="box-header with-border">

            <?php
            $this->widget('zii.widgets.grid.CGridView', array(
                'id' => 'orcamentos-grid',
                'dataProvider' => $model->search(),
                'columns' => array(
                    'orcamentosId',
                    array(
                        'name'=>'Data',
                        'value'=>'date("d/m/Y", strtotime($data->data))'
                    ),
                    'clientes.nome',
                    'valorBruto',
                    'valorDesconto',
                    'valorLiquido',
                    'statusNome',
                    /* 'usuariosId',
                      'validade',
                      'valorPrazo',
                      'inclusao',
                      'empresasId',
                     */
                    array(
                        'class' => 'CButtonColumn',
                        'template' => '{view}{update}{deletar}',
                        'updateButtonLabel' => '<i class="fa fa-eye"></i>',
                        'updateButtonImageUrl' => false,
                        'deleteButtonLabel' => '<i class="fa fa-trash"></i>',
                        'deleteButtonImageUrl' => false,
                        'viewButtonLabel' => '<i class="fa fa-trash"></i>',
                        'viewButtonImageUrl' => false,
                        'buttons' => array(
                            'view' => array(
                                'options' => array('title' => 'Imprimir', 'class' => 'btn btn-default', 'target' => '_new'),
                                'label' => '<i class="fa fa-print"></i>',
                                'url' => 'Yii::app()->createUrl("orcamentos/view", array("id"=>"$data->orcamentosId"))',
                            ),
                            'update' => array(
                                'options' => array('title' => 'Ver Cadastro', 'class' => 'btn btn-default'),
                                'label' => '<i class="fa fa-eye"></i>',
                                'url' => 'Yii::app()->createUrl("orcamentos/update", array("id"=>"$data->orcamentosId"))',
                            ),
                            'deletar' => array(
                                'label' => '<i class="fa fa-trash"></i>',
                                'url' => 'Yii::app()->createUrl("orcamentos/delete", array("id"=>"$data->orcamentosId"))',
                                'options' => array('title' => 'Excluir', 'class' => 'btn btn-default'),
                            ),
                        ),
                    ),
                ),
                'htmlOptions' => array('class' => 'table table-responsive'),
                'itemsCssClass' => 'table table-hover',
                'pagerCssClass' => 'text-center',
                'pager' => array(
                    'htmlOptions' => array('class' => 'pagination pagination-sm no-margin pull-right'),
                    'header' => '',
                ),
            ));
            ?>
        </div>


    </div>
</div>
