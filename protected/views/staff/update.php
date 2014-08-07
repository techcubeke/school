<?php
/* @var $this StaffController */
/* @var $model Staff */

$this->breadcrumbs=array(
	'Staffs'=>array('index'),
	$model->staffID=>array('view','id'=>$model->staffID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Staff', 'url'=>array('index')),
	array('label'=>'Create Staff', 'url'=>array('create')),
	array('label'=>'View Staff', 'url'=>array('view', 'id'=>$model->staffID)),
	array('label'=>'Manage Staff', 'url'=>array('admin')),
);
?>

<h1>Update Staff <?php echo $model->staffID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>