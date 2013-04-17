<?php
/* @var $this ProdutoController */
/* @var $model Produto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'produto-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_prod'); ?>
		<?php echo $form->textField($model,'cod_prod'); ?>
		<?php echo $form->error($model,'cod_prod'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valor_comercial'); ?>
		<?php echo $form->textField($model,'valor_comercial'); ?>
		<?php echo $form->error($model,'valor_comercial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valor_venda'); ?>
		<?php echo $form->textField($model,'valor_venda'); ?>
		<?php echo $form->error($model,'valor_venda'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descricao_prod'); ?>
		<?php echo $form->textField($model,'descricao_prod',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'descricao_prod'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codfabricante'); ?>
		<?php echo $form->textField($model,'codfabricante'); ?>
		<?php echo $form->error($model,'codfabricante'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->