<?php
/* @var $this StudentController */
/* @var $model Student */

$this->breadcrumbs=array(
	'Students'=>array('index'),
	$model->studentID,
);

$this->menu=array(
	array('label'=>'List Student', 'url'=>array('index')),
	array('label'=>'Create Student', 'url'=>array('create')),
	array('label'=>'Update Student', 'url'=>array('update', 'id'=>$model->studentID)),
	array('label'=>'Delete Student', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->studentID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Student', 'url'=>array('admin')),
);
?>

<h1>View Student #<?php echo $model->studentID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'studentID',
		'schoolID',
		'academicsessionID',
		'adminno',
		'firstname',
		'middlename',
		'lastname',
		'dateofbirth',
		'citizenship',
		'parentname',
		'photoimage',
		'emergencynumber',
		'postaladress',
		'email',
		'classroom',
		'admindate',
		'gender',
		'dorm',
		'religion',
	),
)); ?>
