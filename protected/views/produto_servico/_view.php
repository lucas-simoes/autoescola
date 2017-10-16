<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valorAvista')); ?>:</b>
	<?php echo CHtml::encode($data->valorAvista); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valorAprazo')); ?>:</b>
	<?php echo CHtml::encode($data->valorAprazo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('produtoAutoEscola')); ?>:</b>
	<?php echo CHtml::encode($data->produtoAutoEscola); ?>
	<br />


</div>