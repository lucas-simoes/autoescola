<?php
/*$this->breadcrumbs=array(
	'Orcamentoses'=>array('index'),
	$model->orcamentosId,
);*/

?>
<h3 style="text-align:center">Orçamento</h3>
<h5 style="text-align:center"><?php echo $model->empresas->nome; ?></h5>
<hr />
<table width="100%" border="0" cellspacing="10" cellpadding="4">
    
    <tr align="center">
        <td><font size=2><strong>Data: </strong><?php echo date('d/m/Y', strtotime($model->data)); ?></font></td>
        <td><font size=2><strong>Cliente: </strong><?php echo $model->clientes->nome; ?></font></td>
        <td><font size=2><strong>Validade: </strong><?php echo date('d/m/Y', strtotime($model->validade)); ?></font></td>
    </tr>
    
</table>
<h5 style="text-align:center"><u>Produtos/Serviços</u></h5>

<?php $this->widget('zii.widgets.grid.CGridView', array(
                        'id'=>'itensorcamento-grid',
                        'dataProvider'=>$titulos->search(),
                        'columns'=>array(
                                array(
                                    'name'=>'Item',
                                    'value'=>'$data->produtos->descricao',
                                ),
                                array(
                                    'name'=>'Quantidade',
                                    'value'=>'$data->itens->quantidade',
                                ),
                                array(
                                    'name'=>'Total À Vista',
                                    'value'=>'$data->itens->valorTotalLiquido',
                                ),
                                array(
                                    'name'=>'Total A Prazo',
                                    'value'=>'$data->itens->valorTotalPrazo',
                                ),
                                array(
                                    'name'=>'Forma de Pagamento',
                                    'value'=>'$data->itens->modalidades->nome',
                                ),
                                array(
                                    'name'=>'Parcelas',
                                    'value'=>'$data->parcelas',
                                ),
                            ),
 )); ?>

<hr />
<table width="100%" border="0" cellspacing="10" cellpadding="4">
    
    <tr align="center">
        <td><font size=1><strong>Telefone: </strong><?php echo $model->empresas->telefone; ?></font></td>
        <?php if($model->empresas->celular != ''){ ?>
        <td><font size=1><strong>Celular: </strong><?php echo $model->empresas->celular; ?></font></td>
        <?php } ?>
        <?php if($model->empresas->telefone1 != ''){ ?>
        <td><font size=1><strong>Moto Pista: </strong><?php echo $model->empresas->telefone1; ?></font></td>
        <?php } ?>
    </tr>
    
</table>