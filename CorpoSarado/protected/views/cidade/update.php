<?php
/* @var $this CidadeController */
/* @var $model Cidade */

$this->breadcrumbs=array(
	'Cidades'=>array('index'),
	$model->cod_cid=>array('view','id'=>$model->cod_cid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cidade', 'url'=>array('index')),
	array('label'=>'Create Cidade', 'url'=>array('create')),
	array('label'=>'View Cidade', 'url'=>array('view', 'id'=>$model->cod_cid)),
	array('label'=>'Manage Cidade', 'url'=>array('admin')),
);
?>

<h1>Update Cidade <?php echo $model->cod_cid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>