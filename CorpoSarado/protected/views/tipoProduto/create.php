<?php
/* @var $this TipoProdutoController */
/* @var $model TipoProduto */

$this->breadcrumbs=array(
	'Tipo Produtos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoProduto', 'url'=>array('index')),
	array('label'=>'Manage TipoProduto', 'url'=>array('admin')),
);
?>

<h1>Create TipoProduto</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>