<?php
$this->breadcrumbs=array(
	'Orcamentoses'=>array('index'),
	$model->orcamentosId,
);

?>


<h1><center> Orçamento</center></h1>
<h4><center><?php echo $model->empresas->nome; ?></center></h4>
<hr />
<br />
<br />
<table width="100%" border="0" cellspacing="10" cellpadding="4">
    
    <tr align="center">
        <td><strong>Data: </strong><?php echo date('d/m/Y', strtotime($model->data)); ?></td>
        <td><strong>Cliente: </strong><?php echo $model->clientes->nome; ?></td>
        <td><strong>Validade: </strong><?php echo date('d/m/Y', strtotime($model->validade)); ?></td>
    </tr>
    
</table>
<br />
<br />
<h4><center><u>Produtos/Serviços</u></center></h4>
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

<br />
<br />
<hr />
<table width="100%" border="0" cellspacing="10" cellpadding="4">
    
    <tr align="center">
        <td><strong>Telefone: </strong><?php echo $model->empresas->telefone; ?></td>
        <?php if($model->empresas->celular != ''){ ?>
        <td><strong>Celular: </strong><?php echo $model->empresas->celular; ?></td>
        <?php } ?>
        <?php if($model->empresas->telefone1 != ''){ ?>
        <td><strong>Moto Pista: </strong><?php echo $model->empresas->telefone1; ?></td>
        <?php } ?>
    </tr>
    
</table>

