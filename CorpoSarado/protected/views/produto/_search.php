<?php
/* @var $this ProdutoController */
/* @var $model Produto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cod_prod'); ?>
		<?php echo $form->textField($model,'cod_prod'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_comercial'); ?>
		<?php echo $form->textField($model,'valor_comercial'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_venda'); ?>
		<?php echo $form->textField($model,'valor_venda'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descricao_prod'); ?>
		<?php echo $form->textField($model,'descricao_prod',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codfabricante'); ?>
		<?php echo $form->textField($model,'codfabricante'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->