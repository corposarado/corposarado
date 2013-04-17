<?php
/* @var $this TipoProdutoController */
/* @var $model TipoProduto */

$this->breadcrumbs=array(
	'Tipo Produtos'=>array('index'),
	$model->cod_tipo,
);

$this->menu=array(
	array('label'=>'List TipoProduto', 'url'=>array('index')),
	array('label'=>'Create TipoProduto', 'url'=>array('create')),
	array('label'=>'Update TipoProduto', 'url'=>array('update', 'id'=>$model->cod_tipo)),
	array('label'=>'Delete TipoProduto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cod_tipo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoProduto', 'url'=>array('admin')),
);
?>

<h1>View TipoProduto #<?php echo $model->cod_tipo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cod_tipo',
		'descricao',
	),
)); ?>
