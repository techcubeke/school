<?php
/* @var $this StaffController */
/* @var $model Staff */

$this->breadcrumbs=array(
	'Staffs'=>array('index'),
	$model->staffID,
);

$this->menu=array(
	array('label'=>'List Staff', 'url'=>array('index')),
	array('label'=>'Create Staff', 'url'=>array('create')),
	array('label'=>'Update Staff', 'url'=>array('update', 'id'=>$model->staffID)),
	array('label'=>'Delete Staff', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->staffID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Staff', 'url'=>array('admin')),
);
?>

<h1>View Staff #<?php echo $model->staffID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'staffID',
		'schoolID',
		'employeecode',
		'initials',
		'firstname',
		'middlename',
		'lastname',
		'photoimage',
		'employmenttype',
		'gender',
		'dateofbirth',
		'address',
		'phoneno',
		'email',
		'religion',
		'jobtitle',
		'specialization',
		'maritalstatus',
		'joindate',
		'releasedate',
		'nationalID',
		'notes',
		'departmentcode',
	),
)); ?>
