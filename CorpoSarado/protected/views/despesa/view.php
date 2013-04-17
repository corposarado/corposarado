<?php
/* @var $this DespesaController */
/* @var $model Despesa */

$this->breadcrumbs=array(
	'Despesas'=>array('index'),
	$model->id_despesa,
);

$this->menu=array(
	array('label'=>'List Despesa', 'url'=>array('index')),
	array('label'=>'Create Despesa', 'url'=>array('create')),
	array('label'=>'Update Despesa', 'url'=>array('update', 'id'=>$model->id_despesa)),
	array('label'=>'Delete Despesa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_despesa),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Despesa', 'url'=>array('admin')),
);
?>

<h1>View Despesa #<?php echo $model->id_despesa; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_despesa',
		'descricao',
		'valor',
	),
)); ?>
