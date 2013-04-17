<?php
/* @var $this CidadeController */
/* @var $data Cidade */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_cid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cod_cid), array('view', 'id'=>$data->cod_cid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UF')); ?>:</b>
	<?php echo CHtml::encode($data->UF); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cidade')); ?>:</b>
	<?php echo CHtml::encode($data->Cidade); ?>
	<br />


</div>