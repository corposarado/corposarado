<?php
/* @var $this PedidoController */
/* @var $model Pedido */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_pedido'); ?>
		<?php echo $form->textField($model,'cod_pedido'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_pedido'); ?>
		<?php echo $form->textField($model,'data_pedido'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_funcionario'); ?>
		<?php echo $form->textField($model,'cod_funcionario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_cli'); ?>
		<?php echo $form->textField($model,'cod_cli'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valortotal'); ?>
		<?php echo $form->textField($model,'valortotal'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->