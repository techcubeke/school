<?php
/* @var $this ExamrecordController */
/* @var $model Examrecord */

$this->breadcrumbs=array(
	'Examrecords'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Examrecord', 'url'=>array('index')),
	array('label'=>'Manage Examrecord', 'url'=>array('admin')),
);
?>

<h1>Create Examrecord</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>