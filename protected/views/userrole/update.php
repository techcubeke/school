<?php
/* @var $this UserroleController */
/* @var $model Userrole */

$this->breadcrumbs=array(
	'Userroles'=>array('index'),
	$model->roleID=>array('view','id'=>$model->roleID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Userrole', 'url'=>array('index')),
	array('label'=>'Create Userrole', 'url'=>array('create')),
	array('label'=>'View Userrole', 'url'=>array('view', 'id'=>$model->roleID)),
	array('label'=>'Manage Userrole', 'url'=>array('admin')),
);
?>

<h1>Update Userrole <?php echo $model->roleID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>