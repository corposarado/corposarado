<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */

$this->breadcrumbs=array(
	'Funcionarios'=>array('index'),
	$model->cod_func=>array('view','id'=>$model->cod_func),
	'Update',
);

$this->menu=array(
	array('label'=>'List Funcionario', 'url'=>array('index')),
	array('label'=>'Create Funcionario', 'url'=>array('create')),
	array('label'=>'View Funcionario', 'url'=>array('view', 'id'=>$model->cod_func)),
	array('label'=>'Manage Funcionario', 'url'=>array('admin')),
);
?>

<h1>Update Funcionario <?php echo $model->cod_func; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>