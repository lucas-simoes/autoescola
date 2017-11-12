<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('itensId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->itensId), array('view', 'id'=>$data->itensId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categoriasId')); ?>:</b>
	<?php echo CHtml::encode($data->categoriasId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('produtosId')); ?>:</b>
	<?php echo CHtml::encode($data->produtosId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantidade')); ?>:</b>
	<?php echo CHtml::encode($data->quantidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valorUnitario')); ?>:</b>
	<?php echo CHtml::encode($data->valorUnitario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valorDesconto')); ?>:</b>
	<?php echo CHtml::encode($data->valorDesconto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valorTotalLiquido')); ?>:</b>
	<?php echo CHtml::encode($data->valorTotalLiquido); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('valorTotalPrazo')); ?>:</b>
	<?php echo CHtml::encode($data->valorTotalPrazo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modalidadesId')); ?>:</b>
	<?php echo CHtml::encode($data->modalidadesId); ?>
	<br />

	*/ ?>

</div>