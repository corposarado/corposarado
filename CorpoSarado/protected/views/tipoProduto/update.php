<?php
/* @var $this TipoProdutoController */
/* @var $model TipoProduto */

$this->breadcrumbs=array(
	'Tipo Produtos'=>array('index'),
	$model->cod_tipo=>array('view','id'=>$model->cod_tipo),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoProduto', 'url'=>array('index')),
	array('label'=>'Create TipoProduto', 'url'=>array('create')),
	array('label'=>'View TipoProduto', 'url'=>array('view', 'id'=>$model->cod_tipo)),
	array('label'=>'Manage TipoProduto', 'url'=>array('admin')),
);
?>

<h1>Update TipoProduto <?php echo $model->cod_tipo; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>