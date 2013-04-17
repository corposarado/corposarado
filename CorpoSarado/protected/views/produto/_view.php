<?php
/* @var $this ProdutoController */
/* @var $data Produto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_prod')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_prod), array('view', 'id'=>$data->cod_prod)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_comercial')); ?>:</b>
	<?php echo CHtml::encode($data->valor_comercial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_venda')); ?>:</b>
	<?php echo CHtml::encode($data->valor_venda); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao_prod')); ?>:</b>
	<?php echo CHtml::encode($data->descricao_prod); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codfabricante')); ?>:</b>
	<?php echo CHtml::encode($data->codfabricante); ?>
	<br />


</div>