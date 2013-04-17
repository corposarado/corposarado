<?php
/* @var $this FabricanteController */
/* @var $data Fabricante */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('codfabrincante')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codfabrincante), array('view', 'id'=>$data->codfabrincante)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />


</div>