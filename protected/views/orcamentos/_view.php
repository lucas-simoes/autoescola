<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('orcamentosId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->orcamentosId), array('view', 'id'=>$data->orcamentosId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
	<?php echo CHtml::encode($data->data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clientesId')); ?>:</b>
	<?php echo CHtml::encode($data->clientesId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valorBruto')); ?>:</b>
	<?php echo CHtml::encode($data->valorBruto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valorDesconto')); ?>:</b>
	<?php echo CHtml::encode($data->valorDesconto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valorLiquido')); ?>:</b>
	<?php echo CHtml::encode($data->valorLiquido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('usuariosId')); ?>:</b>
	<?php echo CHtml::encode($data->usuariosId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('validade')); ?>:</b>
	<?php echo CHtml::encode($data->validade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valorPrazo')); ?>:</b>
	<?php echo CHtml::encode($data->valorPrazo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inclusao')); ?>:</b>
	<?php echo CHtml::encode($data->inclusao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('empresasId')); ?>:</b>
	<?php echo CHtml::encode($data->empresasId); ?>
	<br />

	*/ ?>

</div>