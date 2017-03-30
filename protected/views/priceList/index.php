<?php
/* @var $this PriceListController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Price Lists',
);

$this->menu=array(
	array('label'=>'Create PriceList', 'url'=>array('create')),
	array('label'=>'Manage PriceList', 'url'=>array('admin')),
);
?>

<h1>Price Lists</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
