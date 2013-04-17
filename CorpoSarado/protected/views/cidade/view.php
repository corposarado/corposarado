<?php
/* @var $this CidadeController */
/* @var $model Cidade */

$this->breadcrumbs=array(
	'Cidades'=>array('index'),
	$model->cod_cid,
);

$this->menu=array(
	array('label'=>'List Cidade', 'url'=>array('index')),
	array('label'=>'Create Cidade', 'url'=>array('create')),
	array('label'=>'Update Cidade', 'url'=>array('update', 'id'=>$model->cod_cid)),
	array('label'=>'Delete Cidade', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_cid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cidade', 'url'=>array('admin')),
);
?>

<h1>View Cidade #<?php echo $model->cod_cid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_cid',
		'UF',
		'Cidade',
	),
)); ?>
