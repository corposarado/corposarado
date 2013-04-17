<?php
/* @var $this CidadeController */
/* @var $model Cidade */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cidade-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'UF'); ?>
		<?php echo $form->textField($model,'UF',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'UF'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cidade'); ?>
		<?php echo $form->textField($model,'Cidade',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Cidade'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->