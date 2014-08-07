<?php
/* @var $this ExamrecordController */
/* @var $model Examrecord */

$this->breadcrumbs=array(
	'Examrecords'=>array('index'),
	$model->examID=>array('view','id'=>$model->examID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Examrecord', 'url'=>array('index')),
	array('label'=>'Create Examrecord', 'url'=>array('create')),
	array('label'=>'View Examrecord', 'url'=>array('view', 'id'=>$model->examID)),
	array('label'=>'Manage Examrecord', 'url'=>array('admin')),
);
?>

<h1>Update Examrecord <?php echo $model->examID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>