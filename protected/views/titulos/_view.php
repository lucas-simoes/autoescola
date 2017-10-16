<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulosId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->titulosId), array('view', 'id'=>$data->titulosId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor')); ?>:</b>
	<?php echo CHtml::encode($data->valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parcelas')); ?>:</b>
	<?php echo CHtml::encode($data->parcelas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vencimento')); ?>:</b>
	<?php echo CHtml::encode($data->vencimento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orcamentosId')); ?>:</b>
	<?php echo CHtml::encode($data->orcamentosId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('produtosId')); ?>:</b>
	<?php echo CHtml::encode($data->produtosId); ?>
	<br />


</div>