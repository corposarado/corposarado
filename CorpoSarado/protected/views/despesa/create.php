<?php
/* @var $this DespesaController */
/* @var $model Despesa */

$this->breadcrumbs=array(
	'Despesas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Despesa', 'url'=>array('index')),
	array('label'=>'Manage Despesa', 'url'=>array('admin')),
);
?>

<h1>Create Despesa</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>