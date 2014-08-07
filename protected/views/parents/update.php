<?php
/* @var $this ParentsController */
/* @var $model Parents */

$this->breadcrumbs=array(
	'Parents'=>array('index'),
	$model->parentID=>array('view','id'=>$model->parentID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Parents', 'url'=>array('index')),
	array('label'=>'Create Parents', 'url'=>array('create')),
	array('label'=>'View Parents', 'url'=>array('view', 'id'=>$model->parentID)),
	array('label'=>'Manage Parents', 'url'=>array('admin')),
);
?>

<h1>Update Parents <?php echo $model->parentID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>