<?php
/* @var $this ProjectCategoryController */
/* @var $model ProjectCategory */

$this->breadcrumbs=array(
	'Project Categories'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List ProjectCategory', 'url'=>array('index')),
	array('label'=>'Create ProjectCategory', 'url'=>array('create')),
	array('label'=>'Update ProjectCategory', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete ProjectCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProjectCategory', 'url'=>array('admin')),
);
?>

<h1>View ProjectCategory #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'Name',
	),
)); ?>
