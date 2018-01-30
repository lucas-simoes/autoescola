<?php
$this->breadcrumbs=array(
	'Contratoses'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#contratos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>



<div class="box">
    <div class="box-header">
                        <h2>Cidades</h2>



        <div class="search-form">
            <?php $this->renderPartial('_search',array(
                'model'=>$model,
            )); ?>
        </div><!-- search-form -->
        <div class="box-header with-border">
            <?php $this->widget('zii.widgets.grid.CGridView', array(
                    'id'=>'contratos-grid',
                    'dataProvider'=>$model->search(),    
                    'columns'=>array(
                            'id',
                            'nome',                            
                            'categoria',
                            array(
                                    'class'=>'CButtonColumn',
                                    'template'=>'{update}{deletar}',
                                    'updateButtonLabel' => '<i class="fa fa-eye"></i>',
                                    'updateButtonImageUrl'=> false,
                                    'deleteButtonLabel' => '<i class="fa fa-trash"></i>',
                                    'deleteButtonImageUrl'=> false,
                                    'buttons' => array (
                                        'update' => array(
                                            'options'=>array('title'=>'Ver Cadastro', 'class'=>'btn btn-default' ),
                                            'label'=>'<i class="fa fa-eye"></i>',
                                            'url'=>'Yii::app()->createUrl("cidades/update", array("id"=>"$data->id"))',
                                        ),
                                        'deletar' => array(
                                            'label'=>'<i class="fa fa-trash"></i>',
                                            'url'=>'Yii::app()->createUrl("cidades/delete", array("id"=>"$data->id"))',
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

