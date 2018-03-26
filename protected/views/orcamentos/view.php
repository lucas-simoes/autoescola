<h3 style="text-align:center">Orçamento</h3>
<h5 style="text-align:center"><?php echo $model->empresas->nome; ?></h5>
<hr />
<table width="100%" border="0" cellspacing="10" cellpadding="4">
    
    <tr align="center">
        <td><font size=2><strong>Data: </strong><?php echo date('d/m/Y', strtotime($model->data)); ?></font></td>
        <td><font size=2><strong>Cliente: </strong><?php echo $model->clientes->nome; ?></font></td>
        <td><font size=2><strong>Validade: </strong><?php echo date('d/m/Y', strtotime($model->validade)); ?></font></td>
        <td><font size=2><strong>Categoria: </strong><?php echo $model->categorias->nome; ?></font> </td>
    </tr>
    
</table>
<h5 style="text-align:center"><u>Produtos/Serviços</u></h5>

<?php $this->widget('zii.widgets.grid.CGridView', array(
                        'id'=>'itensorcamento-grid',
                        'dataProvider'=>$titulos->search(),
                        'summaryText'=>'',
                        'columns'=>array(
                                array(
                                    'header'=>'<span style="text-align: left">Item</span>',
                                    'value'=>'$data->produtos->descricao',
                                    'htmlOptions' => array('style' => 'font-size: 10px; text-align: left; border: 1'),
                                ),
                                array(
                                    'header'=>'Quant.',
                                    'value'=>'$data->itens->quantidade',
                                    'htmlOptions' => array('style' => 'font-size: 10px; text-align: right; border: 1'),
                                ),
                                array(
                                    'name'=>'Total À Vista',
                                    'value'=>'$data->itens->valorTotalLiquido',
                                    'htmlOptions' => array('style' => 'font-size: 10px; text-align: right; border: 1'),
                                ),
                                array(
                                    'name'=>'Total A Prazo',
                                    'value'=>'$data->itens->valorTotalPrazo',
                                    'htmlOptions' => array('style' => 'font-size: 10px; text-align: right; border: 1'),
                                ),
                                array(
                                    'name'=>'Forma de Pagamento',
                                    'value'=>'$data->itens->modalidades->nome',
                                    'htmlOptions' => array('style' => 'font-size: 8px; text-align: left; border: 1'),
                                ),
                            ),
                        'htmlOptions' => array('style' => 'font-size: 8px'),    
 )); ?>

<hr />
<p><strong>Valor Total a Vista: R$<?php echo $model->valorLiquido; ?></strong></p>
<p><strong>Valor Total a Prazo: R$<?php echo $model->valorBruto; ?></strong></p>
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

