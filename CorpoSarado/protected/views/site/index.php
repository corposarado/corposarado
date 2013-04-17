<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1><i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<div class="span-5 last">
<div id="sidebar">
<?php
	$this->menu=array(
	array('label'=>'Create Funcionario', 'url'=>array('funcionario/create')),
	array('label'=>'Manage Funcionario', 'url'=>array('admin')),
);
?>


<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Gerenciar Funcionario', 'url'=>array('/funcionario', 'view'=>'Funcionario')),
				array('label'=>'Gerenciar Clientes', 'url'=>array('/cliente', 'view'=>'Cliente')),
				array('label'=>'Gerenciar Produto', 'url'=>array('/produto', 'view'=>'Produto')),
				array('label'=>'Gerenciar pedidos', 'url'=>array('/pedido', 'view'=>'Pedido')),
				array('label'=>'Gerenciar Despesas', 'url'=>array('/despesa', 'view'=>'Despesa')),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div>