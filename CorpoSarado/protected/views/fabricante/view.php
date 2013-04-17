<?php
/* @var $this FabricanteController */
/* @var $model Fabricante */

$this->breadcrumbs=array(
	'Fabricantes'=>array('index'),
	$model->codfabrincante,
);

$this->menu=array(
	array('label'=>'List Fabricante', 'url'=>array('index')),
	array('label'=>'Create Fabricante', 'url'=>array('create')),
	array('label'=>'Update Fabricante', 'url'=>array('update', 'id'=>$model->codfabrincante)),
	array('label'=>'Delete Fabricante', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codfabrincante),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Fabricante', 'url'=>array('admin')),
);
?>

<h1>View Fabricante #<?php echo $model->codfabrincante; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codfabrincante',
		'nome',
	),
)); ?>
