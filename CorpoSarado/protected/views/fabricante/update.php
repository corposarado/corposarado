<?php
/* @var $this FabricanteController */
/* @var $model Fabricante */

$this->breadcrumbs=array(
	'Fabricantes'=>array('index'),
	$model->codfabrincante=>array('view','id'=>$model->codfabrincante),
	'Update',
);

$this->menu=array(
	array('label'=>'List Fabricante', 'url'=>array('index')),
	array('label'=>'Create Fabricante', 'url'=>array('create')),
	array('label'=>'View Fabricante', 'url'=>array('view', 'id'=>$model->codfabrincante)),
	array('label'=>'Manage Fabricante', 'url'=>array('admin')),
);
?>

<h1>Update Fabricante <?php echo $model->codfabrincante; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>