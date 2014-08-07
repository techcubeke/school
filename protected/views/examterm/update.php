<?php
/* @var $this ExamtermController */
/* @var $model Examterm */

$this->breadcrumbs=array(
	'Examterms'=>array('index'),
	$model->examtermID=>array('view','id'=>$model->examtermID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Examterm', 'url'=>array('index')),
	array('label'=>'Create Examterm', 'url'=>array('create')),
	array('label'=>'View Examterm', 'url'=>array('view', 'id'=>$model->examtermID)),
	array('label'=>'Manage Examterm', 'url'=>array('admin')),
);
?>

<h1>Update Examterm <?php echo $model->examtermID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>