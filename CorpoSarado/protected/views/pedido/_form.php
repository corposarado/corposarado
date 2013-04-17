<?php
/* @var $this PedidoController */
/* @var $model Pedido */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pedido-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'data_pedido'); ?>
		<?php echo $form->textField($model,'data_pedido'); ?>
		<?php echo $form->error($model,'data_pedido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_funcionario'); ?>
		<?php echo $form->textField($model,'cod_funcionario'); ?>
		<?php echo $form->error($model,'cod_funcionario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_cli'); ?>
		<?php echo $form->textField($model,'cod_cli'); ?>
		<?php echo $form->error($model,'cod_cli'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valortotal'); ?>
		<?php echo $form->textField($model,'valortotal'); ?>
		<?php echo $form->error($model,'valortotal'); ?>
	</div>
	<div class="row">
		<?php echo Produto::model()->findByPk(1); ?>
		<?php echo $form->labelEx(Item::model(),'valorunitario'); ?>
		<?php echo $form->textField(Item::model(),'valorunitario'); ?>
		<?php echo $form->error(Item::model(),'valorunitario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->