<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('modalidadesId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->modalidadesId), array('view', 'id'=>$data->modalidadesId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prazo')); ?>:</b>
	<?php echo CHtml::encode($data->prazo); ?>
	<br />


</div>