<?php
/* @var $this DespesaController */
/* @var $data Despesa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_despesa')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_despesa), array('view', 'id'=>$data->id_despesa)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor')); ?>:</b>
	<?php echo CHtml::encode($data->valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_vencimento')); ?>:</b>
	<?php echo CHtml::encode($data->data_vencimento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_funcionario')); ?>:</b>
	<?php echo CHtml::encode($data->id_funcionario); ?>
	<br />


</div>