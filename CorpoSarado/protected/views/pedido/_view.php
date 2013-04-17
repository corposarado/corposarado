<?php
/* @var $this PedidoController */
/* @var $data Pedido */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_pedido')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_pedido), array('view', 'id'=>$data->cod_pedido)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_pedido')); ?>:</b>
	<?php echo CHtml::encode($data->data_pedido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_funcionario')); ?>:</b>
	<?php echo CHtml::encode($data->cod_funcionario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_cli')); ?>:</b>
	<?php echo CHtml::encode($data->cod_cli); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valortotal')); ?>:</b>
	<?php echo CHtml::encode($data->valortotal); ?>
	<br />


</div>