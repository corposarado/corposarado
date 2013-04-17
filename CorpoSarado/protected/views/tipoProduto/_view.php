<?php
/* @var $this TipoProdutoController */
/* @var $data TipoProduto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_tipo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_tipo), array('view', 'id'=>$data->cod_tipo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />


</div>