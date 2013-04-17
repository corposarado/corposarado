<?php
/* @var $this FornecedorController */
/* @var $data Fornecedor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_forn')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_forn), array('view', 'id'=>$data->cod_forn)); ?>
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


</div>