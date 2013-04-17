<?php
/* @var $this ClienteController */
/* @var $data Cliente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_cli')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_cli), array('view', 'id'=>$data->cod_cli)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('endereco')); ?>:</b>
	<?php echo CHtml::encode($data->endereco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefone')); ?>:</b>
	<?php echo CHtml::encode($data->telefone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_nasci')); ?>:</b>
	<?php echo CHtml::encode($data->data_nasci); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UF')); ?>:</b>
	<?php echo CHtml::encode($data->UF); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cidade')); ?>:</b>
	<?php echo CHtml::encode($data->cidade); ?>
	<br />

	*/ ?>

</div>