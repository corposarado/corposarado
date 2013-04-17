
  <?php $this->widget('bootstrap.widgets.TbButton', array(
                        'icon' => 'icon-plus',
                        'size' =>'medium',
                        'type' => 'warning',
                        'buttonType' => 'ajaxLink',
                        'url' => $this->createUrl('addItem'),
                        'ajaxOptions'=>array('type'=>'POST', 'success'=>'allFine'),
                        
                )); ?>
<?php
/* @var $this PedidoController */
/* @var $model Pedido */

$this->breadcrumbs=array(
	'Pedidos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pedido', 'url'=>array('index')),
	array('label'=>'Manage Pedido', 'url'=>array('admin')),
);
?>

<h1>Create Pedido</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>