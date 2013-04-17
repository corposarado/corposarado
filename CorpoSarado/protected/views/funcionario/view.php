<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */

$this->breadcrumbs=array(
	'Funcionarios'=>array('index'),
	$model->cod_func,
);

$this->menu=array(
	array('label'=>'List Funcionario', 'url'=>array('index')),
	array('label'=>'Adicionar Funcionário', 'url'=>array('create')),
	array('label'=>'Update Funcionario', 'url'=>array('update', 'id'=>$model->cod_func)),
	array('label'=>'Delete Funcionario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_func),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Funcionario', 'url'=>array('admin')),
);
?>

<h1>View Funcionario #<?php echo $model->cod_func; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_func',
		'nome',
		'endereco',
		'data_nasci',
		'telefone',
		'email',
		'senha',
		'admin',
		'uf',
		'cidade',
	),
)); ?>
