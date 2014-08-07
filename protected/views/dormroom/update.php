<?php
/* @var $this DormroomController */
/* @var $model Dormroom */

$this->breadcrumbs=array(
	'Dormrooms'=>array('index'),
	$model->dormname=>array('view','id'=>$model->dormname),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dormroom', 'url'=>array('index')),
	array('label'=>'Create Dormroom', 'url'=>array('create')),
	array('label'=>'View Dormroom', 'url'=>array('view', 'id'=>$model->dormname)),
	array('label'=>'Manage Dormroom', 'url'=>array('admin')),
);
?>

<h1>Update Dormroom <?php echo $model->dormname; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>