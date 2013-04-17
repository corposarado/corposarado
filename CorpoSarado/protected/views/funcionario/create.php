<?php
/* @var $this FuncionarioController */
/* @var $model Funcionario */

$this->breadcrumbs=array(
	'Funcionarios'=>array('index'),
	'Criar',
);

$this->menu=array(
	array('label'=>'Listar Funcionário', 'url'=>array('index')),
	array('label'=>'Gerenciar Funcionário', 'url'=>array('admin')),
);
?>

<h1>Criar Funcionário</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>