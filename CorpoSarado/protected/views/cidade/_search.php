<?php
/* @var $this CidadeController */
/* @var $model Cidade */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_cid'); ?>
		<?php echo $form->textField($model,'cod_cid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UF'); ?>
		<?php echo $form->textField($model,'UF',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cidade'); ?>
		<?php echo $form->textField($model,'Cidade',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->