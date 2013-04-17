<?php
/* @var $this DespesaController */
/* @var $model Despesa */

$this->breadcrumbs=array(
	'Despesas'=>array('index'),
	$model->id_despesa=>array('view','id'=>$model->id_despesa),
	'Update',
);

$this->menu=array(
	array('label'=>'List Despesa', 'url'=>array('index')),
	array('label'=>'Create Despesa', 'url'=>array('create')),
	array('label'=>'View Despesa', 'url'=>array('view', 'id'=>$model->id_despesa)),
	array('label'=>'Manage Despesa', 'url'=>array('admin')),
);
?>

<h1>Update Despesa <?php echo $model->id_despesa; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>