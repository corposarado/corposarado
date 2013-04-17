<?php
/* @var $this FornecedorController */
/* @var $model Fornecedor */

$this->breadcrumbs=array(
	'Fornecedors'=>array('index'),
	$model->cod_forn,
);

$this->menu=array(
	array('label'=>'List Fornecedor', 'url'=>array('index')),
	array('label'=>'Create Fornecedor', 'url'=>array('create')),
	array('label'=>'Update Fornecedor', 'url'=>array('update', 'id'=>$model->cod_forn)),
	array('label'=>'Delete Fornecedor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_forn),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Fornecedor', 'url'=>array('admin')),
);
?>

<h1>View Fornecedor #<?php echo $model->cod_forn; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_forn',
		'nome',
		'endereco',
		'telefone',
		'email',
	),
)); ?>
